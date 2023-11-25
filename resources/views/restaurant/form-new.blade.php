<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
?>

@extends('layouts.main')

@section('Title', 'Upload New Restaurant')

@section('main')
    <header class="smaller-header">
        <h1>Upload a New Restaurant</h1>
        <p>Please fill all data required(*)</p>
    </header>

    <form class="form-data" action="{{ route('restaurants.processNew') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="name" class="form-label">Name:*</label>
            <input type="text" id="name" name="name" class="form-control"
                @if ($errors->has('name')) aria-describedby="error-name" @endif>
            @if ($errors->has('name'))
                <div class="text-danger p-2" id="error-name"><i class='bx bx-error'
                        style='color:#ff0909'></i>{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="description" class="form-label">Description:*</label>
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
            <legend class="d-flex align-items-start">Categories: <span class="small">(optional)</span></legend>

            <div>
                @foreach ($categories as $category)
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="category_id[]" value="{{ $category->category_id }}">
                            {{ $category->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </fieldset>
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="budget" class="form-label">Budget: <span class="small">(optional)</span></label>
            <select id="budget" name="budget" class="form-control">
                <option value="" disabled selected>Select Budget</option>
                <option value="$">Low ($)</option>
                <option value="$$">Medium ($$)</option>
                <option value="$$$">High ($$$)</option>
            </select>
        </div>
        <button type="submit" class="button-35">Upload</button>
    </form>
@endsection
