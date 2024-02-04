<?php

use Domain\Client\Models\Client;
use Domain\Transaction\Enums\PaymentType;
use Domain\Transaction\Models\Invoice;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Client::class);
            $table->foreignIdFor(Invoice::class);
            $table->string('name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('reference_number')->nullable();
            $table->date('date');
            $table->string('type')
                ->default(PaymentType::ONLINE->value)
                ->index();
            $table->string('currency');
            $table->bigInteger('amount');
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
