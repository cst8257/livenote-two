<section class="row py-3">
    <div class="col">           
        <h2 class="py-3">Notes</h2>

        <div class="d-grid gap-3 vh-100 overflow-auto pb-5" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
            @foreach ($notes as $note)
            <a wire:click="selectNote({{ $note['id'] }})" class="{{ isset($selectedNote['id']) && $selectedNote['id'] === $note['id'] ? 'bg-warning' : 'bg-light' }} text-body text-decoration-none rounded p-4 pointer">
                <h3 class="fs-5">{{ $note['title'] }}</h3>
                <p class="text-muted">{{ Str::limit($note['content'], 25) }}</p>
            </a>
            @endforeach
        </div>
        
    </div>
</section>
