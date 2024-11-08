<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin'
            ],
            [
                'name' => 'super',
                'email' => 'super@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'super admin'
            ],
        ];

        foreach ($users as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
            ]);

            // Assign role if Spatie Laravel Permission is used
            if (isset($userData['role'])) {
                $user->assignRole($userData['role']);
            }
        }
    }
}
