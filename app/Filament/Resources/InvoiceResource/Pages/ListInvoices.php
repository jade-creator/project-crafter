<?php

namespace App\Filament\Resources\InvoiceResource\Pages;

use App\Filament\Resources\InvoiceResource;
use Domain\Transaction\QueryBuilders\InvoiceEloquentQueryBuilder;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListInvoices extends ListRecords
{
    protected static string $resource = InvoiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    #[\Override]
    public function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'draft' => Tab::make()
                ->modifyQueryUsing(fn (InvoiceEloquentQueryBuilder $query) => $query->whereDrafted()),
            'sent' => Tab::make()
                ->modifyQueryUsing(fn (InvoiceEloquentQueryBuilder $query) => $query->whereSent()),
            'pending' => Tab::make()
                ->modifyQueryUsing(fn (InvoiceEloquentQueryBuilder $query) => $query->wherePending()),
            'paid' => Tab::make()
                ->modifyQueryUsing(fn (InvoiceEloquentQueryBuilder $query) => $query->wherePaid()),
            'partial' => Tab::make()
                ->modifyQueryUsing(fn (InvoiceEloquentQueryBuilder $query) => $query->wherePartiallyPaid()),
            'cancelled' => Tab::make()
                ->modifyQueryUsing(fn (InvoiceEloquentQueryBuilder $query) => $query->whereCancelled()),
            'refunded' => Tab::make()
                ->modifyQueryUsing(fn (InvoiceEloquentQueryBuilder $query) => $query->whereRefunded()),
        ];
    }
}
