<?php

namespace Domain\Transaction\Models;

use App\Casts\MoneyCast;
use Domain\Client\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * \Domain\Transaction\Models\Payment
 *
 * @property int $client_id
 * @property int $invoice_id
 * @property string $name
 * @property string $account_number
 * @property string $reference_number
 * @property \Carbon\Carbon $date
 * @property string $type
 * @property string $currency
 * @property float $amount
 * @property string $notes
 * @property-read \Domain\Client\Models\Client|null $client
 * @property-read \Domain\Transaction\Models\Invoice|null $invoice
 */
class Payment extends Model
{
    use HasFactory;
    use SoftDeletes;

    /** @var array<int, string> */
    protected $fillable = [
        'client_id',
        'invoice_id',
        'name',
        'account_number',
        'reference_number',
        'date',
        'type',
        'currency',
        'amount',
        'notes',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'amount' => MoneyCast::class,
        'date' => 'date',
    ];

    /** @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Domain\Client\Models\Client, \Domain\Transaction\Models\Payment> */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /** @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Domain\Transaction\Models\Invoice, \Domain\Transaction\Models\Payment> */
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }
}
