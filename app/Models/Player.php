<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'session_id', 'institution'];

    public function quizSession()
    {
        return $this->belongsTo(QuizSession::class, 'quiz_sessions', 'id');
    }
}
