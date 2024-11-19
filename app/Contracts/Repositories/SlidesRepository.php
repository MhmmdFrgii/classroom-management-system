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

    public function getAll(int $perPage)
    {
        $query = Slide::query();

        if ($perPage) {
            return $query->paginate($perPage);
        }

        return $query->get();
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
