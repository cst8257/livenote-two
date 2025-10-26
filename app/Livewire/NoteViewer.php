<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class NoteViewer extends Component
{
    #[Reactive]
    public $selectedNote = [];

    public function save () 
    {
        $note = Note::find($this->selectedNote['id']);
        $note->title = $this->title;
        $note->content = $this->content;
        $note->save();
    }

    public function render()
    {
        return view('livewire.note-viewer');
    }
}
