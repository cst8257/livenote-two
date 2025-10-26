<x-layout>
    <x-navbar />
    <section class="row py-5">
        <div class="col">           
            <h2 class="py-3">Notes</h2>

            <div class="d-grid gap-3 flex-wrap pb-5" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
                @foreach ($notes as $note)
                <x-card :note="$note" />
                @endforeach
            </div>
            
        </div>
    </section>
</x-layout>