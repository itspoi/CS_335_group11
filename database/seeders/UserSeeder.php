<?php

namespace Database\Seeders;

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
        $user = User::create([
        	'name' => 'Admin',
            'mobile_number' => '225647281388', 
            'email' => 'admin@gmail.com',
            'address' => 'Dar es Salaam',  
        	'password' => bcrypt('12345678')
        ]);
    }
}
