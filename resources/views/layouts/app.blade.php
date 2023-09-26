<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Projects
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/projects/shopease-pro">
                                    ShopEase Pro
                                </a>
                                <a class="dropdown-item" href="/projects/healthtrack-plus">
                                    HealthTrack Plus
                                </a>
                                <a class="dropdown-item" href="/projects/bizconnect-crm">
                                    BizConnect CRM
                                </a>
                                <a class="dropdown-item" href="/projects/wealthguard-pro">
                                    WealthGuard Pro
                                </a>
                                <a class="dropdown-item" href="/projects/edupro-learnhub">
                                    EduPro LearnHub
                                </a>
                                <a class="dropdown-item" href="/projects/stockmasters">
                                    StockMasters
                                </a>
                                <a class="dropdown-item" href="/projects/travelwise-express">
                                    TravelWise Express
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/over-ons">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @if(Session::has('message'))
        <div class="container mt-5">
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        </div>
        @endisset

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
