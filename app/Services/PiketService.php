<?php

namespace App\Services;

use App\Contracts\Interfaces\Eloquents\PiketInterface;
use App\Models\Piket;

class PiketService implements PiketInterface
{
    public function getAll()
    {
        return Piket::all();
    }

    public function create(array $data)
    {
        return Piket::create($data);
    }

    public function update($id, array $data)
    {
        $piket = Piket::findOrFail($id);
        $piket->update($data);
    }

    public function delete($id)
    {
        $piket = Piket::findOrFail($id);
        return $piket->delete($id);
    }
}
