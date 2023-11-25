<?php
//
/** @var \App\Models\News[]|\Illuminate\Database\Eloquent\Collection $news */
/** @var \App\Models\Game[]|\Illuminate\Database\Eloquent\Collection $games */
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
            <a href="{{ route('restaurants.index') }}">Restaurants</a>
            <a href="{{ route('activities.index') }}">Activities</a>
        </div>
    </header>

    <section class="home-news">
        <h2>Most Popular Restaurant</h2>
        <div class="line"></div>
        <h3>"{{ $restaurant->title }}"</h3>
        <p>{{ $restaurant->date }}</p>
        <p>{{ $restaurant->description }}</p>
    </section>

    <section class="home-game">
        <h2>Most Popular Activity "{{ $activity->title }}"</h2>
        <img src="{{ Storage::url('imgs/' . $activity->image) }}" alt="{{ $activity->image_description }}">
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
