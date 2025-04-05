<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'blogs.view',
            'blogs.edit',
            'blogs.create',
            'blogs.delete',
            'contact_us.view',
            'contact_us.delete',
        ];
    
        foreach ($permissions as $permission) {
            Permission::updateOrCreate(
                ['name' => $permission, 'guard_name' => 'admin'],
                ['name' => $permission]
            );
        }
        
    }
}
