<?php
//
/** @var \App\Models\News[]|\Illuminate\Database\Eloquent\Collection $news */
/** @var \App\Models\Game[]|\Illuminate\Database\Eloquent\Collection $games */
/** @var \App\Models\Categories[]|\Illuminate\Database\Eloquent\Collection $categories */
/** @var \App\Models\City[]|\Illuminate\Database\Eloquent\Collection $cities */
/** @var \App\Models\City $featuredCity */
?>

@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <header class="header-home">
        <h1>Navippon</h1>
        <p class="text-white">Your app to navigate Japan your way.
            Plant your trips, find new locations and get the trip of
            your dreams!</p>
        <div class="container-center">
            <a class="button" href="{{ route('restaurants.index') }}">Restaurants</a>
            <a class="button" href="{{ route('activities.index') }}">Activities</a>
        </div>
    </header>

    <section class="home-categories">
        <h2>Explore by Categories</h2>
        <ul>
            @foreach ($categories as $category)
                <li><a
                        href="{{ route('category.show', ['categoryId' => $category->category_id]) }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </section>


    <section class="cities">
        <h2>Explore Cities</h2>
        <ul>
            @foreach ($cities as $city)
                <li><a href="{{ route('city.show', ['cityId' => $city->city_id]) }}">{{ $city->name }}</a></li>
            @endforeach
        </ul>
    </section>
@endsection
