<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\QuizSession;

class TopScore extends Component
{

    public $highscores;

    public function mount()
    {
        $this->highscores = QuizSession::with('player')
                    ->orderby('score', 'desc')
                    ->take(3)
                    ->get();
    }
    public function render()
    {

        // dd($highscores);
        return view('livewire.top-score', ['highscores' => $this->highscores]);
    }
}
