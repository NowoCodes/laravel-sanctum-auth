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
                'question_id' => $question['id'],
                'question' => $question['question'],
                'answer_a' => $question['answers']['answer_a'],
                'answer_b' => $question['answers']['answer_b'],
                'answer_c' => $question['answers']['answer_c'],
                'answer_d' => $question['answers']['answer_d'],
                'answer_e' => $question['answers']['answer_e'],
                'answer_f' => $question['answers']['answer_f'],
                'multiple_correct_answers' => $question['multiple_correct_answers'],
                'correct_answers' => $question['correct_answers'],
                'correct_answer' => $question['correct_answer'],
                'category' => $question['category'],
                'tags' => $question['tags'],
                'difficulty' => $question['difficulty'],
            ]);
        }

        // return "DONE";
        // add an alert here later
        return back();
    }
}
