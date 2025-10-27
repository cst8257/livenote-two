<?php

namespace App\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function updatedSearch () {
        $this->dispatch('notesSearched', $this->search);
    }

    public function doNothing () {
        //
    }

    public function render()
    {
        return view('livewire.search');
    }
}
