@extends('layouts.main')

@section('main')
    <header class="header-restaurant">
        <h1>User List</h1>
    </header>

    <table class="table container">
        <thead>
            <tr>
                <th>Role ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->role_id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ route('admin.viewUserFavoritesActivities', ['userId' => $user->user_id]) }}"
                            class="btn btn-primary">View Favourites</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
