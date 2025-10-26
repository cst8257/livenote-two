<x-layout>
    <x-navbar />
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
</x-layout>