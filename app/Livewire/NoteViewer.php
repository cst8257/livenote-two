<?php

namespace App\Livewire;

use App\Models\Note;
use App\Models\Tag;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class NoteViewer extends Component
{
    public $selectedNote = null;
    public $title = '';
    public $content = '';
    public $availableTags = [];

    public function mount()
    {
        $this->availableTags = Tag::orderBy('name')->get();
    }

    #[On('noteSelected')]
    public function selectNote ($id) {
        $note = Note::find($id);
        $this->selectedNote = $note;
        $this->title = $note['title'];
        $this->content = $note['content'];
    }

    public function save () 
    {
        $note = Note::find($this->selectedNote['id']);
        $note->title = $this->title;
        $note->content = $this->content;
        $note->save();

        $this->dispatch('notesUpdated');
    }

    public function render()
    {
        return view('livewire.note-viewer');
    }
}
