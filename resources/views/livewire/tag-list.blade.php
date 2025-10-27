<div>
    <div class="d-grid ps-3 py-3">
        <a class="{{ !$selectedTag ? 'text-body fw-bold' : 'text-muted' }} py-2 pointer text-decoration-none mb-2">
            All Notes
        </a>
        <h2 class="text-muted fs-6 mb-2">TAGS</h2>
        @foreach ($tags as $tag)
        <a class="text-muted py-2 ms-2 pointer text-decoration-none">{{ $tag['name'] }}</a>
        @endforeach
    </div>
</div>
