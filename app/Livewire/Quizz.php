<?php

namespace App\Livewire;

use Livewire\Component;

class Quizz extends Component
{
    public $name; // This will hold the name received from the Registration component

    protected $listeners = ['nameSubmitted' => 'handleNameSubmitted'];

    public function handleNameSubmitted($data)
    {
        $this->name = $data['name']; // Store the name
        // dd($data['name']);
    }

    public function render()
    {
        return view('livewire.quizz');
    }
}
