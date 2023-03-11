<?php

namespace App\Http\Controllers;

use App\Services\Handler\MovieService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    private MovieService $movieService;
    public function __construct()
    {
        $this->movieService = new MovieService();
    }

    public function getDataTitle(Request $request)
    {
        $client = new Client();

        $movie = $this->movieService->getDataTitle();
        $request->setHeaders([
            'X-RapidAPI-Key' => '2ea36e2668msh45ee9a67bdc2419p12a1c3jsnd9264cc01dfb',
            'X-RapidAPI-Host' => 'moviesdatabase.p.rapidapi.com'
        ]);

        $client->enqueue($request)->send();
        $movie = $client->getResponse();

        echo $movie->getBody();
    }
}
