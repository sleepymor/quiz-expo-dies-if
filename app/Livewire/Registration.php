<?php

namespace App\Livewire;

use App\Models\QuizSession;
use App\Models\QuestionHandling\Question;
use App\Models\QuestionHandling\UsedQuestion;
use App\Models\Player;
use Illuminate\Http\Request;
use Livewire\Component;


class Registration extends Component
{
    public $name; 
    public $ints;

    protected $rules = [
        'name' => 'required|string|max:255',
        'ints' => 'required|string|max:255',
    ];

    public function submit(Request $request)
    {
        $validatedData = $this->validate();

        $this->dispatch('nameSubmitted', ['name' => $this->name]);
    
        // Create a new QuizSession
        $session = QuizSession::create([
            'score' => 0
        ]);
        $player = Player::create([
            'username' => $validatedData['name'],
            'institution' => $validatedData['ints'],
            'session_id' => $session->id
        ]);
    


        $questions = Question::where('level', 1)->inRandomOrder()->limit(3)->get();
        $questions = $questions->merge(Question::where('level', 2)->inRandomOrder()->limit(3)->get());
        $questions = $questions->merge(Question::where('level', 3)->inRandomOrder()->limit(3)->get());

        // dd($questions);

        foreach ($questions as $question) {
            UsedQuestion::create([
                'session_id' => $session->id,
                'question_id' => $question->id,
            ]);
        }
    }


    public function render()
    {
        return view('livewire.registration');
    }

    public function goBack() {
        return redirect()->route('/');
    }
}
