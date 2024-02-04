<?php

namespace Domain\Transaction\Models;

use App\Casts\MoneyCast;
use Database\Factories\InvoiceFactory;
use Domain\Client\Models\Client;
use Domain\Transaction\QueryBuilders\InvoiceEloquentQueryBuilder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * \Domain\Transaction\Models\Invoice
 *
 * @property int $reference
 * @property int $client_id
 * @property string $status
 * @property \Carbon\Carbon $date
 * @property float $vat_rate
 * @property float $discount_by_percent
 * @property float $shipping_costs
 * @property float $total_price
 * @property-read \Domain\Client\Models\Client $client
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Domain\Transaction\Models\InvoiceItem> $invoiceItems
 *
 * @method static \Domain\Transaction\QueryBuilders\InvoiceEloquentQueryBuilder|\Domain\Transaction\Models\Invoice whereDrafted()
 * @method static \Domain\Transaction\QueryBuilders\InvoiceEloquentQueryBuilder|\Domain\Transaction\Models\Invoice whereSent()
 * @method static \Domain\Transaction\QueryBuilders\InvoiceEloquentQueryBuilder|\Domain\Transaction\Models\Invoice wherePending()
 * @method static \Domain\Transaction\QueryBuilders\InvoiceEloquentQueryBuilder|\Domain\Transaction\Models\Invoice wherePaid()
 * @method static \Domain\Transaction\QueryBuilders\InvoiceEloquentQueryBuilder|\Domain\Transaction\Models\Invoice wherePartiallyPaid()
 * @method static \Domain\Transaction\QueryBuilders\InvoiceEloquentQueryBuilder|\Domain\Transaction\Models\Invoice whereCancelled()
 * @method static \Domain\Transaction\QueryBuilders\InvoiceEloquentQueryBuilder|\Domain\Transaction\Models\Invoice whereRefunded()
 */
class Invoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    /** @var array<int, string> */
    protected $fillable = [
        'reference',
        'client_id',
        'status',
        'date',
        'vat_rate',
        'discount_by_percent',
        'shipping_costs',
        'total_price',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'date' => 'datetime',
        'shipping_costs' => MoneyCast::class,
        'total_price' => MoneyCast::class,
    ];

    /** @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Domain\Client\Models\Client, \Domain\Transaction\Models\Invoice> */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /** @return \Illuminate\Database\Eloquent\Relations\HasMany<\Domain\Transaction\Models\InvoiceItem> */
    public function invoiceItems(): HasMany
    {
        return $this->hasMany(InvoiceItem::class);
    }

    #[\Override]
    public function newEloquentBuilder($query): InvoiceEloquentQueryBuilder
    {
        return new InvoiceEloquentQueryBuilder($query);
    }

    protected static function newFactory(): Factory
    {
        return InvoiceFactory::new();
    }
}
