@extends('layouts.main')

@section('name', $category->name)

@section('main')
    <h1>{{ $category->name }}</h1>

    <h2>Restaurants</h2>
    @if ($restaurants)
        <article>
            @foreach ($restaurants as $restaurant)
                <div>
                    <h3>{{ $restaurant->name }}</h3>
                    <p>{{ $restaurant->description }}</p>
                </div>
            @endforeach
        @else
            <p>No restaurants available for this category.</p>
        </article>
    @endif

    <h2>Activities</h2>
    @if ($activities)
        <article>
            @foreach ($activities as $activity)
                <div>
                    <img class="city-image" src="{{ Storage::url('imgs/' . $activity->image) }}"
                        alt="{{ $activity->image }}'s Landscape">{{ $activity->name }}

                    <h3>{{ $activity->name }}</h3>
                    <p>{{ $activity->description }}</p>
                </div>
            @endforeach
        @else
            <p>No Activities available for this category.</p>
        </article>
    @endif
@endsection
