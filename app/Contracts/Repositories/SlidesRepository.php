<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\Eloquents\SlidesInterface;
use App\Models\Slide;

class SlidesRepository implements SlidesInterface
{
    public function find($id)
    {
        return Slide::findOrFail($id);
    }

    public function getAll()
    {
        return Slide::all();
    }

    public function create(array $data)
    {
        return Slide::create($data);
    }

    public function update($id, array $data)
    {
        $slide = Slide::findOrFail($id);
        $slide->update($data);
        return $slide;
    }

    public function delete($id)
    {
        $slide = Slide::findOrFail($id);
        $slide->delete();
    }
}
