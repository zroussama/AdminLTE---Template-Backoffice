<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{ vite_assets() }}
        @vite(['/resources/js/app.js', '/resources/css/app.css'])

    </head>
    <body class="antialiased">
        <div>
            @php
               $token = generateUniqueToken(32, '<Table-Name>','<Column-Name>');
            @endphp
       
               {{ $token }}
        </div>
    </body>
</html>
