<?php

namespace App\Http\Controllers;

use App\Models\Buddy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $buddies = Buddy::all();

        return view('index', [
            'buddies' => $buddies
        ]);
    }
}
