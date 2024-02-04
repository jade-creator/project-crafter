<?php

namespace Domain\Client\Models;

use Database\Factories\ClientFactory;
use Domain\Document\Models\Document;
use Domain\Project\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Domain\Client\Models\Client
 *
 * @property string|null $email
 * @property string $name
 * @property string|null $phone
 * @property string|null $country
 * @property string|null $street
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zip
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Domain\Document\Models\Document>|null $documents
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Domain\Project\Models\Project>|null $projects
 */
class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    /** @var array<int, string> */
    protected $fillable = [
        'email',
        'name',
        'phone',
        'country',
        'street',
        'city',
        'state',
        'zip',
    ];

    /** @return \Illuminate\Database\Eloquent\Relations\HasMany<\Domain\Document\Models\Document> */
    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    /** @return \Illuminate\Database\Eloquent\Relations\HasMany<\Domain\Project\Models\Project> */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    protected static function newFactory(): Factory
    {
        return ClientFactory::new();
    }
}
