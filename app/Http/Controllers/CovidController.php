<?php

namespace App\Http\Controllers;

use App\Services\CovidStatisticService;
use GuzzleHttp\Exception\GuzzleException;

class CovidController extends Controller
{
  /**
   * @throws GuzzleException
   */
  public function __invoke(CovidStatisticService $covidStatisticService)
  {
    $today = now()->toDateString();

    $confirmedCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('Nigeria', 'confirmed');
    $recoveredCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('Nigeria', 'recovered');
    $deadCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('Nigeria', 'deaths');

    return view('covid',
      [
        'today' => $today,
        'confirmedCovidCasesUntilToday' => $confirmedCovidCasesUntilToday['Cases'],
        'recoveredCovidCasesUntilToday' => $recoveredCovidCasesUntilToday['Cases'],
        'deadCovidCasesUntilToday' => $deadCovidCasesUntilToday['Cases'],
      ]
    );
  }
}