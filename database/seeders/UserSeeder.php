<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Araceli H';
        $user->email = 'aracelih@gmail.com'; 
        $user->password =  bcrypt('1234');
        $user->save();

        User::factory(10)->create();
    }
}
