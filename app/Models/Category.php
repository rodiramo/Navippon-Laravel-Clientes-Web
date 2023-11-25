<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'restaurant_has_categories', 'category_id', 'restaurant_id');
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'activities_has_categories', 'category_id', 'activity_id');
    }
}
