<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlimaRequest;
use App\Models\P5;
use App\Services\PlimaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class P5Controller extends Controller
{
    protected $plimaService;

    public function __construct(PlimaService $plimaService)
    {
        $this->plimaService = $plimaService;
    }

    public function index()
    {
        $plima = $this->plimaService->getAllPlima();
        return view('plima.index', compact('plima'));
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
    public function store(PlimaRequest $request)
    {
        $this->plimaService->createPlima($request->validated());
        return redirect()->route('plima.index')->with('success', 'Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(P5 $p5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(P5 $p5)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlimaRequest $request, $id)
    {
        $this->plimaService->updatePlima($id, $request->validated());
        return redirect()->route('plima.index')->with('success', 'Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plima = P5::findOrFail($id);

        if ($plima->image) {
            Storage::disk('public')->delete($plima->image);
        }

        $this->plimaService->deletePlima($id);

        return redirect()->route('plima.index')->with('success', 'Berhasil');
    }
}
