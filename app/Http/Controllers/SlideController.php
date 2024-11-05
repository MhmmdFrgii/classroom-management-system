<?php

namespace App\Http\Controllers;

use App\Http\Requests\SlideRequest;
use App\Models\Slide;
use App\Services\SlideService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{

    protected $slideService;

    public function __construct(SlideService $slideService)
    {
        $this->slideService = $slideService;
    }

    public function index()
    {
        $slide = $this->slideService->getAllSlide();
        return view('slides.index', compact('slide'));
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
    public function store(SlideRequest $request)
    {
        $this->slideService->createSlide($request->validated());
        return redirect()->route('slides.index')->with('success', 'Gaji berhasil di edit');
    }


    /**
     * Display the specified resource.
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slide $slide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SlideRequest $request, $id)
    {
        $this->slideService->updateSlide($id, $request->validated());

        $slide = $this->slideService->getAllSlide();

        return redirect()->route('slides.index')->with('success', 'Gaji berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);

        if ($slide->image) {
            Storage::disk('public')->delete($slide->image);
        }

        $this->slideService->deleteSlide($id);

        return redirect()->route('slides.index')->with('success', 'Gaji berhasil di edit');
    }
}
