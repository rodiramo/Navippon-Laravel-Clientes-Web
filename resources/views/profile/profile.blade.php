<?php

?>

@extends('layouts.main')

@section('title', 'My Profile')

@section('main')
    <header>

        <x-user-avatar :user="$user" />
        <h1>{{ $user->name }}'s Profile</h1>
        <p>Email: {{ $user->email }}</p>

        <a href="{{ route('profile.edit', ['id' => $user->user_id]) }}" class="btn btn-primary">Edit Profile</a>

    </header>


    @if ($favorites && count($favorites) > 0)
        @foreach ($favorites as $favorite)
            <div>
                <div class="card">
                    <img class="mw-100" src="{{ Storage::url('imgs/' . $favorite->activity->image) }}"
                        alt="{{ $favorite->activity->image_description }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $favorite->activity->title }}</h5>
                        <p class="card-text">{{ $favorite->activity->description }}</p>
                        <a href="{{ route('favorites.confirmDelete', ['favoriteId' => $favorite->id]) }}"
                            class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No favorites found.</p>
    @endif
@endsection
