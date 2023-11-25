@extends('layouts.main')

@section('title', 'Sign Up')

@section('main')
    <div class="d-flex align-items-center">
        <div class="img-auth"></div>
        <form class="form-login" action="{{ route('auth.processSignup') }}" method="post">
            <header class="smaller-header">
                <h1>Sign Up</h1>
            </header>
            @csrf
            <div class="mb-3 d-flex align-items-start flex-column">
                <label for="name" class="form-label">Name* </label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="mb-3 d-flex align-items-start flex-column">
                <label for="email" class="form-label">Email:* </label>
                <input type="email" name="email" id="email" class="form-control">

            </div>
            <div class="mb-3 d-flex align-items-start flex-column">
                <label for="password" class="form-label">Password: *</label>
                <input type="password" name="password" id="password" class="form-control">

            </div>
            <button type="submit" class="button">Sign Up</button>
            <p>Already have an account? Log In <a href="/signup" class="link-register">Here</a>.</p>
        </form>
    </div>
@endsection
