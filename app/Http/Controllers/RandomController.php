<?php

namespace App\Http\Controllers;

use App\Http\Requests\RandomRequest;
use App\Models\Random;
use App\Services\RandomService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RandomController extends Controller
{
    protected $randomService;

    public  function __construct(RandomService $randomService)
    {
        $this->randomService = $randomService;
    }

    public function index()
    {
        $random = $this->randomService->getAllRandom();
        return view('random.index', compact('random'));
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
    public function store(RandomRequest $request)
    {
        $this->randomService->createRandom($request->validated());
        return redirect()->route('random.index')->with('success', 'Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Random $random)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Random $random)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RandomRequest $request, $id)
    {
        $this->randomService->updateRandom($id, $request->validated());
        return redirect()->route('random.index')->with('success', 'Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $random = Random::findOrFail($id);

        if ($random->image) {
            Storage::disk('public')->delete($random->image);
        }

        $this->randomService->deleteRandom($id);

        return redirect()->route('random.index')->with('success', 'Berhasil');
    }
}
