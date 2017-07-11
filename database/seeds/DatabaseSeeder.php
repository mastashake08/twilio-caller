<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \App\User::create([
          'name' => 'mastashake08',
          'email' => 'jyrone.parker@gmail.com',
          'password' => bcrypt('n1nt3nd0'),
          'phone_number' => '8594024863'
        ]);
    }
}
