<?php

namespace App\Http\Controllers;

use App\Models\Buddy;
use Illuminate\Http\Request;

class BuddyController extends Controller
{
    public function create()
    {
        return view('buddies.create');
    }

    public function edit(Buddy $id)
    {
        return view('buddies.edit', compact('id'));
    }
}
