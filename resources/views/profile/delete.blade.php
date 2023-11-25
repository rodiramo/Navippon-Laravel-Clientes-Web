<?php
/** @var \App\Models\GameReservation $reservation */
?>

@extends('layouts.main')

@section('title', 'Confirm Delete ' . $reservation->game->title)

@section('main')
    <header class="smaller-header">
        <h1 class="mb-3">Delete from Favorites '{{ $reservation->game->title }}'?</h1>
    </header>
    <form class="form-data" action="{{ route('reservations.processDelete', ['reservationId' => $reservation->id]) }}"
        method="post">
        @csrf
        @method('delete')
        <h2 class="visually-hidden">Confirm</h2>
        <p>Are you sure you want to delete this game from your favorites?</p>
        <button type="submit" class="btn btn-danger">Yes, I want to delete this game.</button>
    </form>
@endsection
