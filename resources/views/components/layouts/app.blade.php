<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Livenote Two' }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
        <style>
            .vh-100 { height: calc(100vh - 150px) !important; }
            .pointer { cursor: pointer; }
        </style>
    </head>
    <body class="overflow-hidden h-100">
        {{ $slot }}
    </body>
</html>
