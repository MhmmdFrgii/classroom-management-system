<?php

namespace App\Services;

use App\Contracts\Interfaces\Eloquents\UserInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService implements UserInterface
{
    public function getAll()
    {
        return User::all();
    }

    public function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        $user->assignRole($data['role']);
    }

    public function update(User $user, array $data)
    {
        if (Auth::id() == $user->id) {
            return ['error' => 'Tidak dapat mengedit diri sendiri'];
        }

        $user->update([
            'name' => $data['name'],
            'email' => $data['email']
        ]);

        if ($user->getRoleNames()->first() !== $data['role']) {
            $user->syncRoles([$data['role']]);
        }

        return $user;
    }

    public function delete(User $user)
    {
        return $user->delete();
    }
}