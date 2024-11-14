<?php

namespace App\Contracts\Interfaces\Eloquents;

use App\Models\User;

interface UserInterface
{
    public function getAll();
    public function create(array $data);
    public function update(User $user, array $data);
    public function delete(User $user);
}
