<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $search = '';


    public function render()
    {
        return view('livewire.users', [
            'users' => User::where('name', 'like',"%$this->search%")->get(),
        ]);
    }
}
