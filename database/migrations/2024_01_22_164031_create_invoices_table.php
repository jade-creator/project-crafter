<?php

use Domain\Client\Models\Client;
use Domain\Transaction\Enums\InvoiceStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reference')
                ->unique()
                ->index();
            $table->foreignIdFor(Client::class);
            $table->string('status')
                ->default(InvoiceStatus::DRAFT->value)
                ->index();
            $table->date('date');
            $table->double('vat_rate');
            $table->double('discount_by_percent')->default(0);
            $table->bigInteger('shipping_costs')->default(0);
            $table->bigInteger('total_price');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
