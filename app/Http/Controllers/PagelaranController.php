<?php

namespace App\Http\Controllers;

use App\Http\Requests\PagelaranRequest;
use App\Models\Pagelaran;
use App\Services\PagelaranService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PagelaranController extends Controller
{
    protected $pageralanService;

    public function __construct(PagelaranService $pagelaranService)
    {
        $this->pageralanService = $pagelaranService;
    }

    public function index()
    {
        $pagelaran = $this->pageralanService->getAllPagelaran();
        return view('pagelaran.index', compact('pagelaran'));
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
    public function store(PagelaranRequest $request)
    {
        $this->pageralanService->createPagelaran($request->validated());
        return redirect()->route('pagelaran.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pagelaran $pagelaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pagelaran $pagelaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PagelaranRequest $request, $id)
    {
        $this->pageralanService->updatePagelaran($id, $request->validated());
        return redirect()->route('pagelaran.index')->with('success', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pagelaran = Pagelaran::findOrFail($id);

        if ($pagelaran->image) {
            Storage::disk('public')->delete($pagelaran->image);
        }

        $this->pageralanService->deletePagelaran($id);

        return redirect()->route('pagelaran.index')->with('success', 'Data berhasil di hapus');
    }
}
