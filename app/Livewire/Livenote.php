<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;

class Livenote extends Component
{
    public $notes = [];
    public $selectedNote = [];

    public function mount () {
        $this->notes = Note::all();
    }

    public function selectNote ($id) {
        $this->selectedNote = Note::find($id);
    }
    
    public function render()
    {
        return view('livewire.livenote');
    }
}
