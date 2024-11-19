<?php

namespace App\Http\Controllers;

use App\Models\Classmeet;
use App\Models\P5;
use App\Models\Pagelaran;
use App\Models\Pelajaran;
use App\Models\Piket;
use App\Models\Random;
use App\Models\Slide;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagelaransImage = Pagelaran::first();
        $classmeetImage = Classmeet::first();
        $p5Image = P5::first();

        $randoms = Random::all();
        $slides = Slide::all();

        $currentDay = Carbon::now()->format('l');

        $jadwalPelajaran = Pelajaran::where('day', $currentDay)->get();

        $jadwalPiket = Piket::where('day', $currentDay)->get();

        return view('guest.index', compact('slides', 'randoms', 'jadwalPelajaran', 'jadwalPiket', 'pagelaransImage', 'classmeetImage', 'p5Image')); // Mengirim data slides ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
