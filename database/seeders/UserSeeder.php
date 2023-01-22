<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => "Yaoparfait48",
            'email' => "test@simplon.com",
            'password' => '$2y$10$VvsdnNNTs8Dk32/dLF4YcesxWU4IEh.xVLN7WOzz0VjSZ8htFSIUO'
        ]);
    }
}
