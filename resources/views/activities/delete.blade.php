<?php
/** @var \App\Models\Activity $activity */
?>

@extends('layouts.main')

@section('title', 'Confirm delete ' . $activity->title)

@section('main')
    <header class="smaller-header">
        <h1 class="mb-3">Delete the activity '{{ $activity->title }}'?</h1>
    </header>

    <form class="form-data" action="{{ route('activities.processDelete', ['id' => $activity->activity_id]) }}" method="post">
        @csrf
        <h2 class="visually-hidden">Confirm</h2>
        <p>Are you sure you want to delete this activity?</p>
        <button type="submit" class="btn btn-danger">Yes, I want to delete this activity.</button>
    </form>

    <x-activity-data :activity="$activity" />
@endsection
