<x-layout>
    <x-slot name="nav">
        <x-navbar />
    </x-slot>
    <x-slot:notes>
        <section class="row py-3">
            <div class="col">           
                <h2 class="py-3">Notes</h2>

                <div class="d-grid gap-3 vh-100 overflow-auto pb-5" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
                    @foreach ($notes as $note)
                    <a href="/note/{{ $note['id'] }}" class="{{ isset($selectedNote['id']) && $selectedNote['id'] === $note['id'] ? 'bg-warning' : 'bg-light' }} text-body text-decoration-none rounded p-4 pointer">
                        <h3 class="fs-5">{{ $note['title'] }}</h3>
                        <p class="text-muted">{{ Str::limit($note['content'], 25) }}</p>
                    </a>
                    @endforeach
                </div>
                
            </div>
        </section>
    </x-slot>
    <x-slot:note>
        @if (isset($selectedNote['id']))
        <section class="row py-3">
            <div class="col">
                <div class="row g-2 align-items-center mb-2">
                    <div class="col">
                        <input class="form-control" placeholder="Title" value="{{ $selectedNote['title'] }}" />
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-success">Save</button>
                        <button class="btn btn-outline-danger">Delete</button>
                    </div>
                </div>

                <div class="mb-3">
                    <textarea rows="10" class="form-control" placeholder="Write your note...">{{ $selectedNote['content'] }}</textarea>
                </div>
            </div>
        </section>
        @else
        <div class="text-muted">Select or create a note to view details.</div>
        <div class="mt-3">
            <button class="btn btn-primary">Create New Note</button>
        </div>
        @endif
    </x-slot>
</x-layout>