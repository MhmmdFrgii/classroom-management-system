<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\Eloquents\ClassmeetInterface;
use App\Models\Classmeet;

class ClassmeetRepository implements ClassmeetInterface
{
    public function find($id)
    {
        return Classmeet::findOrFail($id);
    }

    public function getAll()
    {
        return Classmeet::all();
    }

    public function create(array $data)
    {
        return Classmeet::create($data);
    }

    public function update($id, array $data)
    {
        $classmeet = Classmeet::findOrFail($id);
        $classmeet->update($data);
        return $classmeet;
    }

    public function delete($id)
    {
        $classmeet = Classmeet::findOrFail($id);
        $classmeet->delete();
    }
}
