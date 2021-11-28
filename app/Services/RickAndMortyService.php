<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RickAndMortyService
{
    public function getCharacter(int $page)
    {
        $request = Http::get("https://rickandmortyapi.com/api/character/?page=$page");

        return $request->json();
    }
}