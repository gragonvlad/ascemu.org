<html>
<head>
    <title>{{ config('app.name', 'AscEmu') }}</title>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}" />
</head>
<body>
    <div id="root">
        <h1>Welcome to AscEmu</h1>
        <p>This is a temporary page, and the time now is {{ date("h:i:sa") }}</p>
    </div>
    
    <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
</body>
</html>