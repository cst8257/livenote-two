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
        $this->selectedNote = $id;
        $this->dispatch('noteSelected', $id);
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
                ->orderBy('updated_at', 'desc')
                ->get();
        } else {
            $this->notes = Note::orderBy('updated_at', 'desc')->get();
        }
        
    }
    
    public function render()
    {
        return view('livewire.note-list');
    }
}
