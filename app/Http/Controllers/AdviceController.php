<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Services\AdviceService;

class AdviceController extends Controller
{
    public function __invoke(AdviceService $adviceService): Response
    {
        $advice = $adviceService->getRandomAdvice();

        return Inertia::render('APIs/Advice', [
            'advice' => $advice['slip'],
        ]);
    }
}
