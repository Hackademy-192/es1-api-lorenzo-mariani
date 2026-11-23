<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class IscrittiController extends Controller
{
    public function iscritti()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users');

        $data = $response->json();

        return view('iscritti', ['data' => $data]);
    }
}