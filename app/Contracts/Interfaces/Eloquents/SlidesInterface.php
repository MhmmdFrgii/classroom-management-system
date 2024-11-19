<?php

namespace App\Contracts\Interfaces\Eloquents;

interface SlidesInterface
{
    public function find($id);
    public function getAll(int $perPage);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
