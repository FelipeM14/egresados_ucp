<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Usuario',
            'last_name'      => 'Prueba',
            'document_type'      => 'C.C',
            'document_number'      => '10098982929',
            'email'     => 'angelica1.ramirez@ucp.edu.co',
            'password'     => bcrypt('123456')
        ]);

        User::create([
            'name'      => 'Motita',
            'last_name'      => 'González',
            'document_type'      => 'C.C',
            'document_number'      => '23948348',
            'email'     => 'morita.gonzalez@ucp.edu.co',
            'password'     => bcrypt('123456')
        ]);

        //factory(User::class, 7)->create();
    }
}
