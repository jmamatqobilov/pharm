<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


     private $permissions = [
        'edit articles',
        'delete articles',
        'publish articles',
        'unpublish articles'
     ];
    public function run(): void
    {
        

        // create permissions

        foreach($this->permissions as $permission){
            Permission::create(['name' => $permission]);
        }


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'employe']);
        $role1->givePermissionTo('edit articles');
        $role1->givePermissionTo('delete articles');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('publish articles');
        $role2->givePermissionTo('unpublish articles');

        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::create([
            'name' => 'Example User',
            'email' => 'test@example.com',
            'password'=>'secret'
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
            'password'=>'secret'
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::create([
            'name' => 'abd',
            'email' => 'superadmin@example.com',
            'password'=>'secret'
        ]);
        $user->assignRole($role3);
    }
}
