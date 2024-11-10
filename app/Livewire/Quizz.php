<?php

namespace App\Livewire;

use Livewire\Component;

class Quizz extends Component
{
    public $name;

    protected $listeners = ['nameSubmitted'];

    public function namaSubmitted($name)
    {
        $this->name = $name;
    }


    public function render()
    {
        return view('livewire.quizz');
    }
}
