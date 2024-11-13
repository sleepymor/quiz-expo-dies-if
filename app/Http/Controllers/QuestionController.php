<?php

namespace App\Http\Controllers;
app\Models\question_handling\question;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $question = question::Get();
    }
}
