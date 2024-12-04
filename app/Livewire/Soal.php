<?php

namespace App\Livewire;
use App\Models\QuizSession;
use App\Models\QuestionHandling\Question;
use App\Models\QuestionHandling\UsedQuestion;

use Livewire\Component;

class Soal extends Component
{
    public $questions = [];
    // public $sessionId = QuizSession::latest()->first();

    public function mount(){

        $session = QuizSession::latest()->first();
        $session_id = $session->id;

        $fetchQuestions = UsedQuestion::where("session_id", $session_id)->get();


        // $this->question = []; 

        foreach ($fetchQuestions as $usedQuestion) {
            $this->questions[]  =  Question::where("id", $usedQuestion->question_id)
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
        return view('livewire.soal',["Question" => $this->questions]);
    }
}
