<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Navippon</title>
    <!--icon-->
    <link rel="icon" href="{{ URL::to('favicon.ico') }}">
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Vibur:400" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::to('font/stylesheet.css') }}" type="text/css">
    <!--css-->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <!--boxicons-->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!--bootstrap-->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">Navippon</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">

                        <a class="nav-link" href="{{ url('/') }}">Home</a>

                        <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>

                        <a class="nav-link" href="{{ url('/restaurants') }}">Restaurants</a>

                        <a class="nav-link" href="{{ url('/activities') }}">Activities</a>
                        @auth
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    {{ auth()->user()->name }}</a>
                                <div class="dropdown-menu">
                                    @if (auth()->user()->role_id == 1)
                                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                                    @else
                                        <a class="nav-link" href="{{ route('profile') }}">My Profile</a>
                                    @endif
                                    <hr class="dropdown-divider">

                                    <form action="{{ route('auth.logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn nav-link">{{ auth()->user()->email }}
                                            (Log Out)
                                        </button>
                                    </form>
                                @else
                                    <a class="nav-link" href="{{ route('login') }}">Log In</a>

                                    <a class="nav-link" href="{{ route('signup') }}">Sign Up</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            @if (Session::has('message.error'))
                <div class="wrapper wrapper-error">
                    <div class="message">
                        <div class="icon"><i class='bx bx-error' style='color:#ff0909'></i></div>
                        <div class="subject">
                            {!! Session::get('message.error') !!}
                        </div>

                    </div>
                </div>
            @endif
            @if (Session::has('message.success'))
                <div class="wrapper wrapper-success">
                    <div class="message">
                        <div class="icon"><i class='bx bxs-check-circle'></i></div>
                        <div class="subject">
                            {!! Session::get('message.success') !!}
                        </div>

                    </div>
                </div>
            @endif


            @yield('main')
        </main>
        <footer class="footer">
            <p>Rocio Diaz Ramos &copy; 2023</p>
        </footer>
    </div>
    <script src="{{ url('js/bootstrap.bundle.js') }}"></script>
</body>

</html>
