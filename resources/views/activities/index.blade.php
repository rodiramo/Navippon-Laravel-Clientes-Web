@extends('layouts.main')

@section('title', 'List of Activities')

@section('main')
    <header>
        <h1>Activities</h1>
        @auth
            @if (auth()->user()->role_id == 1)
                <div class="container-center"><a href="{{ route('activities.formNew') }}">Upload a New Activity</a></div>
            @else
                <p>Check Out all Our Activities we have to Offer!</p>
            @endif
        @endauth
    </header>

    <article class="cards">
        @foreach ($activities as $activity)
            <div class="card">
                <div class="card_img card1"><x-activity-image :activity="$activity" /></div>
                <h3>{{ $activity->title }}</h3>
                <p>{{ $activity->date }}</p>
                <p>{{ $activity->description }}</p>
                <div class="line"></div>
                @foreach ($activity->categories as $category)
                    <span class="badge">{{ $category->name }}</span>
                @endforeach
                <a href="{{ route('activities.view', ['id' => $activity->activity_id]) }}" class="button-35">View More</a>

                @auth
                    <form action="{{ route('activities.processFavorite', ['id' => $activity->activity_id]) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary mb-2">Reserve</button>
                    </form>
                    @if (auth()->user()->role_id == 1)
                        <div class="d-flex justify-content-between gap-1">
                            <a href="{{ route('activities.formUpdate', ['id' => $activity->activity_id]) }}"
                                class="btn btn-secondary">Edit</a>
                            <a href="{{ route('activities.confirmDelete', ['id' => $activity->activity_id]) }}"
                                class="btn btn-danger">Delete</a>
                        </div>
                    @endif
                @else
                @endauth
            </div>
        @endforeach
    </article>
@endsection
