<?php

namespace Domain\Project\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Domain\Project\Models\TaskLog
 *
 * @property int $project_id
 * @property int $hours
 * @property \Carbon\Carbon $date_accomplished
 * @property string $description
 * @property-read \Domain\Project\Models\Project $project
 */
class TaskLog extends Model
{
    use HasFactory;
    use SoftDeletes;

    /** @var array<int, string> */
    protected $fillable = [
        'project_id',
        'hours',
        'date_accomplished',
        'description',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'date_accomplished' => 'date',
    ];

    /** @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Domain\Project\Models\Project, \Domain\Project\Models\TaskLog> */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
