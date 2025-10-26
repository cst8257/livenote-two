<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Livenote Two' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <style>
        .vh-100 { height: calc(100vh - 150px) !important; }
        .pointer { cursor: pointer; }
    </style>
</head>
<body>
    <main class="container-fluid">
        {{  $slot }}
    </main>
</body>
</html>