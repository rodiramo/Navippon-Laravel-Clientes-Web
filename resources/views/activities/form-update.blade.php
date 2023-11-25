<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Models\Activity $activity */
?>

@extends('layouts.main')

@section('title', 'Edit ' . $activity->title)

@section('main')
    <header class="smaller-header">
        <h1>Edit '{{ $activity->title }}'</h1>
    </header>
    <form class="form-data" action="{{ route('activities.processUpdate', ['id' => $activity->activity_id]) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" class="form-control"
                value="{{ old('title', $activity->title) }}"
                @if ($errors->has('title')) aria-describedby="error-title" @endif>
            @if ($errors->has('title'))
                <div class="text-danger py-2" id="error-title">{{ $errors->first('title') }}</div>
            @endif
        </div>
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" id="release_date" name="release_date" class="form-control"
                value="{{ old('release_date', $activity->release_date) }}"
                @error('release_date') aria-describedby="error-release_date" @enderror>

            @error('release_date')
                <div class="text-danger p-2" id="error-title"><i class='bx bx-error'
                        style='color:#ff0909'></i>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="budget" class="form-label">Budget</label>
            <select id="budget" name="budget" class="form-control"
                @error('budget') aria-describedby="error-budget" @enderror>
                <option value="" disabled selected>Select Budget</option>
                <option value="$" @if (old('budget', $activity->budget) === '$') selected @endif>$</option>
                <option value="$$" @if (old('budget', $activity->budget) === '$$') selected @endif>$$</option>
                <option value="$$$" @if (old('budget', $activity->budget) === '$$$') selected @endif>$$$</option>
            </select>
            @error('budget')
                <div class="text-danger py-2" id="error-budget">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control"
                @error('description') aria-describedby="error-description" @enderror>{{ old('description', $activity->description) }}</textarea>
            @error('description')
                <div class="text-danger py-2" id="error-description">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 d-flex align-items-start flex-column">
            <p>Current Image</p>
            <x-activity-image :activity="$activity" />
        </div>
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="image" class="form-label">Image <span class="small">(optional)</span></label>
            <input type="file" id="image" name="image" class="form-control"
                @error('image') aria-describedby="error-image" @enderror>
            @error('image')
                <div class="text-danger py-2" id="error-image">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="image_description" class="form-label">Image Description<span
                    class="small">(optional)</span></label>
            <input type="text" id="image_description" name="image_description" class="form-control"
                value="{{ old('image_description', $activity->image_description) }}"
                @error('image_description') aria-describedby="error-image_description" @enderror>
            @error('image_description')
                <div class="text-danger py-2" id="error-image_description">{{ $message }}</div>
            @enderror
        </div>
        <fieldset class="mb-3 d-flex align-items-start flex-column">
            <legend class="d-flex align-items-start">categories</legend>

            <div>
                @foreach ($categories as $category)
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="category_id[]" value="{{ $category->category_id }}"
                                @checked(in_array($category->category_id, old('category_id', [])))>
                            {{ $category->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
