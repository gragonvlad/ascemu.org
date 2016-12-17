<html>
<head>
    <title>{{ config('app.name', 'AscEmu') }}</title>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}" />
</head>
<body>
    <div id="root">
        <section class="hero is-info">
            <div class="hero-head">
                <div class="container">
                    <nav class="nav">
                        <div class="nav-left">
                            <a class="nav-item is-brand" href="{{ url('/') }}">
                                <img src="{{ elixir('images/logo.png') }}" alt="AscEmu logo" />
                            </a>
                        </div>
                        
                        <div class="nav-center">
                            <a class="nav-item is-tab is-active" href="{{ url('/') }}">
                                Home
                            </a>
                            <a class="nav-item is-tab" href="{{ url('/forums') }}">
                                Forums
                            </a>
                            <a class="nav-item is-tab" href="{{ url('/files') }}">
                                Files
                            </a>
                        </div>

                        <!--
                        <span class="nav-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        -->

                        <div class="nav-right nav-menu">
                            <span class="nav-item">
                                <a class="button" href="https://github.com/AscEmu">
                                    <span class="icon">
                                        <i class="fa fa-github"></i>
                                    </span>
                                    <span>AscEmu GitHub</span>
                                </a>
                            </span>
                            <span class="nav-item">
                                <a class="button is-primary" href="#">
                                    <span class="icon">
                                        <i class="fa fa-download"></i>
                                    </span>
                                    <span>Download AscEmu</span>
                                </a>
                            </span>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="hero-body">
                <div class="container">
                    <div class="columns is-vcentered">
                        <div class="column">
                            <p class="title">
                                Welcome to AscEmu
                            </p>
                            <p class="subtitle">
                                An open-source MMORPG game server.
                            </p>
                        </div>
                </div>
            </div>
        </section>

        <div class="container">
            @yield('content')
        </div>
    </div>
    
    <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
</body>
</html>