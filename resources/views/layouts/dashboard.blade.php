<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Autumn Eng') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="container-fluid ">
            @include ('_includes.nav.main')
            
            <div class="row mt-5 pt-5">

                    @include ('_includes.nav.dashboard')

                <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <main class="container-fluid">
                        @yield('content')
                    </main>

                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
