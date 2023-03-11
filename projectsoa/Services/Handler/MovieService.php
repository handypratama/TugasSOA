<?php

namespace App\Services\Handler;

use App\Services\ApiHandler as ServicesApiHandler;
use App\Services\Handler\ApiHandler;
use App\Services\Implement\MovieServiceImpl;


class MovieService implements MovieServiceImpl
{
    public function getDataTitle()
    {
        return ServicesApiHandler::request("GET", "https://moviesdatabase.p.rapidapi.com/titles");
    }
}
