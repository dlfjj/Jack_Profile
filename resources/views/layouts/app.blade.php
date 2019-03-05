<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JJ FAN PROFILE</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body id="top">
    <div id="app">
        <header>
            <div class="profile-page sidebar-collapse">
                <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-success" color-on-scroll="400">
                    <div class="container">
                        <div class="navbar-translate"><a class="navbar-brand smooth-scroll" href="#" rel="tooltip">Jacky Fan CV</a>
                            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
                        </div>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <div class="page-content">
            @yield('content')
        </div>
        <footer class="footer">
            <div class="container text-center">
                <a class="cc-facebook btn btn-link" href="https://www.facebook.com/jiajief">
                    <i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a>
                <a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a>
                <a class="cc-wechat btn btn-link" href="#"><i class="fa fa-wechat fa-2x" aria-hidden="true"></i></a>
                <a class="cc-instagram btn btn-link" href="https://www.instagram.com/dlfjj/"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a>
            </div>
            <div class="h4 title text-center">Jiajie Fan</div>
            <div class="text-center text-muted">
                <p>&copy; Pineapple Technology Inc. All rights reserved.</p>
            </div>
        </footer>
    </div>

</body>
</html>
