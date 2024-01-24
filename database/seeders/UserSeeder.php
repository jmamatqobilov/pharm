<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Javed Ur Rehman', 
            'email' => 'javed@email.com',
            'password' => Hash::make('javed1234')
        ]);
        

        // Creating Admin User
        User::create([
            'name' => 'Syed Ahsan Kamal', 
            'email' => 'ahsan@yandex.com',
            'password' => Hash::make('ahsan1234')
        ]);
        

        // Creating ManagerUser
        User::create([
            'name' => 'Abdul Muqeet', 
            'email' => 'muqeet@hamil.com',
            'password' => Hash::make('muqeet1234')
        ]);
        
    }
}
