@extends('layouts.main')

@section('name', $city->name)

@section('main')
    <header class="header-cities">
        <h1>{{ $city->name }}</h1>
    </header>
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
            <p>No restaurants available for this city.</p>
        </article>
    @endif

    <h2>Activities</h2>

    @if ($activities)
        <div class="container">
            <div class="grid">
                <article>
                    @foreach ($activities as $activity)
                        <div class="padding">
                            <img src="{{ Storage::url('imgs/' . $activity->image) }}"
                                alt="{{ $activity->image }}'s Landscape">
                            <h3>{{ $activity->name }}</h3>
                            <p>{{ $activity->description }}</p>
                        </div>
                    @endforeach
                @else
                    <p>No Activities available for this city.</p>
                </article>
            </div>
        </div>
    @endif
@endsection
