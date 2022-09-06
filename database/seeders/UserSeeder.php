<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Biodata;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'nama' => 'Administrator',
            'role' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('121212'),
        ]);
        Biodata::create([
            'user_id' => $user->id,
        ]);
    }
}