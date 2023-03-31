<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => 'Junior Medina',
            "email" => 'jsmedinah@gmail.com',
            'password' => bcrypt('12345678')
       ])->assignRole('Admin');
       User::factory(9)->create();


       User::create([
           "name" => 'Stiven Hernandez',
           "email" => 'shernandez@gmail.com',
           'password' => bcrypt('12345678')
      ])->assignRole('Blogger');
      User::factory(9)->create();
    }
}
