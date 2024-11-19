<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\Eloquents\PelajaranInterface;
use App\Http\Requests\PelajaranRequest;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    protected $pelajaranService;

    public function __construct(PelajaranInterface $pelajaranService)
    {
        $this->pelajaranService = $pelajaranService;
    }

    public function index()
    {
        $pelajaran = $this->pelajaranService->getAll(10);
        return view('pelajaran.index', compact('pelajaran'));
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
    public function store(PelajaranRequest $request)
    {
        $this->pelajaranService->create($request->validated());
        return redirect()->route('jadwal-pelajaran.index')->with('success', 'Berhasil menambah Jadwal');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelajaran $pelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelajaran $pelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PelajaranRequest $request, $id)
    {
        $this->pelajaranService->update($id, $request->validated());
        return redirect()->route('jadwal-pelajaran.index')->with('success', 'Berhasil mengedit Jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->pelajaranService->delete($id);
        return redirect()->route('jadwal-pelajaran.index')->with('success', 'Berhasil menghapus Jadwal');
    }
}
