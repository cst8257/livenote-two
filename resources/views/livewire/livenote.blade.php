<main class="container-fluid">
    <x-navbar />
    <div class="row vh-100 py-3">
        <div class="col-12 col-md-3 col-lg-2 d-flex flex-column">
            <livewire:tag-list />
        </div>
        <div class="col-12 col-md-4 col-lg-4 d-flex flex-column">
            <livewire:note-list />
        </div>
        <div class="col-12 col-md-5 col-lg-6 pt-5">
            <livewire:note-viewer />
        </div>
    </div>
</main>
