<?php

namespace App\Livewire;

use Livewire\Component;

class Registration extends Component
{
    public $name; // This holds the name input value

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        // Dispatch the event with the name
        $this->dispatch('nameSubmitted', ['name' => $this->name]);
    }

    public function render()
    {
        return view('livewire.registration');
    }
}
