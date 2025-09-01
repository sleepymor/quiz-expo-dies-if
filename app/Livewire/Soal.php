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
    public $playerScore = 0;
    public $selectedAnswer = null;
    public $showPopup = false;
    public $popupStatus = null;

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

    public function nextQuestion()
    {
        $this->currentQuestion++;
        $this->selectedAnswer = null;
    }
    
    public function checkAnswered($points){
        $current = $this->question[$this->currentQuestion][0];
        $selected = $this->selectedAnswer;

        // cati jawaban yang dipilih dari relasi answer
        $selectedAnswerObj = $current->answer->where('id', $selected)->first();

        $isCorrect = $selectedAnswerObj ? ($selectedAnswerObj->is_correct ?? $selectedAnswerObj->status ?? false) : false;

        $this->popupStatus = $isCorrect ? 'benar' : 'salah';
        $this->showPopup = true;

        // next ke soal berikutnya setelah delay
        $this->dispatch('showPopup');

        if ($this->selectedAnswer != null){
            $session = QuizSession::latest()->first();
            $this->currentQuestion ++;

            // pake hasil $isCorrect di atas
            $this->playerScore = $this->playerScore + ($isCorrect ? $points : 0);

            $session->score = $session->score + ($isCorrect ? $points : 0);
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
