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

        factory(User::class, 7)->create();
    }
}
