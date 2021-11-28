<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class QuizService
{
    public function getQuestions(int $limit = 10)
    {
        $request = Http::get('https://quizapi.io/api/v1/questions', [
            'apiKey' => 'qxnp3OAFlassOHAfquaew4LILMxnqCnbXw2loNwu',
            'limit' => $limit,
        ]);

        return $request->json();
    }
}