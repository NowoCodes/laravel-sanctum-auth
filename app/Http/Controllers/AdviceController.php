<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Advice;
use App\Services\AdviceService;

class AdviceController extends Controller
{
    public function __invoke(AdviceService $adviceService): Response
    {
        $response = $adviceService->getRandomAdvice();
        $advice = $response['slip']['advice'];

        Advice::updateOrCreate([
            'advice' => $advice,
        ]);

        return Inertia::render('APIs/Advice', [
            'advice' => $advice,
            'all_advice' => Advice::latest()->paginate(10),
        ]);
    }
}