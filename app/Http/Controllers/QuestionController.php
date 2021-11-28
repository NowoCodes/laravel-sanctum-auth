<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Question;
use App\Services\QuizService;

class QuestionController extends Controller
{
    public function index()
    {
        return Inertia::render('APIs/Question', [
            'questions' => Question::latest()->paginate(10),
        ]);
    }

    public function generate(QuizService $quizService)
    {
        $questions = $quizService->getQuestions();

        foreach ($questions as $question) {
            Question::create([
                'question' => $question['question'],
                'answer_a' => $question['answers']['answer_a'],
                'answer_b' => $question['answers']['answer_b'],
                'answer_c' => $question['answers']['answer_c'],
                'answer_d' => $question['answers']['answer_d'],
            ]);
        }

        // return "DONE";
        // add an alert here later
        return back();
    }
}