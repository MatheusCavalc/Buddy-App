<?php

namespace App\Http\Controllers;

use App\Models\Buddy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('index');
    }
}
