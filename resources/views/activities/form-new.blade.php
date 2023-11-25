<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Models\Activity $activity */
?>

@extends('layouts.main')

@section('Title', 'Create a new Activity')

@section('main')
    <header class="smaller-header">
        <h1>New Activity</h1>
    </header>
    <form class="form-data" action="{{ route('activities.processNew') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="name" class="form-label">Name: *</label>
            <input type="text" id="name" name="name" class="form-control"
                @if ($errors->has('name')) aria-describedby="error-name" @endif>
            @if ($errors->has('name'))
                <div class="text-danger py-2" id="error-name">{{ $errors->first('name') }}</div>
            @endif
        </div>
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="budget" class="form-label">Budget: </label>
            <select id="budget" name="budget" class="form-control">
                <option value="" disabled>Select Budget</option>
                <option value="$">$</option>
                <option value="$$">$$</option>
                <option value="$$$">$$$</option>
            </select>
        </div>
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="description" class="form-label">Description: *</label>
            <textarea id="description" name="description" class="form-control"
                @error('description') aria-describedby="error-description" @enderror></textarea>
            @error('description')
                <div class="text-danger py-2" id="error-description">{{ $message }}</div>
            @enderror
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
                            <input type="checkbox" name="category_id[]" value="{{ $category->id }}">
                            {{ $category->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Upload Activity</button>
    </form>
@endsection
