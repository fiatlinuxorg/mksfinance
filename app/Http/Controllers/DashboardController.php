<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function viewDashboard()
    {
        $cards = [
            (object)[
                'title' => 'Cardnegro',
                'background' => 'blue',
                'number' => '1234 5678 9101 1121',
                'expiration' => '12/23',
                'cvv' => '123'
            ],
        ];

        return view('dashboard', compact('cards'));
    }
}
