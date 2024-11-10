<?php

namespace App\Livewire;

use Livewire\Component;

class Registration extends Component
{

    public $name;

    public function submit()
    {
        session()->put('name', $this->name);
        $this->dispatch('nameSubmitted', $this->name);
    }

    public function render()
    {
        return view('livewire.registration');
    }
}
