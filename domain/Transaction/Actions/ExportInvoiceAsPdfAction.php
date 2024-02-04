<?php

namespace Domain\Transaction\Actions;

use App\Settings\GeneralSettings;
use Domain\Transaction\Models\Invoice;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Invoice as LaravelDailyInvoice;

readonly class ExportInvoiceAsPdfAction
{
    public function __construct(
        public GeneralSettings $settings
    ) {
    }

    public function execute(Invoice $invoice): mixed
    {
        $client = new Party([
            'name' => $this->settings->name,
            'phone' => $this->settings->phone,
            'custom_fields' => [
                'code' => $this->settings->code,
                'vat' => $this->settings->vat,
                'address' => $this->settings->phone,
            ],
        ]);

        $customer = new Party([
            'name' => $invoice->client->name,
            'phone' => $invoice->client->phone,
            'custom_fields' => [
                'country' => $invoice->client->country,
            ],
        ]);

        $items = [];

        foreach ($invoice->invoiceItems as $item) {
            $items[] = InvoiceItem::make($item->title)
                ->pricePerUnit($item->price_per_unit)
                ->quantity($item->quantity)
                ->subTotalPrice(
                    money($item->price_per_unit)
                        ->multiply($item->quantity)
                        ->getAmount()
                );
        }

        $invoice = LaravelDailyInvoice::make()
            ->status(trans($invoice->status))
            ->seller($client)
            ->buyer($customer)
            ->payUntilDays(1)
            ->filename(
                sprintf(
                    '%s/%s-%s-invoice',
                    'invoices',
                    $invoice->reference,
                    now()->format('Y-m-d-H-i-s')
                )
            )
            ->addItems($items)
            ->totalAmount($invoice->total_price)
            ->save(config('filesystems.default'));

        return $invoice->url();
    }
}
