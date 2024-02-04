<?php

namespace Domain\Transaction\Models;

use App\Casts\MoneyCast;
use Database\Factories\InvoiceItemFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * \Domain\Transaction\Models\InvoiceItem
 *
 * @property int $invoice_id
 * @property string $title
 * @property float $price_per_unit
 * @property int $quantity
 */
class InvoiceItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    /** @var array<int, string> */
    protected $fillable = [
        'invoice_id',
        'title',
        'price_per_unit',
        'quantity',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'price_per_unit' => MoneyCast::class,
    ];

    /** @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Domain\Transaction\Models\Invoice, \Domain\Transaction\Models\InvoiceItem> */
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

    protected static function newFactory(): Factory
    {
        return InvoiceItemFactory::new();
    }
}
