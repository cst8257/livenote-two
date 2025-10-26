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
                <h2 class="py-3">Note</h2>
                <div class="row g-2 align-items-center mb-2">
                    <div class="col">
                        <input class="form-control" placeholder="Title" value="{{ $title }}" />
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-success">Save</button>
                        <button class="btn btn-outline-danger">Delete</button>
                    </div>
                </div>

                <div class="mb-3">
                    <textarea rows="10" class="form-control" placeholder="Write your note...">{{ $content }}</textarea>
                </div>
            </div>
        </section>
    </main>
</body>
</html>