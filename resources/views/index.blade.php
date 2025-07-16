<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Full Stack Tech Test</title>
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

        <table id="book_table">
        <tr class="header">
            <th style="width:25%;">Title</th>
            <th style="width:25%;">Author</th>
            <th style="width:25%;">Rating</th>
            <th style="width:25%;">Action</th>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>Berglunds snabbkop</td>
            <td>Sweden</td>
        </tr>
        <tr>
            <td>Island Trading</td>
            <td>UK</td>
        </tr>
        <tr>
            <td>Koniglich Essen</td>
            <td>Germany</td>
        </tr>
        </table>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>