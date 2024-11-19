<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassmeetRequest;
use App\Models\Classmeet;
use App\Services\ClassmeetService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClassmeetController extends Controller
{
    protected $classmeetService;

    public function __construct(ClassmeetService $classmeetService)
    {
        $this->classmeetService = $classmeetService;
    }


    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $classmeet = $this->classmeetService->paginateClassmeet($perPage);
        return view('classmeet.index', compact('classmeet'));
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
    public function store(ClassmeetRequest $request)
    {
        $this->classmeetService->createClassmeet($request->validated());
        return redirect()->route('classmeet.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Classmeet $classmeet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classmeet $classmeet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClassmeetRequest $request, $id)
    {
        $this->classmeetService->updateClassmeet($id, $request->validated());
        return redirect()->route('classmeet.index')->with('success', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $classmeet = Classmeet::findOrFail($id);

        if ($classmeet->image) {
            Storage::disk('public')->delete($classmeet->image);
        }

        $this->classmeetService->deleteClassmeet($id);

        return redirect()->route('classmeet.index')->with('success', 'Data berhasil dihapus');
    }
}
