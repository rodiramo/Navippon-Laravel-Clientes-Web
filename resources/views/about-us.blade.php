@extends('layouts.main')

@section('title', 'About Us')

@section('main')
    <header class="header-home">
        <h1>About Us</h1>
        <p class="text-white">A bit about Navippon!</p>
    </header>
    <section class="main-content">
        <div class="intro">
            <p>
                Welcome to Navippon, the app that makes exploring Japan an
                unforgettable experience.
            </p>
        </div>
        <div class="features-section">
            <h2>Key Features</h2>
            <div class="feature">
                <h3>Personalized Itineraries</h3>
                <p>Plan your trip based on your interests and preferences.</p>
            </div>
            <div class="feature">
                <h3>Discover Attractions</h3>
                <p>
                    Explore a wide range of activities, restaurants, and landmarks.
                </p>
            </div>
            <div class="feature">
                <h3>Local Insights</h3>
                <p>
                    Get insider tips and recommendations from experienced travelers.
                </p>
            </div>
            <div class="feature">
                <h3>User-Friendly Interface</h3>
                <p>Our app is designed to make trip planning easy and enjoyable.</p>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="cta-content">
            <h2>Start Your Japanese Adventure with Navippon!</h2>
            <p>
                Download Navippon today and create unforgettable memories in the
                Land of the Rising Sun.
            </p>
        </div>
    </section>

@endsection
