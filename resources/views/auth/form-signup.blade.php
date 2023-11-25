@extends('layouts.main')

@section('title', 'Sign Up')

@section('main')
    <header class="smaller-header">
        <h1>Register</h1>
    </header>
    <form class="form-signup" action="{{ route('auth.processSignup') }}" method="post">
        @csrf
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="name" class="form-label">Name* </label>
            <input type="text" name="name" id="name" class="form-control">

        </div>
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="email" class="form-label">Email*</label>
            <input type="email" name="email" id="email" class="form-control">

        </div>
        <div class="mb-3 d-flex align-items-start flex-column">
            <label for="password" class="form-label">Password*</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="submit" class="button-login w-100">Register</button>
    </form>
@endsection
