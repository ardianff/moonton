<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create(
            [
                'name' => 'Ardian',
                'email' => 'customranked@gmail.com',
                'password' => Hash::make('ardian123@')
            ]
        );
        $admin->assignRole('admin');
    }
}
