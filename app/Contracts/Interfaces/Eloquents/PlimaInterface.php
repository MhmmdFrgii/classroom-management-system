<?php

namespace App\Contracts\Interfaces\Eloquents;

interface PlimaInterface
{
    public function find($id);
    public function getAll();
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
