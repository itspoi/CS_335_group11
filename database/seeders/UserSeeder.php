<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
        	'name' => 'Administrator',
            'mobile_number' => '225647281388', 
            'email' => 'admin@trs.com',
            'address' => 'Dar es Salaam',  
        	'password' => bcrypt('12345678')
        ]);

        $admin->assignRole(['Admin']);

        $user = User::create([
        	'name' => 'User',
            'mobile_number' => '225783673091', 
            'email' => 'user@trs.com',
            'address' => 'Dodoma',  
        	'password' => bcrypt('12345678')
        ]);

        $user->assignRole(['User']);

    }
}
