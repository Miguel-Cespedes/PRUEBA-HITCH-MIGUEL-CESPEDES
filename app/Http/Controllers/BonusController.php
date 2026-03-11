<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class BonusController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users');

        $users = $response->json();

        return view('payments.bonus', compact('users'));
    }
}