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

    <!-- Styles -->
    <link href="/materialize/css/materialize.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/fonts.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>

</head>
<body>
<!-- Modal Structure -->
<div id="learnmore" class="modal modal-fixed-footer">
    <div class="modal-footer">
        <a class="modal-close left" ><i class="small material-icons">close</i></a>
    </div>
        <div class="modal-content">
            <h5>MECHANICS</h5>
            <p class="text-darken">
                @include('nomination.votingmechanics')
            </p>
        </div>
</div>

<div id="subscribe" class="modal modal-fixed-footer">
    <div class="modal-footer">
        <a class="modal-close left" ><i class="small material-icons">close</i></a>
    </div>
        <div class="modal-content">
            <div class="valign-wrapper" style="height: 100%">
                <div style="width: 100%"> 
                    <img src="/images/mail.png" class="mail-img">
                    <h5>GET UPDATED ON<br/>THE LATEST SCORES</h5>
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate browser-default s12" placeholder="Enter e-mail address" autocomplete="off">
                    </div>
                    <div class="submit input-field col s12 center-align">
                        <a class="btn btn-small default-button subscribe-button">Submit
                            <i class="material-icons left">keyboard_return</i>
                            </a>
                    </div>
                </div>
        </div>
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

    
    <script src="{{ asset('materialize/js/materialize.min.js')}}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('data/dat.json') }}"></script>
    
</body>
</html>