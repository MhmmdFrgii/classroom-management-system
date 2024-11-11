<?php

namespace App\Http\Controllers;

use App\Models\P5;
use Illuminate\Http\Request;

class P5MemoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $p5 = P5::all();
        return view('guest.memory.memory-p5', compact('p5'));
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
