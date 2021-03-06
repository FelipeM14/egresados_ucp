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

    //creacio de categorias predeterminadas y asignacion de columnas a dichas categorias

    public function run()
    {
        Category::create([
            'name' => 'Datos básicos',
            'color' => '#000000',
            'color_text' => '#FFFFFF',
            'order' => 1,
            'protected' => 1,
        ]);

        Category::create([
            'name' => 'Actualización datos',
            'color' => '#FFFFFF',
            'color_text' => '#000000',
            'order' => 2,
            'protected' => 1,
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

        Category::create([
            'name' => 'Información contacto laboral',
            'color' => '#5FB404',
            'color_text' => '#FFFFFF',
            'order' => 12,
        ]);

        Category::create([
            'name' => 'Perfil laboral con respecto al perfil profesional',
            'color' => '#2E9AFE',
            'color_text' => '#FFFFFF',
            'order' => 13,
        ]);

        Category::create([
            'name' => 'Busqueda de empleo',
            'color' => '#8A0808',
            'color_text' => '#FFFFFF',
            'order' => 14,
        ]);

        Category::create([
            'name' => 'Información de contacto familiar o personal',
            'color' => '#0B3B0B',
            'color_text' => '#FFFFFF',
            'order' => 15,
        ]);

        Category::create([
            'name' => 'Información de contacto de otro graduado',
            'color' => '#045FB4',
            'color_text' => '#FFFFFF',
            'order' => 16,
        ]);

        Category::create([
            'name' => 'Requistos de grado',
            'color' => '#FF0040',
            'color_text' => '#FFFFFF',
            'order' => 17,
        ]);

        Category::create([
            'name' => 'Seguimiento M1-M5',
            'color' => '#AC58FA',
            'color_text' => '#FFFFFF',
            'order' => 18,
        ]);

        Category::create([
            'name' => 'Asistencia actividades',
            'color' => '#2EFE64',
            'color_text' => '#FFFFFF',
            'order' => 19,
        ]);

        Category::create([
            'name' => 'Jornadas de actualización académicas',
            'color' => '#FE9A2E',
            'color_text' => '#FFFFFF',
            'order' => 20,
        ]);

        Category::create([
            'name' => 'Asistencia a fiesta de graduados',
            'color' => '#2EFEF7',
            'color_text' => '#FFFFFF',
            'order' => 21,
        ]);

        Category::create([
            'name' => 'Asistencia a talleres de acompañamiento a la empleabilidad',
            'color' => '#FA58F4',
            'color_text' => '#FFFFFF',
            'order' => 22,
        ]);

        Category::create([
            'name' => 'Datos de registro en bolsa de empleo',
            'color' => '#DF0101',
            'color_text' => '#FFFFFF',
            'order' => 23,
        ]);

        Category::create([
            'name' => 'Información sobre los hijos',
            'color' => '#04B404',
            'color_text' => '#FFFFFF',
            'order' => 24,
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
            'size' => 20,
            'category_id' => 1
        ]);

        Column::create([
            'title' => 'Fecha graduación',
            'name' => 'fecha_graduacion',
            'order' => 3,
            'size' => 20,
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
            'size' => 20,
            'category_id' => 1
        ]);

        Column::create([
            'title' => 'Teléfono',
            'name' => 'telefono4',
            'order' => 1,
            'size' => 20,
            'category_id' => 2
        ]);

        Column::create([
            'title' => 'Correo electrónico',
            'name' => 'correo_actualizacion',
            'order' => 2,
            'size' => 100,
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
            'size' => 100,
            'category_id' => 2
        ]);

        Column::create([
            'title' => 'Cantidad de títulos obtenidos en la universidad católica',
            'name' => 'titulos_obtenidos_ucp',
            'order' => 1,
            'size' => 20,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Actualizada SI - NO',
            'name' => 'actualizada',
            'order' => 2,
            'size' => 10,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Direcciones redes sociales - enviar mas información SI - NO',
            'name' => 'enviar_informacion_redes_sociales',
            'order' => 3,
            'size' => 100,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Observación gestión matriculados',
            'name' => 'gestion_matriculados',
            'order' => 4,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Celular 1',
            'name' => 'celular1',
            'order' => 5,
            'size' => 20,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Celular 2',
            'name' => 'celular2',
            'order' => 6,
            'size' => 20,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Celular 3',
            'name' => 'celular3',
            'order' => 7,
            'size' => 20,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Teléfono fijo 1',
            'name' => 'telefono_fijo1',
            'order' => 8,
            'size' => 20,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Teléfono fijo 2',
            'name' => 'telefono_fijo2',
            'order' => 9,
            'size' => 20,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Correo electrónico 1',
            'name' => 'correo_electronico1',
            'order' => 10,
            'size' => 100,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Correo electrónico 2',
            'name' => 'correo_electronico2',
            'order' => 11,
            'size' => 100,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Correo electrónico 3',
            'name' => 'correo_electronico3',
            'order' => 12,
            'size' => 100,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Dirección vivienda',
            'name' => 'direccion_vivienda',
            'order' => 13,
            'size' => 100,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Ciudad de residencia',
            'name' => 'cidudad_de_residencia',
            'order' => 14,
            'size' => 100,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Departamento de residencia',
            'name' => 'departamento_de_residencia',
            'order' => 15,
            'size' => 100,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'País de residencia',
            'name' => 'pais_de_residencia',
            'order' => 16,
            'size' => 100,
            'category_id' => 3
        ]);

        Column::create([
            'title' => '¿Ha Realizado. Participado o está realizadó proyectos de investigación? (DIFERENTE AL DEL PREGRADO)',
            'name' => 'participacion_proyectos_investigacion',
            'order' => 1,
            'size' => 10,
            'category_id' => 4
        ]);

        Column::create([
            'title' => 'SI. Indique el nombre del proyecto de investigación',
            'name' => 'nombre_proyecto_investigacion',
            'order' => 2,
            'size' => 250,
            'category_id' => 4
        ]);

        Column::create([
            'title' => 'Usted pertenece a comunidades académicas, asociaciones científicas, profesionales, tecnologícas y/o redes de investigación',
            'name' => 'pertenece_red_investigacion',
            'order' => 1,
            'size' => 10,
            'category_id' => 5
        ]);

        Column::create([
            'title' => 'SI. Indique el nombre de la red a la que pertenece',
            'name' => 'nombre_red_investigacion',
            'order' => 2,
            'size' => 200,
            'category_id' => 5
        ]);

        Column::create([
            'title' => 'El ámbito de esta red es REGIONAL, NACIONAL o INTERNACIONAL',
            'name' => 'ambito_red_investigacion',
            'order' => 3,
            'size' => 50,
            'category_id' => 5
        ]);

        Column::create([
            'title' => 'Ha recibido algún reconocimiento, distinción por su desempeño laboral, estudiantil, deportivo, cultural u otros',
            'name' => 'reconicimiento_laboral',
            'order' => 1,
            'size' => 10,
            'category_id' => 6
        ]);

        Column::create([
            'title' => ' Indique el nombre del reconocimeinto o distinción y quien se lo otorgo',
            'name' => 'nombre_econicimiento_laboral',
            'order' => 2,
            'size' => 200,
            'category_id' => 6
        ]);

        Column::create([
            'title' => 'Usted pertence o ha pertenecido a organizaciones sin ánimo de lucro o realiza o ha realizado voluntariados. SI - NO',
            'name' => 'pertenece_organizacion_sinanimolucro',
            'order' => 3,
            'size' => 10,
            'category_id' => 6
        ]);

        Column::create([
            'title' => 'Nombre de la organización sin ánimo de lucro, voluntariado o fundación en donde ha prestado sus servicios',
            'name' => 'nombre_organizacion_sinanimolucro',
            'order' => 4,
            'size' => 200,
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
            'size' => 200,
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
            'name' => 'interes_estudios_posgradual',
            'order' => 1,
            'size' => 50,
            'category_id' => 8
        ]);

        Column::create([
            'title' => 'Si la respuesta fue: definitivamente si o lo esta pensando, índique que le gustaría estudiar',
            'name' => 'que_le_gustaria_estudiar',
            'order' => 2,
            'size' => 150,
            'category_id' => 8
        ]);

        Column::create([
            'title' => '¿Qué nivel de posgrado conidera le permitirá mejorar su desempeño laboral?',
            'name' => 'nivel_posgrado',
            'order' => 3,
            'size' => 100,
            'category_id' => 8
        ]);

        Column::create([
            'title' => '¿Cuál de las siguientes jornadas se ajustaría más a su disponibilidad de tiempo?',
            'name' => 'jornada_disponibilidad',
            'order' => 4,
            'size' => 50,
            'category_id' => 8
        ]);

        Column::create([
            'title' => '¿En qué universidad ha pensado realizar sus estudios?',
            'name' => 'universidad_para_realizar_estudios',
            'order' => 5,
            'size' => 150,
            'category_id' => 8
        ]);

        Column::create([
            'title' => '¿Cuál fue su lugar de residencia en su primer empleo después de graduarse de la universidad?             
            CIUDAD - DEPARTAMENTO - PAÍS',
            'name' => 'lugar_residencia_al_graduarse',
            'order' => 1,
            'size' => 150,
            'category_id' => 9
        ]);

        Column::create([
            'title' => '¿Cuál fue su primer cargo después de graduarse de la universidad?',
            'name' => 'primer_cargo_al_graduarse_ucp',
            'order' => 2,
            'size' => 150,
            'category_id' => 9
        ]);

        Column::create([
            'title' => '¿Cuál fue se primer cargo y salario después de graduarse de la universidad?',
            'name' => 'primer_salario_al_graduarse_ucp',
            'order' => 3,
            'size' => 100,
            'category_id' => 9
        ]);

        Column::create([
            'title' => '¿Ha estado algún tiempo en el exterior después de graduarse de la universidad?
                        Si, por estudio – Si, Por trabajo - otro',
            'name' => 'visitas_al_exterior_al_graduarse',
            'order' => 4,
            'size' => 100,
            'category_id' => 9
        ]);

        Column::create([
            'title' => '¿En qué país estuvo después de su graduación?',
            'name' => 'pais_despues_de_graduarce',
            'order' => 5,
            'size' => 100,
            'category_id' => 9
        ]);

        Column::create([
            'title' => '¿Cuánto tiempo estuvo fuera del país?',
            'name' => 'tiempo_fuera_del_pais',
            'order' => 6,
            'size' => 50,
            'category_id' => 9
        ]);

        Column::create([
            'title' => '¿En la actualidad en qué actividad ocupa la mayor parte de su tiempo?',
            'name' => 'ocupacion_mayoria_del_tiempo',
            'order' => 1,
            'size' => 100,
            'category_id' => 10
        ]);

        Column::create([
            'title' => '¿Nombre de la empresa dónde se encuentra laborando?',
            'name' => 'empresa_donde_esta_laborando',
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
            'name' => 'nivel_cargo_ocupacional',
            'order' => 1,
            'size' => 100,
            'category_id' => 11
        ]);

        Column::create([
            'title' => '¿Qué cargo ocupacional, ocupa actualmente?',
            'name' => 'cargo_ocupacional_actualmente',
            'order' => 2,
            'size' => 100,
            'category_id' => 11
        ]);

        Column::create([
            'title' => '¿En qué área del ejercicio profesional se desempeña actualmente?',
            'name' => 'area_desempeno_profesional_actual',
            'order' => 3,
            'size' => 100,
            'category_id' => 11
        ]);

        Column::create([
            'title' => '¿El ámbito de la empresa es local, regional, nacional o internacional?',
            'name' => 'ambito_de_la_empresa',
            'order' => 1,
            'size' => 50,
            'category_id' => 12
        ]);

        Column::create([
            'title' => 'Teléfono laboral',
            'name' => 'telefono_laboral',
            'order' => 2,
            'size' => 20,
            'category_id' => 12
        ]);

        Column::create([
            'title' => 'Correo electrónico laboral',
            'name' => 'correo_labora',
            'order' => 3,
            'size' => 100,
            'category_id' => 12
        ]);

        Column::create([
            'title' => 'Dirección del trabajo',
            'name' => 'dirreccion_trabajo',
            'order' => 4,
            'size' => 150,
            'category_id' => 12
        ]);

        Column::create([
            'title' => 'Si se encuentra trabajando: en su trabajo usted es',
            'name' => 'en_su_trabajo_usted_es',
            'order' => 5,
            'size' => 150,
            'category_id' => 12
        ]);

        Column::create([
            'title' => 'La siguiente información se consulta sólo con fines académicos
                        ¿Cuál fue su ingreso laboral el mes pasado?',
            'name' => 'ingreso_laboral_mes_pasado',
            'order' => 6,
            'size' => 100,
            'category_id' => 12
        ]);

        Column::create([
            'title' => '¿Cuánto tiempo lleva en esta actividad o trabajo?',
            'name' => 'cuanto_tiempo_lleva_en_el_trabajo',
            'order' => 7,
            'size' => 50,
            'category_id' => 12
        ]);

        Column::create([
            'title' => '¿Qué nivel de formación considera es el más apropiado para la
                        actividad o trabajo que usted desempeña?',
            'name' => 'nivel_formacion_mas_apropiado',
            'order' => 1,
            'size' => 50,
            'category_id' => 13
        ]);

        Column::create([
            'title' => 'En éste trabajo, en qué medida utiliza los conocimientos, habilidades que
                        obtuvo del programa del cuál es graduado?',
            'name' => 'utiliza_los_conocimientos',
            'order' => 2,
            'size' => 50,
            'category_id' => 13
        ]);

        Column::create([
            'title' => '¿Cuál de los siguientes aspectos le genera a usted mayor satisfacción en su trabajo actual?',
            'name' => 'mayor_satisfaccion_laboral',
            'order' => 3,
            'size' => 200,
            'category_id' => 13
        ]);

        Column::create([
            'title' => '¿Cuál de los siguientes aspectos le genera a usted mayor insatisfacción en su trabajo actual?',
            'name' => 'mayor_insatisfaccion_laboral',
            'order' => 4,
            'size' => 200,
            'category_id' => 13
        ]);

        Column::create([
            'title' => '¿Qué tan relacionado está su perfil laboral con respecto al perfil profesional?',
            'name' => 'relacion_perfil_laboral_profesional',
            'order' => 5,
            'size' => 100,
            'category_id' => 13
        ]);

        Column::create([
            'title' => 'Si está buscando trabajo u otro trabajo / ¿cuántos meses ha estado buscando trabajo?',
            'name' => 'meses_buscando_trabajo',
            'order' => 1,
            'size' => 50,
            'category_id' => 14
        ]);

        Column::create([
            'title' => '¿Cuál considera la principal dificultad a la hora de conseguir el empleo que busca?',
            'name' => 'dificultad_conseguir_empleo',
            'order' => 2,
            'size' => 100,
            'category_id' => 14
        ]);

        Column::create([
            'title' => '¿Cuál es el perfil ocupacional que busca para emplearse?',
            'name' => 'perfil_que_busca_al_emplearse',
            'order' => 3,
            'size' => 100,
            'category_id' => 14
        ]);

        Column::create([
            'title' => '¿Cuál es su aspiración salarial?',
            'name' => 'aspiracion_salarial',
            'order' => 4,
            'size' => 50,
            'category_id' => 14
        ]);

        Column::create([
            'title' => 'Indíquenos por favor el nombre un contacto personal, laboral o familiar',
            'name' => 'nombre_contacto_personal',
            'order' => 1,
            'size' => 100,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Parentesco del contacto',
            'name' => 'parentesco_contacto',
            'order' => 2,
            'size' => 50,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Teléfono fijo del contacto',
            'name' => 'telefono_fijo_contacto',
            'order' => 3,
            'size' => 20,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Celular 1 del contacto',
            'name' => 'celular_contacto1',
            'order' => 4,
            'size' => 20,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Celular 2 del contacto',
            'name' => 'celular_contacto2',
            'order' => 5,
            'size' => 20,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Indíquenos por favor el nombre un segundo contacto personal, laboral o familiar',
            'name' => 'nombre_segundo_contacto',
            'order' => 6,
            'size' => 100,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Parentesco del segundo contacto',
            'name' => 'parentesco_segundo_contacto',
            'order' => 7,
            'size' => 50,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Teléfono fijo segundo contacto',
            'name' => 'telefono_segundo_contacto',
            'order' => 8,
            'size' => 20,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Celular 1 del segundo contacto',
            'name' => 'celular1_segundo_contacto',
            'order' => 9,
            'size' => 20,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Celular 2 del segundo contacto',
            'name' => 'celular2_segundo_contacto',
            'order' => 10,
            'size' => 20,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Tiene información de algún graduado ucp',
            'name' => 'informacion_graduado_ucp',
            'order' => 1,
            'size' => 10,
            'category_id' => 16
        ]);

        Column::create([
            'title' => 'Nombre graduado referido',
            'name' => 'nombre_graduado_referido',
            'order' => 2,
            'size' => 100,
            'category_id' => 16
        ]);

        Column::create([
            'title' => 'Programa del que se graduo',
            'name' => 'programa_del_que_se_graduo',
            'order' => 3,
            'size' => 100,
            'category_id' => 16
        ]);

        Column::create([
            'title' => 'Sabe dónde trabaja el graduado',
            'name' => 'donde_trabaja_el_graduado',
            'order' => 4,
            'size' => 100,
            'category_id' => 16
        ]);

        Column::create([
            'title' => 'Tiene algún No. telefónico de graduado referido',
            'name' => 'telefono_graduado_referido',
            'order' => 5,
            'size' => 20,
            'category_id' => 16
        ]);

        Column::create([
            'title' => 'Tiene la dirección de email de graduado referido',
            'name' => 'email_graduado_referido',
            'order' => 6,
            'size' => 100,
            'category_id' => 16
        ]);

        Column::create([
            'title' => 'Programa ¿me gradúo y ahora qué? fecha de asistencia',
            'name' => 'asistencia_graduo_y_ahora_que',
            'order' => 1,
            'size' => 100,
            'category_id' => 17
        ]);

        Column::create([
            'title' => 'Autoevaluación',
            'name' => 'autoevaluacion',
            'order' => 2,
            'size' => 100,
            'category_id' => 17
        ]);

        Column::create([
            'title' => 'Carta en custodia oficina 1AG - fecha de realización carta',
            'name' => 'realizacion_carta_en_custodia',
            'order' => 3,
            'size' => 100,
            'category_id' => 17
        ]);

        Column::create([
            'title' => 'Programa 1AG fecha de envió correspondencia',
            'name' => 'programa_1ag_envio_correspondencia',
            'order' => 4,
            'size' => 100,
            'category_id' => 17
        ]);

        Column::create([
            'title' => 'Seguimiento M1',
            'name' => 'seguimiento_m1',
            'order' => 1,
            'size' => 100,
            'category_id' => 18
        ]);

        Column::create([
            'title' => 'Seguimiento M5',
            'name' => 'seguimiento_m5',
            'order' => 2,
            'size' => 100,
            'category_id' => 18
        ]);

        Column::create([
            'title' => 'Sancocho universitario',
            'name' => 'sancocho_universitario',
            'order' => 1,
            'size' => 100,
            'category_id' => 19
        ]);

        Column::create([
            'title' => 'Fiesta de los niños',
            'name' => 'fiesta_de_los_ninos',
            'order' => 2,
            'size' => 100,
            'category_id' => 19
        ]);

        Column::create([
            'title' => 'Jornadas de actualización académicas. Si. Fecha - nombre de la jornada',
            'name' => 'jornadas_actualizacion_academicas',
            'order' => 1,
            'size' => 100,
            'category_id' => 20
        ]);

        Column::create([
            'title' => 'Asistencia a fiesta de graduados. Si - fecha',
            'name' => 'asistencia_fiesta_graduados',
            'order' => 1,
            'size' => 100,
            'category_id' => 21
        ]);

        Column::create([
            'title' => 'Fecha de registro al taller acompañamiento a la empleabilidad / emprendimiento',
            'name' => 'registro_taller_empleabilidad',
            'order' => 1,
            'size' => 100,
            'category_id' => 22
        ]);

        Column::create([
            'title' => 'Fecha de invitación al taller de acompañamiento a la empleabilidad',
            'name' => 'invitacion_taller_empleabilidad',
            'order' => 2,
            'size' => 100,
            'category_id' => 22
        ]);

        Column::create([
            'title' => 'Asistió al taller de acompañamiento a la empleabilidad. SI - NO',
            'name' => 'asistencia_taller_empleabilidad',
            'order' => 3,
            'size' => 100,
            'category_id' => 22
        ]);

        Column::create([
            'title' => 'Consentimiento informado firmado y en físico oficina. SI - NO',
            'name' => 'consentimiento_informado_firmado',
            'order' => 4,
            'size' => 100,
            'category_id' => 22
        ]);

        Column::create([
            'title' => 'Registro en bolsa de empleo. Si - Fecha de registro',
            'name' => 'registro_bolsa_empleo',
            'order' => 1,
            'size' => 30,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Auto-postulación a ofertas de empleo empresa - cargo y fecha',
            'name' => 'f_postulacion_ofertas_empleo',
            'order' => 2,
            'size' => 150,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Remisión de hojas de vida 1. Nombre de la empresa - fecha',
            'name' => 'f_remision1_hoja_vida',
            'order' => 3,
            'size' => 150,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Remisión de hojas de vida 2. Nombre de la empresa - fecha',
            'name' => 'f_remision2_hoja_vida',
            'order' => 4,
            'size' => 150,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Remisión de hojas de vida 3. Nombre de la empresa - fecha',
            'name' => 'f_remision3_hoja_vida',
            'order' => 5,
            'size' => 150,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Remisión de hojas de vida 4. Nombre de la empresa - fecha',
            'name' => 'f_remision4_hoja_vida',
            'order' => 6,
            'size' => 150,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Seguimiento. Dejar observación',
            'name' => 'seguimiento_observacion',
            'order' => 7,
            'size' => 200,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Ubicación de empleo. SI - NO',
            'name' => 'ubicacion_empleo_si_no',
            'order' => 8,
            'size' => 10,
            'category_id' => 23
        ]);

        Column::create([
            'title' => '¿Tiene hijos?',
            'name' => 'tiene_hijos',
            'order' => 1,
            'size' => 10,
            'category_id' => 24
        ]);

        Column::create([
            'title' => '¿Cuántos hijos tiene?',
            'name' => 'cuantos_hijos_tiene',
            'order' => 2,
            'size' => 10,
            'category_id' => 24
        ]);

        Column::create([
            'title' => 'Qué edades tienen sus hijos',
            'name' => 'edades_de_los_hijos',
            'order' => 3,
            'size' => 100,
            'category_id' => 24
        ]);


    }
}
