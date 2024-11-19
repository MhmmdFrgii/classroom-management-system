<?php

namespace App\Services;

use App\Contracts\Interfaces\Eloquents\PelajaranInterface;
use App\Models\Pelajaran;

class PelajaranService implements PelajaranInterface
{
    public function getAll(int $perPage = null)
    {
        $query = Pelajaran::query();
        if ($perPage) {
            return $query->paginate($perPage);
        }

        return $query->get();
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
