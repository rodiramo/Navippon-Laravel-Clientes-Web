<?php
/** @var \App\Models\Restaurant $restaurant */
?>

@extends('layouts.main')

@section('title', 'Confirm Delete ' . $restaurant->title)

@section('main')
    <header class="smaller-header">
        <h1 class="mb-3">Delete Restaurant '{{ $restaurant->title }}'?</h1>
    </header>
    <form class="form-data" action="{{ route('restaurants.processDelete', ['id' => $restaurant->restaurant_id]) }}"
        method="post">

        @csrf
        <h2 class="visually-hidden">Confirm</h2>
        <p>Are you sure you want to delete this Restaurant?</p>
        <button type="submit" class="btn btn-danger">Yes, I want to delete this Restaurant.</button>
    </form>
    <x-restaurant-data :restaurant="$restaurant" />

@endsection
