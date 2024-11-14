<?php

namespace App\Services;

use App\Contracts\Interfaces\Eloquents\PelajaranInterface;
use App\Models\Pelajaran;

class PelajaranService implements PelajaranInterface
{
    public function getAll()
    {
        return Pelajaran::all();
    }

    public function create(array $data)
    {
        return Pelajaran::create($data);
    }

    public function update($id, array $data)
    {
        $pelajaran = Pelajaran::findOrFail($id);
        $pelajaran->update($data);
    }

    public function delete($id)
    {
        $pelajaran = Pelajaran::findOrFail($id);
        return $pelajaran->delete($id);
    }
}
