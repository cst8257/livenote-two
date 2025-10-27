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
    public $search = '';

    public function mount () {
        $this->getNotes();
    }

    public function selectNote ($id) {
        $this->selectedNote = Note::find($id);
        $this->dispatch('noteSelected', $this->selectedNote);
    }

    #[On('notesSearched')]
    public function updateSearch ($search) {
        $this->search = $search;
        $this->getNotes();
    }

    public function getNotes () {
        if ($this->search) {
            $this->notes = Note::where('title', 'like', "%{$this->search}%")
                ->orWhere('content', 'like', "%{$this->search}%")
                ->get();
        } else {
            $this->notes = Note::all();
        }
        
    }
    
    public function render()
    {
        return view('livewire.note-list');
    }
}
