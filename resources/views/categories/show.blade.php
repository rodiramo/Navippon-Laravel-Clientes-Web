@extends('layouts.main')

@section('title', $category->name)

@section('main')
    <h1>{{ $category->name }}</h1>

    <h2>Restaurants</h2>
    @if ($restaurants)
        @foreach ($restaurants as $restaurant)
            <div>
                <h3>{{ $restaurant->title }}</h3>
                <p>{{ $restaurant->description }}</p>
            </div>
        @endforeach
    @else
        <p>No restaurants available for this category.</p>
    @endif

    <h2>Activities</h2>
    @if ($activities)
        @foreach ($activities as $activity)
            <div>
                <h3>{{ $activity->title }}</h3>
                <p>{{ $activity->description }}</p>
            </div>
        @endforeach
    @else
        <p>No Activities available for this category.</p>
    @endif
@endsection
