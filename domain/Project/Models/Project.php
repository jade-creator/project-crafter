<?php

namespace Domain\Project\Models;

use App\Casts\MoneyCast;
use Database\Factories\ProjectFactory;
use Domain\Client\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * \Domain\Project\Models\Project
 *
 * @property int $client_id
 * @property string $name
 * @property string|null $description
 * @property string $currency
 * @property float $hourly_rate
 * @property-read \Domain\Client\Models\Client $client
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Domain\Project\Models\TaskLog>|null $taskLogs
 */
class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    /** @var array<int, string> */
    protected $fillable = [
        'client_id',
        'name',
        'description',
        'currency',
        'hourly_rate',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'hourly_rate' => MoneyCast::class,
    ];

    /** @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Domain\Client\Models\Client, \Domain\Project\Models\Project> */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /** @return \Illuminate\Database\Eloquent\Relations\HasMany<\Domain\Project\Models\TaskLog> */
    public function taskLogs(): HasMany
    {
        return $this->hasMany(TaskLog::class);
    }

    protected static function newFactory(): Factory
    {
        return ProjectFactory::new();
    }
}
