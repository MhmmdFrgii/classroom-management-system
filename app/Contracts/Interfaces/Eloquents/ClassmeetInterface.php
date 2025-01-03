<?php

namespace App\Contracts\Interfaces\Eloquents;

interface ClassmeetInterface
{
    public function find($id);
    public function getAll();
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function paginate(int $perPage);
}
