<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Models\Activity $activity */
?>

@extends('layouts.main')

@section('Title', 'Edit ' . $activity->name)

@section('main')
    <header class="smaller-header">
        <h1>Edit '{{ $activity->name }}'</h1>
    </header>
    <form class="form-data" action="{{ route('activities.processUpdate', ['id' => $activity->activity_id]) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="name" class="form-label">Name: *</label>
            <input type="text" id="name" name="name" class="form-control"
                value="{{ old('name', $activity->name) }}"
                @if ($errors->has('name')) aria-describedby="error-name" @endif>
            @if ($errors->has('name'))
                <div class="text-danger py-2" id="error-name">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="budget" class="form-label">Budget: </label>
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
            <label for="description" class="form-label">Description: </label>
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
            <label for="image" class="form-label">Image: <span class="small">(optional)</span></label>
            <input type="file" id="image" name="image" class="form-control"
                @error('image') aria-describedby="error-image" @enderror>
            @error('image')
                <div class="text-danger py-2" id="error-image">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="image_description" class="form-label">Image Description: <span
                    class="small">(optional)</span></label>
            <input type="text" id="image_description" name="image_description" class="form-control"
                value="{{ old('image_description', $activity->image_description) }}"
                @error('image_description') aria-describedby="error-image_description" @enderror>
            @error('image_description')
                <div class="text-danger py-2" id="error-image_description">{{ $message }}</div>
            @enderror
        </div>
        <fieldset class="mb-3 d-flex align-items-start flex-column">
            <legend class="d-flex align-items-start">Categories: </legend>

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
