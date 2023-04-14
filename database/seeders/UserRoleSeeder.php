<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$YZ70nxzGmWi.MSo1PlZi3uEDQcbzHAo99/aLLED85W9gG4Icb9Wzy', // password
            'remember_token' => Str::random(10),
        ];
        DB::beginTransaction();
        try {
            $admin = User::create(array_merge([
                'name' => 'daffa',
                'email' => 'admin@gmail.com',
            ],$default_user_value));

            $staff = User::create(array_merge([
                'name' => 'dapsur',
                'email' => 'staf@gmail.com',
            ],$default_user_value));

            $manager = User::create(array_merge([
                'name' => 'dapp',
                'email' => 'manager@gmail.com',
            ],$default_user_value));

            $dirut = User::create(array_merge([
                'name' => 'daaaaap',
                'email' => 'dirut@gmail.com',
            ],$default_user_value));

            $role_admin = Role::create(['name' => 'admin']);
            $role_staff = Role::create(['name' => 'staff']);
            $role_manager = Role::create(['name' => 'manager']);
            $role_dirut = Role::create(['name' => 'dirut']);
            
            $permission = Permission::create(['name' => 'read role']);
            $permission = Permission::create(['name' => 'show role']);
            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'edit role']);
            $permission = Permission::create(['name' => 'delete role']);

            $role_admin->givePermissionTo('read role');
            $role_admin->givePermissionTo('show role');
            $role_admin->givePermissionTo('create role');
            $role_admin->givePermissionTo('update role');
            $role_admin->givePermissionTo('edit role');
            $role_admin->givePermissionTo('delete role');

            $admin->assignRole('admin');
            $staff->assignRole('staff');
            $manager->assignRole('manager');
            $dirut->assignRole('dirut');
            
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
        }
    }
}
