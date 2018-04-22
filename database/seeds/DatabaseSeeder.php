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
        DB::table('users_types')->insert([
           [ 'Type' => 'Admin'],
           [ 'Type' => 'kasher'],
           [ 'Type' => 'Waiter'],
           [ 'Type' => 'Waiter'],
        ]);
        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'admin@test.com',
            'password' =>  bcrypt('123123'),
            'type_id' => 1,
            'isAdmin' => true,
            'active' => true,
        ]);
    }
}
