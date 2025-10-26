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
        <nav class="navbar navbar-expand py-3 mb-3 border-bottom row">
            <div class="col d-flex justify-content-start">
                <a href="/" class="navbar-brand me-5">Livenote Two</div>
                <form role="search" class="me-auto">
                    <input 
                        class="form-control me-2" 
                        type="search" 
                        name="search" 
                        placeholder="Search" 
                        aria-label="Search">
                </form>
            </div>
        </nav>
        <section class="row py-5">
            <div class="col">
                <h2 class="py-3">Notes</h2>
                <div class="d-grid gap-3 flex-wrap pb-5" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
                    <a href="#" class="bg-light text-body text-decoration-none rounded p-4 pointer">
                        <h3 class="fs-5">My First Note</h3>
                        <p class="text-muted">{{ Str::limit('This is the very first note that I created.', 25) }}</p>
                    </a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>