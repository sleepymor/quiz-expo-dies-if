<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz_session extends Model
{
    use HasFactory;

    protected $fillable = ['score'];

    public function usedQuestions()
    {
        return $this->hasMany(UsedQuestion::class, 'session_id');
    }

    public function player()
    {
        return $this->hasOne(Player::class, 'session_id', 'id');
    }
}
