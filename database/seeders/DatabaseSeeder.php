<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\admin\Apellido;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
            'email' => 'admin@gmail.com',
        ]);
        Apellido::factory()->create([
            'user_id' => $user->id,
            'lastname' => 'HH'
        ]);
        Apellido::factory(100)->create();
    }
}