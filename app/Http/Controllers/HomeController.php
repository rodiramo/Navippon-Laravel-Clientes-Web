<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Activity;
use App\Models\Restaurant;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function home()
    {
        $activity = Activity::latest()->first();
        $restaurant = Restaurant::latest()->first();
        $cities = City::all();
        return view('home', ['activity' => $activity, 'restaurant' => $restaurant, 'cities' => $cities]);
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
}
