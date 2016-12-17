<html>
<head>
    <title>{{ config('app.name', 'AscEmu') }}</title>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}" />
</head>
<body>
    <div id="root">
        @yield('content')
    </div>
    
    <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
</body>
</html>