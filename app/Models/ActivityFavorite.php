<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityFavorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'activity_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id', 'activity_id');
    }

    /**
     * Create a new model instance that is existing.
     *
     * @param  array  $attributes
     * @param  bool  $exists
     * @return static
     */
    public static function create(array $attributes = [], $exists = false)
    {
        if (isset($attributes['activity_id']) && $attributes['activity_id'] !== null) {
            return parent::query()->create($attributes);
        }
    }
}
