<?php

namespace App\Models\QuestionHandling;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsedQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['session_id', 'question_id'];

    public function quizSession()
    {
        return $this->belongsTo(QuizSession::class, 'quiz_sessions', 'id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'questions', 'id');
    }
}
