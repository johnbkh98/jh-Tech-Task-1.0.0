<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Full Stack Tech Test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <book-listing :books="{{ $data }}"></book-listing>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
