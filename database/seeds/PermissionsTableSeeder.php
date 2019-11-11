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

        Permission::create(['name' => 'Datos básicos ver']);
        Permission::create(['name' => 'Datos básicos editar']);

        Permission::create(['name' => 'Actualización datos ver']);
        Permission::create(['name' => 'Actualización datos editar']);

        Permission::create(['name' => 'Gestión matriculados ver']);
        Permission::create(['name' => 'Gestión matriculados editar']);

        Permission::create(['name' => 'Proyecto de investigación ver']);
        Permission::create(['name' => 'Proyecto de investigación editar']);

        Permission::create(['name' => 'Comunidades academicas ver']);
        Permission::create(['name' => 'Comunidades academicas editar']);

        Permission::create(['name' => 'Reconocimientos y disticiones laborales ver']);
        Permission::create(['name' => 'Reconocimientos y disticiones laborales editar']);

        Permission::create(['name' => 'Estudios posgraduales ver']);
        Permission::create(['name' => 'Estudios posgraduales editar']);

        Permission::create(['name' => 'Interes en continuar estudiando ver']);
        Permission::create(['name' => 'Interes en continuar estudiando editar']);

        Permission::create(['name' => 'Datos después de grado de la universidad ver']);
        Permission::create(['name' => 'Datos después de grado de la universidad editar']);

        Permission::create(['name' => 'Datos laborales ver']);
        Permission::create(['name' => 'Datos laborales editar']);

        Permission::create(['name' => 'Ocupación laboral ver']);
        Permission::create(['name' => 'Ocupación laboral editar']);

        Permission::create(['name' => 'Información contacto laboral ver']);
        Permission::create(['name' => 'Información contacto laboral editar']);

        Permission::create(['name' => 'Perfil laboral con respecto al perfil profesional ver']);
        Permission::create(['name' => 'Perfil laboral con respecto al perfil profesional editar']);

        Permission::create(['name' => 'Busqueda de empleo ver']);
        Permission::create(['name' => 'Busqueda de empleo editar']);

        Permission::create(['name' => 'Información de contacto familiar o personal ver']);
        Permission::create(['name' => 'Información de contacto familiar o personal editar']);

        Permission::create(['name' => 'Información de contacto de otro graduado ver']);
        Permission::create(['name' => 'Información de contacto de otro graduado editar']);

        Permission::create(['name' => 'Requistos de grado ver']);
        Permission::create(['name' => 'Requistos de grado editar']);

        Permission::create(['name' => 'Seguimiento M1-M5 ver']);
        Permission::create(['name' => 'Seguimiento M1-M5 editar']);

        Permission::create(['name' => 'Asistencia actividades ver']);
        Permission::create(['name' => 'Asistencia actividades editar']);

        Permission::create(['name' => 'Jornadas de actualización académicas ver']);
        Permission::create(['name' => 'Jornadas de actualización académicas editar']);

        Permission::create(['name' => 'Asistencia a fiesta de graduados ver']);
        Permission::create(['name' => 'Asistencia a fiesta de graduados editar']);

        Permission::create(['name' => 'Asistencia a talleres de acompañamiento a la empleabilidad ver']);
        Permission::create(['name' => 'Asistencia a talleres de acompañamiento a la empleabilidad editar']);

        Permission::create(['name' => 'Datos de registro en bolsa de empleo ver']);
        Permission::create(['name' => 'Datos de registro en bolsa de empleo editar']);

        Permission::create(['name' => 'Información sobre los hijos ver']);
        Permission::create(['name' => 'Información sobre los hijos editar']);


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
