<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'quiz_sessions', 'institution'];

    public function quizSession()
    {
        return $this->belongsTo(QuizSession::class, 'quiz_sessions', 'id');
    }
}
