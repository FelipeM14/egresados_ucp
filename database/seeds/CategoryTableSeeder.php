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
            'color' => '#FFFFFF',
            'color_text' => '#000000',
            'order' => 2,
        ]);

        Category::create([
            'name' => 'Gestión matriculados',
            'color' => '#045FB4',
            'color_text' => '#FFFFFF',
            'order' => 3,
        ]);

        Category::create([
            'name' => 'Proyecto de investigación',
            'color' => '#FF0000',
            'color_text' => '#FFFFFF',
            'order' => 4,
        ]);

        Category::create([
            'name' => 'Comunidades academicas',
            'color' => '#4B088A',
            'color_text' => '#FFFFFF',
            'order' => 5,
        ]);

        Category::create([
            'name' => 'Reconocimientos y disticiones laborales',
            'color' => '#B45F04',
            'color_text' => '#FFFFFF',
            'order' => 6,
        ]);

        Category::create([
            'name' => 'Estudios posgraduales',
            'color' => '#3ADF00',
            'color_text' => '#FFFFFF',
            'order' => 7,
        ]);

        Category::create([
            'name' => 'Interes en continuar estudiando',
            'color' => '#61380B',
            'color_text' => '#FFFFFF',
            'order' => 8,
        ]);

        Category::create([
            'name' => 'Datos después de grado de la universidad',
            'color' => '#08088A',
            'color_text' => '#FFFFFF',
            'order' => 9,
        ]);

        Category::create([
            'name' => 'Datos laborales',
            'color' => '#04B404',
            'color_text' => '#FFFFFF',
            'order' => 10,
        ]);

        Category::create([
            'name' => 'Ocupación laboral',
            'color' => '#FF00FF',
            'color_text' => '#FFFFFF',
            'order' => 11,
        ]);

        Column::create([
            'title' => 'Nombre y apellidos',
            'name' => 'nombre_y_apellidos',
            'order' => 1,
            'size' => 150,
            'category_id' => 1
        ]);

        Column::create([
            'title' => 'Código',
            'name' => 'codigo',
            'order' => 2,
            'size' => 150,
            'category_id' => 1
        ]);

        Column::create([
            'title' => 'Fecha graduación',
            'name' => 'fecha_graduacion',
            'order' => 3,
            'size' => 150,
            'category_id' => 1
        ]);

        Column::create([
            'title' => 'Programa',
            'name' => 'programa',
            'order' => 4,
            'size' => 150,
            'category_id' => 1
        ]);

        Column::create([
            'title' => 'Promoción No.',
            'name' => 'numero_promocion',
            'order' => 5,
            'size' => 150,
            'category_id' => 1
        ]);

        Column::create([
            'title' => 'Teléfono',
            'name' => 'telefono4',
            'order' => 1,
            'size' => 150,
            'category_id' => 2
        ]);

        Column::create([
            'title' => 'Correo electrónico',
            'name' => 'correo_electronico3',
            'order' => 2,
            'size' => 150,
            'category_id' => 2
        ]);

        Column::create([
            'title' => 'En que ocupa la mayor parte del tiempo?',
            'name' => 'ocupacion3',
            'order' => 3,
            'size' => 150,
            'category_id' => 2
        ]);

        Column::create([
            'title' => 'Empresa en la que labora',
            'name' => 'labora3',
            'order' => 4,
            'size' => 150,
            'category_id' => 2
        ]);

        Column::create([
            'title' => 'Cargo que desempeña',
            'name' => 'cargo3',
            'order' => 5,
            'size' => 150,
            'category_id' => 2
        ]);

        Column::create([
            'title' => 'Cantidad de títulos obtenidos en la universidad católica',
            'name' => 'cantidad_de_titulos_obtenidos_en_la_universidad_catolica',
            'order' => 1,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Actualizada SI - NO',
            'name' => 'actualizada',
            'order' => 2,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Direcciones redes sociales - enviar mas información SI - NO',
            'name' => 'direcciones_redes_sociales_enviar_mas_información',
            'order' => 3,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Observación gestión matriculados',
            'name' => 'observación gestión matriculados',
            'order' => 4,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Celular 1',
            'name' => 'celular1',
            'order' => 5,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Celular 2',
            'name' => 'celular2',
            'order' => 6,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Celular 3',
            'name' => 'celular3',
            'order' => 7,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Teléfono fijo 1',
            'name' => 'telefono_fijo1',
            'order' => 8,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Teléfono fijo 2',
            'name' => 'telefono_fijo2',
            'order' => 9,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Correo electrónico 1',
            'name' => 'correo_electronico1',
            'order' => 10,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Correo electrónico 2',
            'name' => 'correo_electronico2',
            'order' => 11,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Correo electrónico 3',
            'name' => 'correo_electronico3',
            'order' => 12,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Dirección vivienda',
            'name' => 'direccion_vivienda',
            'order' => 13,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Ciudad de residencia',
            'name' => 'cidudad_de_residencia',
            'order' => 14,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Departamento de residencia',
            'name' => 'departamento_de_residencia',
            'order' => 15,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'País de residencia',
            'name' => 'pais_de_residencia',
            'order' => 16,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => '¿Ha Realizado. Participado o está realizadó proyectos de investigación? (DIFERENTE AL DEL PREGRADO)',
            'name' => 'participacion_proyectos_investigacion',
            'order' => 1,
            'size' => 150,
            'category_id' => 4
        ]);

        Column::create([
            'title' => 'SI. Indique el nombre del proyecto de investigación',
            'name' => 'participacion_proyectos_investigacion2',
            'order' => 2,
            'size' => 150,
            'category_id' => 4
        ]);

        Column::create([
            'title' => 'Usted pertenece a comunidades académicas, asociaciones científicas, profesionales, tecnologícas y/o redes de investigación',
            'name' => 'pertenece_red_investigacion2',
            'order' => 1,
            'size' => 150,
            'category_id' => 5
        ]);

        Column::create([
            'title' => 'SI. Indique el nombre de la red a la que pertenece',
            'name' => 'nombre_red_investigacion',
            'order' => 2,
            'size' => 150,
            'category_id' => 5
        ]);

        Column::create([
            'title' => 'El ámbito de esta red es regional, NACIONAL o INTERNACIONAL',
            'name' => 'nombre_red_investigacion2',
            'order' => 3,
            'size' => 150,
            'category_id' => 5
        ]);

        Column::create([
            'title' => 'Ha recibido algún reconocimiento, distinción por su desempeño laboral, estudiantil, deportivo, cultural u otros',
            'name' => 'reconicimiento_laboral',
            'order' => 1,
            'size' => 150,
            'category_id' => 6
        ]);

        Column::create([
            'title' => ' Indique el nombre del reconocimeinto o distinción y quien se lo otorgo',
            'name' => 'nombre_econicimiento_laboral',
            'order' => 2,
            'size' => 150,
            'category_id' => 6
        ]);

        Column::create([
            'title' => 'Usted pertence o ha pertenecido a organizaciones sin ánimo de lucro o realiza o ha realizado voluntariados. SI - NO',
            'name' => 'organizacion_sin_animo_lucro',
            'order' => 3,
            'size' => 150,
            'category_id' => 6
        ]);

        Column::create([
            'title' => 'Nombre de la organización sin ánimo de lucro, voluntariado o fundación en donde ha prestado sus servicios',
            'name' => 'nombre_organizacion_sin_animo_lucro',
            'order' => 4,
            'size' => 150,
            'category_id' => 6
        ]);

        Column::create([
            'title' => 'Seleccione todos sus grados de formación actual',
            'name' => 'grados_formacion',
            'order' => 1,
            'size' => 150,
            'category_id' => 7
        ]);

        Column::create([
            'title' => 'Si realizo estudios posgraduales indique nombre del estudio posgradual que realizó ¿cual?',
            'name' => 'nombre_estudios_posgraduales',
            'order' => 2,
            'size' => 150,
            'category_id' => 7
        ]);

        Column::create([
            'title' => '¿En qué ciudad - país realizo sus estudios posgraduales',
            'name' => 'lugar_estudios_posgraduales',
            'order' => 3,
            'size' => 150,
            'category_id' => 7
        ]);

        Column::create([
            'title' => 'Nombre de la universidad realizo sus estudios posgraduales',
            'name' => 'universidad_estudios_posgraduales',
            'order' => 4,
            'size' => 150,
            'category_id' => 7
        ]);

        Column::create([
            'title' => '¿En la actualidad ésta interesado en cursar estudios posgraduales?',
            'name' => 'interes_estudios',
            'order' => 1,
            'size' => 150,
            'category_id' => 8
        ]);

        Column::create([
            'title' => 'Si la respuesta fue: definitivamente si o lo esta pensando, índique que le gustaría estudiar',
            'name' => 'que_le _gustaria_estudiar',
            'order' => 2,
            'size' => 150,
            'category_id' => 8
        ]);

        Column::create([
            'title' => '¿Qué nivel de posgrado conidera le permitirá mejorar su desempeño laboral?',
            'name' => 'nivel_posgrado',
            'order' => 3,
            'size' => 150,
            'category_id' => 8
        ]);

        Column::create([
            'title' => '¿Cuál de las siguientes jornadas se ajustaría más a su disponibilidad de tiempo?',
            'name' => 'Jornada_disponibilidad',
            'order' => 4,
            'size' => 150,
            'category_id' => 8
        ]);

        Column::create([
            'title' => '¿En qué universidad ha pensado realizar sus estudios?',
            'name' => 'en_que_universidad_ha_pensado_realizar_sus_estudios',
            'order' => 5,
            'size' => 150,
            'category_id' => 8
        ]);

        Column::create([
            'title' => '¿Cuál fue su lugar de residencia en su primer empleo después de graduarse de la universidad?             
            CIUDAD - DEPARTAMENTO - PAÍS',
            'name' => 'lugar_residencia_despues_de_graduarse',
            'order' => 1,
            'size' => 150,
            'category_id' => 9
        ]);

        Column::create([
            'title' => '¿Cuál fue su primer cargo después de graduarse de la universidad?',
            'name' => 'primer_cargo_despues_de_graduarse_de_la_universidad',
            'order' => 2,
            'size' => 150,
            'category_id' => 9
        ]);

        Column::create([
            'title' => '¿Cuál fue se primer cargo y salario después de graduarse de la universidad?',
            'name' => 'primer_cargo_salario_despues_de_graduarse_de_la_universidad',
            'order' => 3,
            'size' => 150,
            'category_id' => 9
        ]);

        Column::create([
            'title' => '¿Ha estado algún tiempo en el exterior después de graduarse de la universidad?
                        Si, por estudio – Si, Por trabajo - otro',
            'name' => 'ha_estado_en_el_exterior_al_graduarse',
            'order' => 4,
            'size' => 150,
            'category_id' => 9
        ]);

        Column::create([
            'title' => '¿En qué país estuvo después de su graduación?',
            'name' => 'en_que_pais_estuvo_despues_de_su_graduacion',
            'order' => 5,
            'size' => 150,
            'category_id' => 9
        ]);

        Column::create([
            'title' => '¿Cuánto tiempo estuvo fuera del país?',
            'name' => 'cuanto_tiempo_estuvo_fuera_del_pais',
            'order' => 6,
            'size' => 150,
            'category_id' => 9
        ]);

        Column::create([
            'title' => '¿En la actualidad en qué actividad ocupa la mayor parte de su tiempo?',
            'name' => 'en_la_actualidad_en_que_actividad_ocupa_la_mayor_parte_de_su_tiempo',
            'order' => 1,
            'size' => 150,
            'category_id' => 10
        ]);

        Column::create([
            'title' => '¿Nombre de la empresa dónde se encuentra laborando?',
            'name' => 'nombre_de_la_empresa_donde_se_encuentra_laborando',
            'order' => 2,
            'size' => 150,
            'category_id' => 10
        ]);

        Column::create([
            'title' => '¿Cuál es su cargo actual? (ESCRIBA EL CARGO TEXTUALMENTE COMO LO INDIQUE EL GRADUADO)',
            'name' => 'cargo_actual',
            'order' => 3,
            'size' => 150,
            'category_id' => 10
        ]);

        Column::create([
            'title' => 'Nivel del cargo ocupacional',
            'name' => 'nivel_del_cargo_ocupacional',
            'order' => 1,
            'size' => 150,
            'category_id' => 11
        ]);

        Column::create([
            'title' => '¿Qué cargo ocupacional, ocupa actualmente?',
            'name' => 'que_cargo_ocupacional_ocupa_actualmente',
            'order' => 2,
            'size' => 150,
            'category_id' => 11
        ]);

        Column::create([
            'title' => '¿En qué área del ejercicio profesional se desempeña actualmente?',
            'name' => 'en_que_area_del_ejercicio_profesional_se_desempena_actualmente',
            'order' => 3,
            'size' => 150,
            'category_id' => 11
        ]);

    }
}
