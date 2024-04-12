<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    private $permissions = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
        'product-list',
        'product-create',
        'product-edit',
        'product-delete'
    ];

    public function run(): void
    {
        // User::factory(10)->create();

         foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create admin User and assign the role to him.
            $user = User::create([
                'name' => 'sourabh kahar',
                'email' => 'sourabhkahar8140@gmail.com',
                'password' => Hash::make('Admin@123')
            ]);

            $role = Role::create(['name' => 'Admin']);

            $permissions = Permission::pluck('id', 'id')->all();

            $role->syncPermissions($permissions);

            $user->assignRole([$role->id]);
    }
}
