<?php

namespace App\Contracts\Interfaces\Eloquents;

use App\Models\Piket;

interface PiketInterface
{
    public function getAll();
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
