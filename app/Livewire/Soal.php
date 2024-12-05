<?php

namespace App\Livewire;
use App\Models\QuizSession;
use App\Models\QuestionHandling\Question;
use App\Models\QuestionHandling\UsedQuestion;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Soal extends Component
{
    public $question = [];
    public $currentQuestion = 0;
    public $playerScore = 120;
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
        if ($this->selectedAnswer != null){
            $session = QuizSession::latest()->first();
            $this->currentQuestion ++;
    
            $isCorrect = DB::table("answers")->where('id', $this->selectedAnswer)->first()->status;
    
            $this->playerScore = $this->playerScore + ($isCorrect == 1 ? $points : 0);
    
            $session->score = $session->score + ($isCorrect == 1 ? $points : 0);
            $session->save();
            $this->selectedAnswer = null;
        }
    }
    public function render()
    {
        // dd($this->questions);
        return view('livewire.soal',[
            "Question" => $this->question, 
            "currentQuestion" => $this->currentQuestion, 
            "playerScore" => $this->playerScore,
            "selectedAnswer" => $this->selectedAnswer,
        ]);
    }
}
