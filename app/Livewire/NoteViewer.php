<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class NoteViewer extends Component
{
    public $selectedNote = [];
    public $title = '';
    public $content = '';

    #[On('noteSelected')]
    public function selectNote ($note) {
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
