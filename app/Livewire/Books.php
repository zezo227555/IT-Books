<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class Books extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.books', [
            'books' => Book::where('title', 'like',"%$this->search%")->get(),
        ]);
    }
}
