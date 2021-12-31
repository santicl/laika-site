<?php

namespace App\Http\Controllers;

use Illuminate\Https\Request;
use Http;

class TakeProduct extends Controller
{
    public function index()
    {
        $res = Http::get('https://dog.ceo/api/breed/hound/afghan/images/random/3');
        $dog = $res->json();
        return $dog;
    }
}