<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $owner = Role::create(['name' => 'owner']);
        $admin = Role::create(['name' => 'admin']);
        $manager = Role::create(['name' => 'manager']);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-product',
            'edit-product',
            'delete-product'
        ]);

        $manager->givePermissionTo([
            'create-product',
            'edit-product',
            'delete-product'
        ]);
    }
}
