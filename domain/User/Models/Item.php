<?php

namespace Domain\User\Models;

use Domain\User\Enums\KanbanBoardStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

/**
 * Domain\User\Models\Item
 *
 * @property string $title
 * @property string $description
 * @property string $status
 * @property int $order
 * @property \Carbon\Carbon $created_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder whereDate($column, $value)
 */
class Item extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;

    /** @var array<int, string> */
    protected $fillable = [
        'title',
        'description',
        'status',
        'order',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'status' => KanbanBoardStatus::class,
    ];

    /** @var array<string, mixed> */
    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];
}
