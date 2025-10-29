<?php

namespace App\Livewire;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

#[On('notesUpdated')]
class NoteList extends Component
{
    public $notes = [];
    public $selectedNote = [];
    public $search = '';
    public $tagId = null;

    public function mount () {
        $this->getNotes();
    }

    #[On('tagChanged')]
    public function setTag($tagId)
    {
        $this->tagId = $tagId;
        $this->getNotes();
    }

    public function selectNote ($id) {
        $this->selectedNote = $id;
        $this->dispatch('noteSelected', $id);
    }

    #[On('noteCreated')]
    public function createNote ($id) {
        $this->getNotes();
        $this->selectNote($id);
    }

    #[On('notesSearched')]
    public function updateSearch ($search) {
        $this->search = $search;
        $this->getNotes();
    }

    public function getNotes () {
        $query = Note::query()->where('user_id', Auth::id());

        if ($this->tagId) {
            $query->whereHas('tags', function ($query) {
                $query->where('tag_id', $this->tagId);
            });
        }

        if ($this->search) {
            $query->whereAny([
                    'title',
                    'content'
                ], 'like', "%{$this->search}%");   
        } 

        $this->notes = $query->orderBy('updated_at', 'desc')->get();
    }
    
    public function render()
    {
        return view('livewire.note-list');
    }
}
