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
<body class="overflow-hidden h-100">
    <main class="container-fluid">
        {{ $nav }}
        <div class="row vh-100 py-3">
            <div class="col-12 col-md-5 col-lg-4 d-flex flex-column">
                {{ $notes }}
            </div>
            <div class="col-12 col-md-7 col-lg-8 pt-5">
                {{ $note }}
            </div>
        </div>
    </main>
</body>
</html>