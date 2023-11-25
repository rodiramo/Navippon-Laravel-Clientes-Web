<?php

?>

@extends('layouts.main')

@section('title', 'My Profile')

@section('main')
    <div class="card-header">Edit Profile</div>

    <form class="form-data" action="{{ route('profile.update', ['id' => $user->user_id]) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}"
                @if ($errors->has('name')) aria-describedby="error-name" @endif>
            @if ($errors->has('name'))
                <div class="text-danger py-2" id="error-title">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}"
                    required>
            </div>
        </div>

        <div class="form-group row">
            <label for="avatar" class="col-md-4 col-form-label text-md-right">Profile Pic:</label>

            <div class="col-md-6">
                <input id="avatar" type="file" class="form-control" name="avatar">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </div>
        </div>
    </form>

@endsection
