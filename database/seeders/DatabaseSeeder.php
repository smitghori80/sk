<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // create permissions
        Permission::create(['guard_name' => 'admin', 'name' => 'role-list']);
        Permission::create(['guard_name' => 'admin', 'name' => 'role-create']);
        Permission::create(['guard_name' => 'admin', 'name' => 'role-edit']);
        Permission::create(['guard_name' => 'admin', 'name' => 'role-delete']);
        Permission::create(['guard_name' => 'admin', 'name' => 'admin-list']);
        Permission::create(['guard_name' => 'admin', 'name' => 'admin-create']);
        Permission::create(['guard_name' => 'admin', 'name' => 'admin-edit']);
        Permission::create(['guard_name' => 'admin', 'name' => 'admin-delete']);

        // create roles and assign existing permissions
        $role1 = Role::create(['guard_name' => 'admin', 'name' => 'super-admin']);
        $role1->givePermissionTo('admin-list');
        $role1->givePermissionTo('admin-create');
        $role1->givePermissionTo('admin-edit');
        $role1->givePermissionTo('admin-delete');
        $role1->givePermissionTo('role-list');
        $role1->givePermissionTo('role-create');
        $role1->givePermissionTo('role-edit');
        $role1->givePermissionTo('role-delete');

        $role2 = Role::create(['guard_name' => 'admin', 'name' => 'admin']);
        $role2->givePermissionTo('admin-list');
        $role2->givePermissionTo('admin-create');



        // create demo users
        $user = Admin::create([
            'email' => 'test@example.com',
            'password' => '$2y$10$hnJBx0bJV/LsS5Pif25T5OZb958WulY/aFRSb.VZt5I8PdQySMp0C'
        ]);
        $user->assignRole($role1);

        $user = Admin::create([
            'email' => 'admin@example.com',
            'password' => '$2y$10$hnJBx0bJV/LsS5Pif25T5OZb958WulY/aFRSb.VZt5I8PdQySMp0C'
        ]);
        $user->assignRole($role2);
    }
}
