<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';

    protected $primaryKey = 'restaurant_id';

    protected $fillable = ['name', 'image', 'budget_id', 'image_description', 'description'];

    public static function validationRules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required',
        ];
    }

    public static function validationMessages(): array
    {
        return [
            'name.required' => 'Please provide a name for this restaurant.',
            'description.required' => 'Please provide a description for this restaurant.',
        ];
    }

    public function getCategoryIds(): array
    {
        return $this->categories->pluck('category_id')->all();
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            Category::class,
            'restaurant_has_categories',
            'restaurant_id',
            'category_id'
        );
    }
}
