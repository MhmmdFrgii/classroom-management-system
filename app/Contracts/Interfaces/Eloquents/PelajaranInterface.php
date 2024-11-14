<?php

namespace App\Contracts\Interfaces\Eloquents;

use App\Models\Pelajaran;

interface PelajaranInterface
{
    public function getAll();
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
