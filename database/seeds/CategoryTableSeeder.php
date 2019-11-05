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
            'name' => 'Información sobre los hijos ',
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
            'name' => 'direcciones_redes_sociales_enviar_mas_informacion',
            'order' => 3,
            'size' => 150,
            'category_id' => 3
        ]);

        Column::create([
            'title' => 'Observación gestión matriculados',
            'name' => 'observacion_gestion_matriculados',
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

        Column::create([
            'title' => '¿El ámbito de la empresa es local, regional, nacional o internacional?',
            'name' => 'el_ambito_de_la_empresa',
            'order' => 1,
            'size' => 150,
            'category_id' => 12
        ]);

        Column::create([
            'title' => 'Teléfono laboral',
            'name' => 'telefono_laboral',
            'order' => 2,
            'size' => 150,
            'category_id' => 12
        ]);

        Column::create([
            'title' => 'Correo electrónico laboral',
            'name' => 'correo_electronico_labora',
            'order' => 3,
            'size' => 150,
            'category_id' => 12
        ]);

        Column::create([
            'title' => 'Dirección del trabajo',
            'name' => 'dirreccion_del_trabajo',
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
            'name' => 'cual_fue_su_ingreso_laboral_el_mes_pasado',
            'order' => 6,
            'size' => 150,
            'category_id' => 12
        ]);

        Column::create([
            'title' => '¿Cuánto tiempo lleva en esta actividad o trabajo?',
            'name' => 'cuanto_tiempo_lleva_en_esta_actividad_o_trabajo',
            'order' => 7,
            'size' => 150,
            'category_id' => 12
        ]);

        Column::create([
            'title' => '¿Qué nivel de formación considera es el más apropiado para la
                        actividad o trabajo que usted desempeña?',
            'name' => 'nivel_de_formacion_es_mas_apropiado',
            'order' => 1,
            'size' => 150,
            'category_id' => 13
        ]);

        Column::create([
            'title' => 'En éste trabajo, en qué medida utiliza los conocimientos, habilidades que
                        obtuvo del programa del cuál es graduado?',
            'name' => 'en_que_medida_utiliza_los_conocimientos',
            'order' => 2,
            'size' => 150,
            'category_id' => 13
        ]);

        Column::create([
            'title' => '¿Cuál de los siguientes aspectos le genera a usted mayor satisfacción en su trabajo actual?',
            'name' => 'mayor_satisfaccion_en_su_trabajo_actual',
            'order' => 3,
            'size' => 150,
            'category_id' => 13
        ]);

        Column::create([
            'title' => '¿Cuál de los siguientes aspectos le genera a usted mayor insatisfacción en su trabajo actual?',
            'name' => 'mayor_insatisfaccion_en_su_trabajo_actual',
            'order' => 4,
            'size' => 150,
            'category_id' => 13
        ]);

        Column::create([
            'title' => '¿Qué tan relacionado está su perfil laboral con respecto al perfil profesional?',
            'name' => 'relacion_perfil_laboral_perfil_profesional',
            'order' => 5,
            'size' => 150,
            'category_id' => 13
        ]);

        Column::create([
            'title' => 'Si está buscando trabajo u otro trabajo / ¿cuántos meses ha estado buscando trabajo?',
            'name' => 'cuantos_meses_ha_estado_buscando_trabajo',
            'order' => 1,
            'size' => 150,
            'category_id' => 14
        ]);

        Column::create([
            'title' => '¿Cuál considera la principal dificultad a la hora de conseguir el empleo que busca?',
            'name' => 'principal_dificultad_para_conseguir_empleo',
            'order' => 2,
            'size' => 150,
            'category_id' => 14
        ]);

        Column::create([
            'title' => '¿Cuál es el perfil ocupacional que busca para emplearse?',
            'name' => 'perfil_ocupacional_que_busca_para_emplearse',
            'order' => 3,
            'size' => 150,
            'category_id' => 14
        ]);

        Column::create([
            'title' => '¿Cuál es su aspiración salarial?',
            'name' => 'aspiracion_salarial',
            'order' => 4,
            'size' => 150,
            'category_id' => 14
        ]);

        Column::create([
            'title' => 'Indíquenos por favor el nombre un contacto personal, laboral o familiar',
            'name' => 'nombre_contacto_personal_laboral_o_familiar',
            'order' => 1,
            'size' => 150,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Parentesco del contacto',
            'name' => 'parentesco_del_contacto',
            'order' => 2,
            'size' => 150,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Teléfono fijo del contacto',
            'name' => 'telefono_fijo_contacto',
            'order' => 3,
            'size' => 150,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Celular 1 del contacto',
            'name' => 'celular_contacto1',
            'order' => 4,
            'size' => 150,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Celular 2 del contacto',
            'name' => 'celular_contacto2',
            'order' => 5,
            'size' => 150,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Indíquenos por favor el nombre un segundo contacto personal, laboral o familiar',
            'name' => 'nombre_segundo_contacto_personal_laboral_o_familiar',
            'order' => 6,
            'size' => 150,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Parentesco del segundo contacto',
            'name' => 'parentesco_segundo_contacto',
            'order' => 7,
            'size' => 150,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Teléfono fijo segundo contacto',
            'name' => 'telefono_fijo_segundo_contacto',
            'order' => 8,
            'size' => 150,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Celular 1 del segundo contacto',
            'name' => 'celular2_segundo_contacto',
            'order' => 9,
            'size' => 150,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Celular 2 del segundo contacto',
            'name' => 'celular2_segundo_contacto',
            'order' => 10,
            'size' => 150,
            'category_id' => 15
        ]);

        Column::create([
            'title' => 'Tiene información de algún graduado ucp',
            'name' => 'informacion_graduado_ucp',
            'order' => 1,
            'size' => 150,
            'category_id' => 16
        ]);

        Column::create([
            'title' => 'Nombre graduado referido',
            'name' => 'nombre_graduado_referido',
            'order' => 2,
            'size' => 150,
            'category_id' => 16
        ]);

        Column::create([
            'title' => 'Programa del que se graduo',
            'name' => 'programa_del_que_se_graduo',
            'order' => 3,
            'size' => 150,
            'category_id' => 16
        ]);

        Column::create([
            'title' => 'Sabe dónde trabaja el graduado',
            'name' => 'donde_trabaja_el_graduado',
            'order' => 4,
            'size' => 150,
            'category_id' => 16
        ]);

        Column::create([
            'title' => 'Tiene algún No. telefónico de graduado referido',
            'name' => 'telefono_de_graduado_referido',
            'order' => 5,
            'size' => 150,
            'category_id' => 16
        ]);

        Column::create([
            'title' => 'Tiene la dirección de email de graduado referido',
            'name' => 'email_graduado_referido',
            'order' => 6,
            'size' => 150,
            'category_id' => 16
        ]);

        Column::create([
            'title' => 'Programa ¿me gradúo y ahora qué? fecha de asistencia',
            'name' => 'fecha_asistencia_me_graduo_y_ahora_que',
            'order' => 1,
            'size' => 150,
            'category_id' => 17
        ]);

        Column::create([
            'title' => 'Autoevaluación',
            'name' => 'autoevaluacion',
            'order' => 2,
            'size' => 150,
            'category_id' => 17
        ]);

        Column::create([
            'title' => 'Carta en custodia oficina 1AG - fecha de realización carta',
            'name' => 'fecha_de_realizacion_carta_en_custodia',
            'order' => 3,
            'size' => 150,
            'category_id' => 17
        ]);

        Column::create([
            'title' => 'Programa 1AG fecha de envió correspondencia',
            'name' => 'programa_1ag_fecha_de_envio_correspondencia',
            'order' => 4,
            'size' => 150,
            'category_id' => 17
        ]);

        Column::create([
            'title' => 'Seguimiento M1',
            'name' => 'seguimiento_m1',
            'order' => 1,
            'size' => 150,
            'category_id' => 18
        ]);

        Column::create([
            'title' => 'Seguimiento M5',
            'name' => 'seguimiento_m5',
            'order' => 2,
            'size' => 150,
            'category_id' => 18
        ]);

        Column::create([
            'title' => 'Sancocho universitario',
            'name' => 'sancocho_universitario',
            'order' => 1,
            'size' => 150,
            'category_id' => 19
        ]);

        Column::create([
            'title' => 'Fiesta de los niños',
            'name' => 'fiesta_de_los_ninos',
            'order' => 2,
            'size' => 150,
            'category_id' => 19
        ]);

        Column::create([
            'title' => 'Jornadas de actualización académicas. Si. Fecha - nombre de la jornada',
            'name' => 'jornadas_de_actualizacion_academicas',
            'order' => 1,
            'size' => 150,
            'category_id' => 20
        ]);

        Column::create([
            'title' => 'Asistencia a fiesta de graduados. Si - fecha',
            'name' => 'asistencia_fiesta_de_graduados',
            'order' => 1,
            'size' => 150,
            'category_id' => 21
        ]);

        Column::create([
            'title' => 'Fecha de registro al taller acompañamiento a la empleabilidad / emprendimiento',
            'name' => 'fecha_registro_taller_empleabilidad',
            'order' => 1,
            'size' => 150,
            'category_id' => 22
        ]);

        Column::create([
            'title' => 'Fecha de invitación al taller de acompañamiento a la empleabilidad',
            'name' => 'fecha_invitacion_taller_empleabilidad',
            'order' => 2,
            'size' => 150,
            'category_id' => 22
        ]);

        Column::create([
            'title' => 'Asistió al taller de acompañamiento a la empleabilidad. SI - NO',
            'name' => 'asistencia_taller_empleabilidad',
            'order' => 3,
            'size' => 150,
            'category_id' => 22
        ]);

        Column::create([
            'title' => 'Consentimiento informado firmado y en físico oficina. SI - NO',
            'name' => 'consentimiento_informado_firmado_fisico_oficina',
            'order' => 4,
            'size' => 150,
            'category_id' => 22
        ]);

        Column::create([
            'title' => 'Registro en bolsa de empleo. Si - Fecha de registro',
            'name' => 'fecha_registro_bolsa_empleo',
            'order' => 1,
            'size' => 150,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Auto-postulación a ofertas de empleo empresa - cargo y fecha',
            'name' => 'autopostulacion_ofertas_empleo_empresa_cargo_fecha',
            'order' => 2,
            'size' => 150,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Remisión de hojas de vida 1. Nombre de la empresa - fecha',
            'name' => 'remision1_hoja_de_vida_empresa_fecha',
            'order' => 3,
            'size' => 150,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Remisión de hojas de vida 2. Nombre de la empresa - fecha',
            'name' => 'remision2_hoja_de_vida_empresa_fecha',
            'order' => 4,
            'size' => 150,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Remisión de hojas de vida 3. Nombre de la empresa - fecha',
            'name' => 'remision3_hoja_de_vida_empresa_fecha',
            'order' => 5,
            'size' => 150,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Remisión de hojas de vida 4. Nombre de la empresa - fecha',
            'name' => 'remision4_hoja_de_vida_empresa_fecha',
            'order' => 6,
            'size' => 150,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Seguimiento. Dejar observación',
            'name' => 'seguimiento_ejar_observacion',
            'order' => 7,
            'size' => 150,
            'category_id' => 23
        ]);

        Column::create([
            'title' => 'Ubicación de empleo. SI - NO',
            'name' => 'ubicacion_empleo_si_no',
            'order' => 8,
            'size' => 150,
            'category_id' => 23
        ]);

        Column::create([
            'title' => '¿Tiene hijos?',
            'name' => 'tiene_hijos',
            'order' => 1,
            'size' => 150,
            'category_id' => 24
        ]);

        Column::create([
            'title' => '¿Cuántos hijos tiene?',
            'name' => 'cuantos_hijos_tiene',
            'order' => 2,
            'size' => 150,
            'category_id' => 24
        ]);

        Column::create([
            'title' => 'Qué edades tienen sus hijos',
            'name' => 'edades_de_los_hijos',
            'order' => 3,
            'size' => 150,
            'category_id' => 24
        ]);


    }
}
