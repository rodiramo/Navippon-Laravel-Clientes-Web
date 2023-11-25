<?php
/** @var \App\Models\Activity $activity */
?>

@extends('layouts.main')

@section('title', 'About ' . $activity->title)

@section('main')
    <header class="smaller-header">
        <h1>{{ $activity->title }}</h1>
    </header>
    <x-activity-data :activity="$activity" />

@endsection
