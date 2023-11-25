@extends('layouts.main')

@section('title', 'Confirm your Age')

@section('main')
    <h1>Please confirm your Age</h1>

    <p>The game you are trying to look requires you to be over 18.</p>
    <p>To continue to the game, please confirm your age.</p>

    <form action="{{ route('age-confirmation.processConfirmation', ['id' => $id]) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">Yes, I am over 18.</button>
        <a href="{{ route('games.index') }}" class="btn btn-danger">No, I am a minor 😔.</a>
    </form>
@endsection
