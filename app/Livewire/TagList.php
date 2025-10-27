<?php

namespace App\Livewire;

use Livewire\Component;

class TagList extends Component
{
    public $selectedTag = '';
    
    public function render()
    {
        return view('livewire.tag-list');
    }
}
