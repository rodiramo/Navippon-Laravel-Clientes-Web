@extends('layouts.main')

@section('title', 'Latest Restaurants')

@section('main')
    <header>
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

    @foreach ($restaurants as $restaurant)
        <div class="blog-card">
            <div class="cover">
                <x-restaurant-image :restaurant="$restaurant" />
            </div>
            <div class="description">
                <h2>{{ $restaurant->title }}</h2>
                <span>{{ $restaurant->created_at }}</span>
                <div class="line"></div>

                @foreach ($restaurant->categories as $category)
                    <span class="badge">{{ $category->name }}</span>
                @endforeach

                <p>{{ $restaurant->description }}</p>
                <div class="read-more">
                    <a href="{{ route('restaurants.view', ['id' => $restaurant->restaurant_id]) }}" class="button-35">Read
                        More</a>
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
        </div>
    @endforeach
@endsection
