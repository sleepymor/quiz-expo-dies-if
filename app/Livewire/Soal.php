<?php

namespace App\Livewire;
use App\Models\QuizSession;
use App\Models\QuestionHandling\Question;
use App\Models\QuestionHandling\UsedQuestion;

use Livewire\Component;

class Soal extends Component
{
    public $question = [];
    public $currentQuestion = 0;
    public $playerScore = 0;
    public $selectedAnswer = null;

    public function mount(){

        $session = QuizSession::latest()->first();
        $session_id = $session->id;

        $fetchQuestions = UsedQuestion::where("session_id", $session_id)->get();

        foreach ($fetchQuestions as $usedQuestion) {
            $this->question[]  =  Question::where("id", $usedQuestion->question_id)
                                    ->with('answer')
                                    ->get();
        };
    }
    
    public function checkAnswered($points){
        $this->currentQuestion ++;
        $this->playerScore = $this->playerScore + ($this->selectedAnswer == 1 ? $points : 0);

        $this->selectedAnswer = null;
    }

    public function render()
    {
        // dd($this->questions);
        return view('livewire.soal',[
            "Question" => $this->question, 
            "currentQuestion" => $this->currentQuestion, 
            "playerScore" => $this->playerScore,
        ]);
    }
}
