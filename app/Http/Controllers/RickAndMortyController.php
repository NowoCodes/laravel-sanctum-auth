<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Services\RickAndMortyService;

class RickAndMortyController extends Controller
{
    public function index(RickAndMortyService $rickAndMortyService, $page = 41)
    {
        $characters = $rickAndMortyService->getCharacter($page);

//        $pagination = $characters['info'];
//        $pages = $pagination['pages'];
//        $next = $pagination['next'];
//        $prev = $pagination['prev'];
//
//        $page_no = explode('?page=', $next)[1];

        return Inertia::render('APIs/RickAndMorty', [
            'characters' => $characters,
//            'pages' => $pages,
//            'page_no' => $page_no,
//            'next' => $next,
//            'prev' => $prev,
//            'current_page' => $page_no - 1,
        ]);
    }
}