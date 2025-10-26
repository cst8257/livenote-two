<a href="/note/{{ $note['id'] }}" class="bg-light text-body text-decoration-none rounded p-4 pointer">
    <h3 class="fs-5">{{ $note['title'] }}</h3>
    <p class="text-muted">{{ Str::limit($note['content'], 25) }}</p>
</a>