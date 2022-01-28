<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Gym Member App" />
    <meta name="author" content="Ndriçim Lahu" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons -->
    <link rel="android-chrome-icon-192" sizes="192x192" href="/assets/android-chrome-icon-192.png">
    <link rel="android-chrome-icon-512" sizes="512x512" href="/assets/android-chrome-icon-512.png">
    <link rel="apple-touch-icon-180" sizes="180x180" href="/assets/apple-touch-icon-180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
    <link rel="manifest" href="/assets/site.webmanifest">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />

    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="/css/welcome.css" rel="stylesheet" />
</head>

<body id="page-top" class="antialiased">
    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Gym Member App</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                @if (Route::has('login'))
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        @auth
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Log in</a>
                                @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
            @endif
            </ul>
        </div>
        </div>
    </nav>
    <!-- Masthead -->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Welcome to the Gym Member App</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Manage the Gym Members with this web application now!</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Footer -->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; Gym Member App 2022. All rights reserved.</div>
        </div>
    </footer>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="/js/welcome.js"></script>
</body>

</html>
