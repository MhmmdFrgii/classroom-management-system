<?php

namespace App\Http\Controllers;

use App\Models\Classmeet;
use App\Models\P5;
use App\Models\Pagelaran;
use Illuminate\Http\Request;
use Pest\Plugins\Memory;

class MemoryController extends Controller
{
    public function index()
    {
        $pagelaranImage = Pagelaran::first();
        $classmeetImage = Classmeet::first();
        $p5Image = P5::first();
        return view('guest.memory', compact('pagelaranImage', 'classmeetImage', 'p5Image'));
    }
}
