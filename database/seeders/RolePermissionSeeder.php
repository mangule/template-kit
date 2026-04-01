<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $permission = [
            "manage.users",
            "manage.roles",
            "roles.view",
            "roles.create",
            "roles.edit",
            "roles.delete",
            "permissions.view",
            "permissions.create",
            "permissions.edit",
            "permissions.delete",
            "posts.view",
            "posts.create",
            "posts.edit",
            "posts.delete",
        ];

        foreach ($permission as $value) {
            Permission::create(['name' => $value]);
        }

        $superadmin = Role::create(['name' => 'superadmin']);
        $superadmin->givePermissionTo(Permission::all());

        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);

        // $superadmin->assignRole('superadmin');
        // $admin->assignRole('admin');
        // $user->assignRole('user');
    }
}
