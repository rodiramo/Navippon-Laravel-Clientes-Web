@extends('layouts.main')

@section('title', 'Latest Restaurants')

@section('main')
    <header class="header-restaurant">
        <h1>All Our Restaurants</h1>
        @auth
            @if (auth()->user()->role_id == 1)
                <div class="container-center">
                    <a href="{{ route('restaurants.formNew') }}">Upload a New Restaurant</a>
                </div>
            @else
                <p>Catch up with our Latest Restaurants!</p>
            @endif
        @endauth
    </header>
    <div class="container">
        <div class="grid">
            @foreach ($restaurants as $restaurant)
                <article>
                    <div class="image">
                        <x-restaurant-image :restaurant="$restaurant" />
                    </div>
                    @foreach ($restaurant->categories as $category)
                        <img class="icon" src="{{ Storage::url('imgs/' . $category->icon) }}"
                            alt="{{ $category->name }}'s Icon ">
                    @endforeach

                    <div class="text">
                        <h2>{{ $restaurant->name }}</h2>
                        @foreach ($restaurant->categories as $category)
                            <span class="badge">{{ $category->name }}</span>
                        @endforeach
                        <p>{{ $restaurant->budget->value }}</p>
                        <p>{{ $restaurant->description }}</p>
                        <div class="read-more">
                            <a href="{{ route('restaurants.view', ['id' => $restaurant->restaurant_id]) }}" class="button">
                                Read More
                            </a>
                        </div>
                        @auth
                            @if (auth()->user()->role_id == 1)
                                <div class="actions">
                                    <a href="{{ route('restaurants.formUpdate', ['id' => $restaurant->restaurant_id]) }}"
                                        class="btn btn-secondary">Edit</a>
                                    <a href="{{ route('restaurants.confirmDelete', ['id' => $restaurant->restaurant_id]) }}"
                                        class="btn btn-danger">Delete</a>
                                </div>
                            @endif
                        @endauth
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@endsection
