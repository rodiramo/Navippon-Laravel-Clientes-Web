<?php

namespace App\Http\Controllers;

use App\Models\City;

class CityController extends Controller
{
    public function show($id)
    {
        $city = City::findOrFail($id);

        $restaurants = $city->restaurants;
        $activities = $city->activities;

        return view('cities.show', compact('city', 'restaurants', 'activities'));
    }
}
