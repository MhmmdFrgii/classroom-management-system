<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\Eloquents\PiketInterface;
use App\Http\Requests\PiketRequest;
use App\Models\Piket;
use Illuminate\Http\Request;

class PiketController extends Controller
{
    protected $piketService;

    public function __construct(PiketInterface $piketService)
    {
        $this->piketService = $piketService;
    }

    public function index()
    {
        $piket = $this->piketService->getAll();
        return view('piket.index', compact('piket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(PiketRequest $request)
    {
        $this->piketService->create($request->validated());
        return redirect()->route('jadwal-piket.index')->with('success', 'Berhasil menambah Jadwal');
    }

    /**
     * Display the specified resource.
     */
    public function show(Piket $piket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Piket $piket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PiketRequest $request, $id)
    {
        $this->piketService->update($id, $request->validated());
        return redirect()->route('jadwal-piket.index')->with('success', 'Berhasil mengedit Jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->piketService->delete($id);
        return redirect()->route('jadwal-piket.index')->with('success', 'Berhasil menghapus Jadwal');
    }
}
