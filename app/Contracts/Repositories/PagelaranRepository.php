<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\Eloquents\PagelaranInterface;
use App\Models\Pagelaran;

class PagelaranRepository implements PagelaranInterface
{
    public function find($id)
    {
        return Pagelaran::findOrFail($id);
    }

    public function getAll()
    {
        return Pagelaran::all();
    }

    public function create(array $data)
    {
        return Pagelaran::create($data);
    }

    public function update($id, array $data)
    {
        $pagelaran = Pagelaran::findOrFail($id);
        $pagelaran->update($data);
        return $pagelaran;
    }

    public function delete($id)
    {
        $pagelaran = Pagelaran::findOrFail($id);
        $pagelaran->delete();
    }
}