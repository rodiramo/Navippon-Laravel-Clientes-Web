<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\City
 *
 * @property int $city_id
 * @property string $name
 * @property string $abbreviation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $picture
 * @property string|null $picture_description
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereAbbreviation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City wherePictureDescription($value)
 * @mixin \Eloquent
 */
class City extends Model
{
    use HasFactory;

    protected $primaryKey = 'city_id';

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class, 'city_id', 'city_id');
    }

    public function activities()
    {
        return $this->hasMany(Activity::class, 'city_id', 'city_id');
    }
}
