<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Coordinador']);
        $role3 = Role::create(['name' => 'Colaborador']);

        Permission::create(['name' => 'admin.home'])->syncRoles($role1);
        Permission::create(['name' => 'coor.home'])->syncRoles($role1, $role2);

        Permission::create(['name' => 'admin.users'])->syncRoles($role1);
        Permission::create(['name' => 'admin.users.create'])->syncRoles($role1);
    }
}
