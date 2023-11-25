<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Activity
 *
 * @property int $activity_id
 * @property string $title
 * @property string $direction
 * @property string $image
 * @property string $image_description
 * @property string $description
 * @property int $city_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereActivityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereBudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCoverDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDirection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereImageDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Activity extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'activities';

    protected $primaryKey = 'activity_id';

    protected $fillable = [
        'name',
        'budget_id',
        'direction',
        'image',
        'image_description',
        'description',
        'city_id',
    ];

    public static function validationRules(): array
    {
        return [
            'name' => 'required',
            'direction' => 'required',
            'description' => 'required',
            'city_id' => 'required|exists:cities,city_id',
        ];
    }
    public static function validationMessages(): array
    {
        return [
            'name.required' => 'Please provide a name for this activity.',
            'description.required' => 'Please provide a description for this game.',
        ];
    }


    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }

    public function budget(): BelongsTo
    {
        return $this->belongsTo(Budget::class, 'budget_id', 'budget_id');
    }


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            Category::class,
            'activities_has_categories',
            'activity_id',
            'category_id'
        );
    }
}
