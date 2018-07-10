<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:description" content="BITE AND SLURP YOUR WAY TO A FREE CONCERT">
    <meta property="og:site_name" content="711 Build Your Own Concert">
    <meta property="og:image" content="/images/og_prev.jpg">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="/materialize/css/materialize.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/fonts.css" rel="stylesheet">



     
   
</head>
<body>
<!-- Modal Structure -->
<div id="learnmore" class="modal modal-fixed-footer">
    <div class="modal-footer">
        <a class="modal-close left"><i class="small material-icons">close</i></a>
    </div>
        <div class="modal-content">
            <h5>RULES</h5>
            <p class="text-darken">
                @include('nomination.mechanics')
            </p>
        </div>
</div>
<div id="tnc" class="modal modal-fixed-footer">
    <div class="modal-footer">
        <a class="modal-close left"><i class="small material-icons">close</i></a>
    </div>
        <div class="modal-content">
                @include('nomination.tnc')
        </div>
</div>
    <div id="app">
        <main class="main">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('materialize/js/materialize.min.js')}}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    
</body>
</html>
