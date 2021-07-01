<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder,
    App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        	'name' => 'kelompok2',
        	'email' => 'kelompok2@gmail.com',
        	'password' => bcrypt(1234),
        ]);
    }
}
