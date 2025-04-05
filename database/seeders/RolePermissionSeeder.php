<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Admin;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $superAdminRole = Role::firstOrCreate([
            'name' => 'superadmin', 
            'guard_name' => 'admin'
        ]);

        $adminRole = Role::firstOrCreate([
            'name' => 'admin', 
            'guard_name' => 'admin'
        ]);
        
        // Define permissions
        $permissions = [
            'admin_users.view',
            'admin_users.create',
            'admin_users.edit',            
            'admin_users.delete',
            'roles.view',
            'roles.create',
            'roles.edit',
            // 'roles.delete',
            'permissions.view',
            'permissions.create',
            'permissions.edit',
            // 'permissions.delete'
        ];

        // Create permissions and assign them to Super Admin only
        foreach ($permissions as $permission) {
            $perm = Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'admin'
            ]);
            $superAdminRole->givePermissionTo($perm);
        }

        // Create a test Super Admin user
        $superAdmin = Admin::firstOrCreate(
            [
                'email' => 'superadmin@gmail.com',
            ],[
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        // Assign Super Admin role
        $superAdmin->assignRole('superadmin');

        // Create a test Admin user
        $admin = Admin::firstOrCreate(
            [
                'email' => 'admin@gmail.com',
            ],[
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        // Assign Admin role (without permissions)
        $admin->assignRole('admin');

        $this->command->info('Super Admin and Admin roles created with permissions.');

    }
}
