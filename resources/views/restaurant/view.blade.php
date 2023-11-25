<?php
/** @var \App\Models\Restaurant $restaurant
 *
 */
?>
@extends('layouts.main')


@section('title', 'About ' . $restaurant->name)

@section('main')

    <header class="smaller-header">
        <h1>{{ $restaurant->name }}</h1>
    </header>
    <x-restaurant-data :restaurant="$restaurant" />

@endsection
