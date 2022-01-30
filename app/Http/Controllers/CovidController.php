<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Services\CovidStatisticService;
use Illuminate\Support\Facades\Request;
use GuzzleHttp\Exception\GuzzleException;

class CovidController extends Controller
{
    /**
     * @throws GuzzleException
     */
    public function __invoke(CovidStatisticService $covidStatisticService)
    {
        $default = 'ghana';
        $country = Request::get('country');

        $country = !is_null($country) ? $country : $default;

        $today = now()->format('d, M Y');
        $confirmedCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType($country, 'confirmed');
        $recoveredCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType($country, 'recovered');
        $deadCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType($country, 'deaths');

        return Inertia::render('APIs/Covid', [
                'today' => $today,
                'confirmedCovidCasesUntilToday' => $confirmedCovidCasesUntilToday['Cases'],
                'recoveredCovidCasesUntilToday' => $recoveredCovidCasesUntilToday['Cases'],
                'deadCovidCasesUntilToday' => $deadCovidCasesUntilToday['Cases'],
            ]
        );
    }
}
