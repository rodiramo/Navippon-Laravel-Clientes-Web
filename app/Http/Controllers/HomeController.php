<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Activity;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function home()
    {
        $activity = Activity::latest()->first();
        $restaurant = Restaurant::latest()->first();
        $cities = City::all();
        $categories = Category::all();
        return view('home', ['activity' => $activity, 'restaurant' => $restaurant, 'cities' => $cities, 'categories' => $categories]);
    }

    public function about()
    {
        return view('about');
    }

    public function adminHome()
    {
        return view('dashboard');
    }

    public function show($cityId)
    {
        $city = City::findOrFail($cityId);

        $activities = Activity::where('city_id', $city->city_id)->get();
        $restaurants = Restaurant::where('city_id', $city->city_id)->get();

        return view('city.show', ['city' => $city, 'activities' => $activities, 'restaurants' => $restaurants]);
    }

    public function showCategory($categoryId)
    {
        $category = Category::findOrFail($categoryId);

        $activities = Activity::join('activities_has_categories', 'activities.id', '=', 'activities_has_categories.activity_id')
            ->where('activities_has_categories.category_id', $category->category_id)
            ->get();

        $restaurants = Restaurant::join('restaurants_has_categories', 'restaurants.id', '=', 'restaurants_has_categories.restaurant_id')
            ->where('restaurants_has_categories.category_id', $category->category_id)
            ->get();

        return view('category.show', ['category' => $category, 'activities' => $activities, 'restaurants' => $restaurants]);
    }
}
