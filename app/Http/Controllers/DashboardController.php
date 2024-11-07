<?php

namespace App\Http\Controllers;

use App\Models\Classmeet;
use App\Models\P5;
use App\Models\Pagelaran;
use App\Models\Random;
use App\Models\Slide;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slidePick = Slide::count();
        $pagelaran = Pagelaran::count();
        $classmeet = Classmeet::count();
        $plima = P5::count();
        $random = Random::count();
        return view('dashboard.index', compact('slidePick', 'pagelaran', 'classmeet', 'plima', 'random'));
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