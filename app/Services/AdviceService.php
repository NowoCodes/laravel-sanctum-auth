<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AdviceService
{

    public function getRandomAdvice()
    {
        $request = Http::get("https://api.adviceslip.com/advice");

        return $request->json();
    }
}