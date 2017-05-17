<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'EVoting') }}</title>
        <!-- Styles -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <!-- Scripts -->
        <script>
        window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
        ]); ?>
        </script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        @yield('imports')
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 visible-xs">
                            <div class="navbar-header">
                                <!-- Collapsed Hamburger --><!--
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <!-- Branding Image -->
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    {{ config('app.name', 'Laravel') }}
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 hidden-xs navbar-header ">
                            <!-- Branding Image -->
                            
                            @if (Auth::check())
                            <img src="/images/demo.png  }}" class="organization_logo" onerror="">
                            @endif
                        </div>
                        <div class="col-sm-6 hidden-xs">
                            <a class="navbar-brand" href="{{ url('/') }}" >
                                <span style="font-size:1.2em;">Evoting </span>&nbsp;
                            </a>
                        </div>
                        <div class="col-sm-3 hidden-xs">
                            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                                <!-- Left Side Of Navbar -->
                                <ul class="nav navbar-nav">
                                    &nbsp;
                                </ul>
                                <!-- Right Side Of Navbar -->
                                <ul class="nav navbar-nav navbar-right">
                                    <!-- Authentication Links -->
                                    @if (Auth::check())
                                    <li class="dropdown">
                                        <a href="#">
                                            SUPPORT
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="/logout">
                                            LOGOUT
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div id="app-container" class="container">
                <div class="row">
                    <div class="col-xs-3 hidden-xs inner-left-container">@include('layouts.sidebar')</div>
                    <div class="col-xs-12 col-sm-9 inner-right-container">@yield('content')</div>
                </div>
            </div>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
        
    </body>
    
</html>

