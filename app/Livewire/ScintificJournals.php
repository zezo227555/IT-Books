<?php

namespace App\Livewire;

use App\Models\ScintificJournal;
use Livewire\Component;

class ScintificJournals extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.scintific-journals', [
            'scintificJournals' => ScintificJournal::where('name', 'like',"%$this->search%")->get(),
        ]);
    }
}
