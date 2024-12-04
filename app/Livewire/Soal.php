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
    public $selectedAnswer;
    // public $sessionId = QuizSession::latest()->first();

    public function mount(){

        $session = QuizSession::latest()->first();
        $session_id = $session->id;

        $fetchQuestions = UsedQuestion::where("session_id", $session_id)->get();


        // $this->question = []; 

        foreach ($fetchQuestions as $usedQuestion) {
            $this->question[]  =  Question::where("id", $usedQuestion->question_id)
                                    ->with('answer')
                                    ->get();
        };
        
        // dd($question);
    }
        
    

    // public function fetchQuestions(){
    //     $pickQuestion = rand(0, (count($this->unAnswered) - 1));
    //     $this->firstQuestionKey = $this->unAnswered[$pickQuestion];
    //     // $this->firstQuestionKey = $this->unAnswered[$pickQuestion];
    //     $this->chosenQuestion = $this->firstQuestionKey;
    // }

    public function checkAnswered($points){
        $this->currentQuestion ++;
        $this->playerScore = $this->playerScore + ($this->selectedAnswer == 1 ? $points : 0);
    }
    // public function checkAnswered(){
    //     $getChosenIndex = array_search($this->chosenQuestion ,$this->unAnswered);
    //     unset($this->unAnswered[$getChosenIndex]);
    //     $this->unAnswered = array_values($this->unAnswered);
    //     $this->fetchQuestions();
    //     // dd($this->unAnswered);
    // }

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
