<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\Eloquents\RandomInterface;
use App\Models\Random;

class RandomRepository implements RandomInterface
{
    public function find($id)
    {
        return Random::findOrFail($id);
    }

    public function getAll()
    {
        return Random::all();
    }

    public function create(array $data)
    {
        return Random::create($data);
    }

    public function update($id, array $data)
    {
        $random = Random::findOrFail($id);
        $random->update($data);
        return $random;
    }

    public function delete($id)
    {
        $random = Random::findOrFail($id);
        $random->delete();
    }
}