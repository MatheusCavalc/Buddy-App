<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuddyController extends Controller
{
    public function create()
    {
        return view('buddies.create');
    }
}
