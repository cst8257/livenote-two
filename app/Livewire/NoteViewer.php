<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class NoteViewer extends Component
{
    #[Reactive]
    public $selectedNote = [];

    public function render()
    {
        return view('livewire.note-viewer');
    }
}
