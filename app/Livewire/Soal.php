<?php

namespace App\Livewire;

use App\Models\QuizSession;
use App\Models\QuestionHandling\Question;
use App\Models\QuestionHandling\UsedQuestion;
use Illuminate\Support\Facades\DB;
use App\Models\Player;
use Illuminate\Support\Facades\Redirect;

use Livewire\Component;

class Soal extends Component
{
    public $question = [];
    public $currentQuestion = 0;
    public $playerScore = 0;
    public $selectedAnswer = null;
    public $showPopup = false;
    public $popupStatus = null;

    public function mount()
    {

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

    public function checkAnswered($points)
    {
        $current = $this->question[$this->currentQuestion][0];
        $selected = $this->selectedAnswer;

        // cati jawaban yang dipilih dari relasi answer
        $selectedAnswerObj = $current->answer->where('id', $selected)->first();

        $isCorrect = $selectedAnswerObj ? ($selectedAnswerObj->is_correct ?? $selectedAnswerObj->status ?? false) : false;

        $this->popupStatus = $isCorrect ? 'benar' : 'salah';
        $this->showPopup = true;

        // next ke soal berikutnya setelah delay
        $this->dispatch('showPopup');

        if ($this->selectedAnswer != null) {
            $session = QuizSession::latest()->first();
            $this->currentQuestion++;

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
        return view('livewire.soal', [
            "Question" => $this->question,
            "currentQuestion" => $this->currentQuestion,
            "playerScore" => $this->playerScore,
            "selectedAnswer" => $this->selectedAnswer,
        ]);
    }

    public function retakeQuiz()
    {
        // buat session baru
        $session = QuizSession::create(['score' => 0]);
        // ambil player terakhir, update session_id ke session baru
        $player = Player::latest()->first();
        if ($player) {
            $player->session_id = $session->id;
            $player->save();
        }

        // generate ulang soal
        UsedQuestion::where('session_id', $session->id)->delete();

        $questions = Question::where('level', 1)->inRandomOrder()->limit(3)->get()
            ->merge(Question::where('level', 2)->inRandomOrder()->limit(3)->get())
            ->merge(Question::where('level', 3)->inRandomOrder()->limit(3)->get());

        foreach ($questions as $question) {
            UsedQuestion::create([
                'session_id' => $session->id,
                'question_id' => $question->id,
            ]);
        }

        // Reset state
        $this->question = [];
        $this->currentQuestion = 0;
        $this->playerScore = 0;
        $this->selectedAnswer = null;
        $this->showPopup = false;
        $this->popupStatus = null;

        // ambil ulang soal untuk session baru
        $fetchQuestions = UsedQuestion::where("session_id", $session->id)->get();
        foreach ($fetchQuestions as $usedQuestion) {
            $this->question[]  =  Question::where("id", $usedQuestion->question_id)
                ->with('answer')
                ->get();
        }
    }
    public function backToHome()
    {
        return redirect()->route('/');
    }
}
