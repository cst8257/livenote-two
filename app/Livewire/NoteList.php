<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Attributes\On;
use Livewire\Component;

#[On('notesUpdated')]
class NoteList extends Component
{
    public $notes = [];
    public $selectedNote = [];

    public function mount () {
        $this->notes = Note::all();
    }

    public function selectNote ($id) {
        $this->selectedNote = Note::find($id);
        $this->dispatch('noteSelected', $this->selectedNote);
    }
    
    public function render()
    {
        return view('livewire.note-list');
    }
}
