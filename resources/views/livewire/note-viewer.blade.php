<div>
    @if (isset($selectedNote['id']))
    <section class="row py-3">
        <div class="col">
            <div class="row g-2 align-items-center mb-2">
                <div class="col">
                    <input class="form-control" placeholder="Title" 
                        wire:model="title" />
                </div>
                <div class="col-auto">
                    <button class="btn btn-success" wire:click="save">Save</button>
                    <button class="btn btn-outline-danger">Delete</button>
                </div>
            </div>

            <div class="mb-3">
                <textarea rows="10" class="form-control" placeholder="Write your note..."
                    wire:model="content"></textarea>
            </div>
        </div>
    </section>
    @else
    <div class="text-muted">Select or create a note to view details.</div>
    <div class="mt-3">
        <button class="btn btn-primary">Create New Note</button>
    </div>
    @endif
</div>