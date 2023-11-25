@extends('layouts.main')

@section('title', 'List of Activities')

@section('main')
    <header class="header-activity">
        <h1>Activities</h1>
        @auth
            @if (auth()->user()->role_id == 1)
                <div class="container-center"><a class="button" href="{{ route('activities.formNew') }}">Upload a New
                        Activity</a>
                </div>
            @else
                <p>Check Out all Our Activities we have to Offer!</p>
            @endif
        @endauth
    </header>
    <div class="container">
        <div class="grid">
            @foreach ($activities as $activity)
                <article>
                    <div class="image">
                        <x-activity-image :activity="$activity" />
                    </div>
                    @foreach ($activity->categories as $category)
                        <img class="icon" src="{{ Storage::url('imgs/' . $category->icon) }}"
                            alt="{{ $category->name }}'s Icon ">
                    @endforeach

                    <div class="text">
                        <h2>{{ $activity->name }}</h2>
                        @foreach ($activity->categories as $category)
                            <span class="badge">{{ $category->name }}</span>
                        @endforeach
                        <p>{{ $activity->budget->value }}</p>
                        <p>{{ $activity->description }}</p>
                        <div class="read-more">
                            <a href="{{ route('activities.view', ['id' => $activity->activity_id]) }}" class="button">
                                Read More
                            </a>
                        </div>
                        @auth
                            <form action="{{ route('activities.activitiesFavorite', ['id' => $activity->activity_id]) }}"
                                method="post">
                                @csrf
                                <button type="submit" class="button-reserve"><i
                                        class='bx bx-bookmark-heart'></i>Favorite</button>
                            </form>
                            @if (auth()->user()->role_id == 1)
                                <div class="actions">
                                    <a href="{{ route('activities.formUpdate', ['id' => $activity->activity_id]) }}"
                                        class="btn btn-secondary">Edit</a>
                                    <a href="{{ route('activities.confirmDelete', ['id' => $activity->activity_id]) }}"
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
