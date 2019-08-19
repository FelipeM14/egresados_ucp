<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Crea los permisos en la BD
        Permission::create(['name' => 'data.index']);
        Permission::create(['name' => 'data.edit']);
        Permission::create(['name' => 'data.show']);
        Permission::create(['name' => 'data.create']);
        Permission::create(['name' => 'data.destroy']);

        //rol
        $admin = Role::create(['name' => 'Administrador']);

        $admin->givePermissionTo([
            'data.index',
            'data.edit',
            'data.show',
            'data.create',
            'data.destroy'
        ]);

        //Guest
        $guest = Role::create(['name' => 'Guest']);

        $guest->givePermissionTo([
            'data.index',
            'data.show'
        ]);

        //User Administrador
        $user = User::find(1); //
        $user->assignRole('Administrador');
    }
}
