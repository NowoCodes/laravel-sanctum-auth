<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Services\CovidStatisticService;
use GuzzleHttp\Exception\GuzzleException;

class CovidController extends Controller
{
    /**
     * @throws GuzzleException
     */
    public function __invoke(CovidStatisticService $covidStatisticService)
    {
        $today = now()->format('d, M Y');

        $confirmedCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('Nigeria', 'confirmed');
        $recoveredCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('Nigeria', 'recovered');
        $deadCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('Nigeria', 'deaths');

        return Inertia::render('APIs/Covid', [
                'today' => $today,
                'confirmedCovidCasesUntilToday' => $confirmedCovidCasesUntilToday['Cases'],
                'recoveredCovidCasesUntilToday' => $recoveredCovidCasesUntilToday['Cases'],
                'deadCovidCasesUntilToday' => $deadCovidCasesUntilToday['Cases'],
            ]
        );
    }
}