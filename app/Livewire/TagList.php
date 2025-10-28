<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Component;

class TagList extends Component
{
    public $selectedTag = '';
    public $tags = [];

    public function mount () 
    {
        $this->tags = Tag::orderBy('name')->get();
    }

    public function selectTag($tagId)
    {
        $this->selectedTag = $tagId;
        $this->dispatch('tagChanged', $tagId);
    }

    public function render()
    {
        return view('livewire.tag-list');
    }
}
