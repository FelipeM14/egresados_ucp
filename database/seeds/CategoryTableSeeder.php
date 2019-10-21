<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Column;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Datos básicos',
            'color' => '#000000',
            'color_text' => '#FFFFFF',
            'order' => 1,
        ]);

        Category::create([
            'name' => 'Actualización datos',
            'color' => '#045FB4',
            'color_text' => '#FFFFFF',
            'order' => 2,
        ]);

        Column::create([
            'title' => 'Nombre y apellidos',
            'name' => 'nombre_y_apellidos',
            'order' => 1,
            'category_id' => 1
        ]);

        Column::create([
            'title' => 'Código',
            'name' => 'codigo',
            'order' => 2,
            'category_id' => 1
        ]);

        Column::create([
            'title' => 'Fecha graduación',
            'name' => 'fecha_graduacion',
            'order' => 3,
            'category_id' => 1
        ]);

        Column::create([
            'title' => 'Teléfono',
            'name' => 'telefono3',
            'order' => 1,
            'category_id' => 2
        ]);

        Column::create([
            'title' => 'Correo electrónico',
            'name' => 'correo_electronico3',
            'order' => 2,
            'category_id' => 2
        ]);

        Column::create([
            'title' => 'En que ocupa la mayor parte del tiempo?',
            'name' => 'ocupacion3',
            'order' => 3,
            'category_id' => 2
        ]);

        Column::create([
            'title' => 'Empresa en la que labora',
            'name' => 'labora3',
            'order' => 4,
            'category_id' => 2
        ]);

        Column::create([
            'title' => 'Cargo que desempeña',
            'name' => 'cargo3',
            'order' => 5,
            'category_id' => 2
        ]);
    }
}
