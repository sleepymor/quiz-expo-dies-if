<?php

namespace App\Livewire;
use App\Models\QuizSession;

use Livewire\Component;

class Soal extends Component
{
    public $questions = [];
    public $unAnswered;
    public $chosenQuestion;
    public $firstQuestionKey;

    public function mount(){
        $this->questions = [
            "Kepanjangan dari ITK apa?" => [
                "A" => ["Institut Teknologi Kumalala", "0"],
                "B" => ["Industri Tehnik Karanjoang", "0"],
                "C" => ["Institut Teknologi Kalimantan", "5"],
            ], 
            "Siapakah nama rektor Institut Teknologi Kalimantan 2024 ?" => [
                "A" => ["Prof. Dr. rer. nat. Agus Rubiyanto, M.Eng.Sc.", "5"],
                "B" => ["Prof. Dr. Ir. Sulistijono, DEA", "0"],
                "C" => ["Ir. Khakim Ghozali, M.MT.", "0"],
            ], 
            "Dimanakah letak kampus Institut Teknologi Kalimantan ?" => [
                "A" => ["Jl. Soekarno-Hatta Km. 16, Karang Joang, Balikpapan, Kalimantan Timur, 76127.", "0"],
                "B" => ["Jl. Soekarno-Hatta Km. 14, Karang Joang, Balikpapan, Kalimantan Timur, 76127", "0"],
                "C" => ["Jl. Soekarno-Hatta Km. 15, Karang Joang, Balikpapan, Kalimantan Timur, 76127.", "5"],
            ], 
            "Mengapa penting untuk menjaga keamanan data pribadi pada internet ?" => [
                "A" => ["Untuk menjaga diri", "0"],
                "B" => ["Untuk melindungi identitas diri", "5"],
                "C" => ["Terhindar dari hoax", "0"],
            ], 
        ];
        $this->unAnswered = array_keys($this->questions);
        $this->fetchQuestions();
    }

    public function fetchQuestions(){
        $pickQuestion = rand(0, (count($this->unAnswered) - 1));
        $this->firstQuestionKey = $this->unAnswered[$pickQuestion];
        // $this->firstQuestionKey = $this->unAnswered[$pickQuestion];
        $this->chosenQuestion = $this->firstQuestionKey;
    }

    public function checkAnswered(){
        $getChosenIndex = array_search($this->chosenQuestion ,$this->unAnswered);
        unset($this->unAnswered[$getChosenIndex]);
        $this->unAnswered = array_values($this->unAnswered);
        $this->fetchQuestions();
        // dd($this->unAnswered);
    }

    public function render()
    {
        return view('livewire.soal');
    }
}
