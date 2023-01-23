<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            
            'name' => 'mehedi',
            'email' => 'admin@gmail.com',
            'contact' => "0169413123",
            'password' => bcrypt('123456'),
            'address' => 'Gazipur',
            'role' => "Admin",
        ]);
    }
}
