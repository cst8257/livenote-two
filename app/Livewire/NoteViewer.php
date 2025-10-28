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
    public $selectedTags = [];

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
        $this->selectedTags = $note->tags()->pluck('tags.id')->toArray();
    }

    public function store () {
        $note = new Note();
        $note->title = 'Untitled';
        $note->content = '';
        $note->save();
        $this->dispatch('noteCreated', $note->id);
    }

    public function save () 
    {
        $note = Note::find($this->selectedNote['id']);
        $note->title = $this->title;
        $note->content = $this->content;
        $note->save();

        $note->tags()->sync($this->selectedTags ? $this->selectedTags : []);

        $this->dispatch('notesUpdated');
    }

     public function delete () {
        $note = Note::find($this->selectedNote['id']);
        $note->delete();

        $this->selectedNote = [];
        $this->title = '';
        $this->content = '';
        
        $this->dispatch('notesUpdated');
    }

    public function render()
    {
        return view('livewire.note-viewer');
    }
}
