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
        Permission::create(['name' => 'Ver datos']);
        Permission::create(['name' => 'Editar datos']);
        Permission::create(['name' => 'Ingresar datos']);
        Permission::create(['name' => 'Eliminar datos']);
        Permission::create(['name' => 'Ver datos básicos']);
        Permission::create(['name' => 'Editar datos básicos']);
        Permission::create(['name' => 'Ingresar datos básicos']);
        Permission::create(['name' => 'Eliminar datos básicos']);

        //rol
        $admin = Role::create(['name' => 'Administrador']);

        $admin->givePermissionTo(Permission::all());

        //Guest
        $guest = Role::create(['name' => 'Consultor']);

        $guest->givePermissionTo([
            'Ver datos',
        ]);

        //User Administrador
        $user = User::find(1); //
        $user->assignRole('Administrador');
    }
}
