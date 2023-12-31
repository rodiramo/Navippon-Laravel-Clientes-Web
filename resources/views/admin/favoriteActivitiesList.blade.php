@extends('layouts.main')

@section('title', 'User Favorites - ' . $user->name)

@section('main')
    <header class="header-restaurant">
        <h1>User Favorites - {{ $user->name }}</h1>
    </header>

    @if ($favorites && count($favorites) > 0)
        <table>
            <thead>
                <tr>
                    <th>Activity</th>
                    <th>Date Favorited</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($favorites as $favorite)
                    <tr>
                        <td>{{ $favorite->activity->title }}</td>
                        <td>{{ $favorite->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No favorites for this user.</p>
    @endif

@endsection
