<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\GuzzleException;

class CovidStatisticService
{
    /**
     * @throws GuzzleException
     */
    public function getTotalCasesByCountryAndType($country, $type)
    {
//    $today = now()->toJSON();

        $request = Http::
//      get("https://api.covid19api.com/total/country/$country/status/$type?from=2020-03-01T00:00:00Z&to=$today");
        get("https://api.covid19api.com/total/dayone/country/$country/status/$type");
//    get('https://api.covid19api.com/total/country/south-africa/status/confirmed');

        $response = $request->json();

        return $response[count($response) - 1];
    }
}
