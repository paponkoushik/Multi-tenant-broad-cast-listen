<?php

namespace Database\Seeders\tenant;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::query()->create([
            'name' => 'Test',
            'email' => 'test@email.com',
            'password' => Hash::make('123456')
        ]);

    }
}
