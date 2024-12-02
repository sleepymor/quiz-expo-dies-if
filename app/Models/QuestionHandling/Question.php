<?php

namespace App\Models\QuestionHandling;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function usedQuestions()
    {
        return $this->hasMany(UsedQuestion::class, 'question_id');
    }
}
