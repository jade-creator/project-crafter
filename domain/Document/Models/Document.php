<?php

namespace Domain\Document\Models;

use Database\Factories\DocumentFactory;
use Domain\Client\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * \Domain\Document\Models\Document
 *
 * @property int $client_id
 * @property string $name
 * @property string|null $description
 * @property \Carbon\Carbon $date
 * @property-read \Domain\Client\Models\Client|null $client
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 */
class Document extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use SoftDeletes;

    /** @var array<int, string> */
    protected $fillable = [
        'client_id',
        'name',
        'description',
        'date',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'date' => 'datetime',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('file')
            ->acceptsMimeTypes([
                'application/pdf',
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            ])
            ->singleFile();
    }

    /** @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Domain\Client\Models\Client, \Domain\Document\Models\Document> */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    protected static function newFactory(): Factory
    {
        return DocumentFactory::new();
    }
}
