<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admine@example.com',
            'name' => 'AdminUsere',
            'password' => Hash::make('toor')
        ])->setRole(User::ADMIN_ROLE);

        User::createWithRole([
            'email' => 'first@example.com',
            'name' => 'first',
            'password' => Hash::make('first')
        ], User::FIRST_ROLE);
    }
}
