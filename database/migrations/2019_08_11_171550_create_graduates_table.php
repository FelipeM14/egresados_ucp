<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //creacion de campos bacicos en la tabla de graduados
    public function up()
    {
        Schema::create('graduates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_y_apellidos',150)->nullable();
            $table->string('codigo',20)->nullable();
            $table->string('fecha_graduacion',20)->nullable();
            $table->string('programa',150)->nullable();
            $table->string('numero_promocion',20)->nullable();
            $table->string('telefono4',20)->nullable();
            $table->string('telefono3',20)->nullable();
            $table->string('correo_actualizacion',100)->nullable();
            $table->string('ocupacion3',150)->nullable();
            $table->string('labora3',150)->nullable();
            $table->string('cargo3',100)->nullable();
            $table->string('titulos_obtenidos_ucp',20)->nullable();
            $table->string('actualizada',10)->nullable();
            $table->string('enviar_informacion_redes_sociales',100)->nullable();
            $table->string('gestion_matriculados',150)->nullable();
            $table->string('celular1',20)->nullable();
            $table->string('celular2',20)->nullable();
            $table->string('celular3',20)->nullable();
            $table->string('telefono_fijo1',20)->nullable();
            $table->string('telefono_fijo2',20)->nullable();
            $table->string('correo_electronico1',100)->nullable();
            $table->string('correo_electronico2',100)->nullable();
            $table->string('correo_electronico3',100)->nullable();
            $table->string('direccion_vivienda',100)->nullable();
            $table->string('cidudad_de_residencia',100)->nullable();
            $table->string('departamento_de_residencia',100)->nullable();
            $table->string('pais_de_residencia',100)->nullable();
            $table->string('participacion_proyectos_investigacion',10)->nullable();
            $table->string('nombre_proyecto_investigacion',250)->nullable();
            $table->string('pertenece_red_investigacion',10)->nullable();
            $table->string('nombre_red_investigacion',200)->nullable();
            $table->string('ambito_red_investigacion',50)->nullable();
            $table->string('reconicimiento_laboral',10)->nullable();
            $table->string('nombre_econicimiento_laboral',200)->nullable();
            $table->string('pertenece_organizacion_sinanimolucro',10)->nullable();
            $table->string('nombre_organizacion_sinanimolucro',200)->nullable();
            $table->string('grados_formacion',150)->nullable();
            $table->string('nombre_estudios_posgraduales',200)->nullable();
            $table->string('lugar_estudios_posgraduales',150)->nullable();
            $table->string('universidad_estudios_posgraduales',150)->nullable();
            $table->string('interes_estudios_posgradual',50)->nullable();
            $table->string('que_le_gustaria_estudiar',150)->nullable();
            $table->string('nivel_posgrado',100)->nullable();
            $table->string('jornada_disponibilidad',50)->nullable();
            $table->string('universidad_para_realizar_estudios',150)->nullable();
            $table->string('lugar_residencia_al_graduarse',150)->nullable();
            $table->string('primer_cargo_al_graduarse_ucp',150)->nullable();
            $table->string('primer_salario_al_graduarse_ucp',100)->nullable();
            $table->string('visitas_al_exterior_al_graduarse',100)->nullable();
            $table->string('pais_despues_de_graduarce',100)->nullable();
            $table->string('tiempo_fuera_del_pais',50)->nullable();
            $table->string('ocupacion_mayoria_del_tiempo',100)->nullable();
            $table->string('empresa_donde_esta_laborando',150)->nullable();
            $table->string('cargo_actual',150)->nullable();
            $table->string('nivel_cargo_ocupacional',100)->nullable();
            $table->string('cargo_ocupacional_actualmente',100)->nullable();
            $table->string('area_desempeno_profesional_actual',100)->nullable();
            $table->string('ambito_de_la_empresa',50)->nullable();
            $table->string('telefono_laboral',20)->nullable();
            $table->string('correo_labora',100)->nullable();
            $table->string('dirreccion_trabajo',150)->nullable();
            $table->string('en_su_trabajo_usted_es',150)->nullable();
            $table->string('ingreso_laboral_mes_pasado',100)->nullable();
            $table->string('cuanto_tiempo_lleva_en_el_trabajo',50)->nullable();
            $table->string('nivel_formacion_mas_apropiado',50)->nullable();
            $table->string('utiliza_los_conocimientos',50)->nullable();
            $table->string('mayor_satisfaccion_laboral',200)->nullable();
            $table->string('mayor_insatisfaccion_laboral',200)->nullable();
            $table->string('relacion_perfil_laboral_profesional',100)->nullable();
            $table->string('meses_buscando_trabajo',50)->nullable();
            $table->string('dificultad_conseguir_empleo',100)->nullable();
            $table->string('perfil_que_busca_al_emplearse',100)->nullable();
            $table->string('aspiracion_salarial',50)->nullable();
            $table->string('nombre_contacto_personal',100)->nullable();
            $table->string('parentesco_contacto',50)->nullable();
            $table->string('telefono_fijo_contacto',20)->nullable();
            $table->string('celular_contacto1',20)->nullable();
            $table->string('celular_contacto2',20)->nullable();
            $table->string('nombre_segundo_contacto',100)->nullable();
            $table->string('parentesco_segundo_contacto',50)->nullable();
            $table->string('telefono_segundo_contacto',20)->nullable();
            $table->string('celular1_segundo_contacto',20)->nullable();
            $table->string('celular2_segundo_contacto',20)->nullable();
            $table->string('informacion_graduado_ucp',10)->nullable();
            $table->string('nombre_graduado_referido',100)->nullable();
            $table->string('programa_del_que_se_graduo',100)->nullable();
            $table->string('donde_trabaja_el_graduado',100)->nullable();
            $table->string('telefono_graduado_referido',20)->nullable();
            $table->string('email_graduado_referido',100)->nullable();
            $table->string('asistencia_graduo_y_ahora_que',100)->nullable();
            $table->string('autoevaluacion',100)->nullable();
            $table->string('realizacion_carta_en_custodia',100)->nullable();
            $table->string('programa_1ag_envio_correspondencia',100)->nullable();
            $table->string('seguimiento_m1',100)->nullable();
            $table->string('seguimiento_m5',100)->nullable();
            $table->string('sancocho_universitario',100)->nullable();
            $table->string('fiesta_de_los_ninos',100)->nullable();
            $table->string('jornadas_actualizacion_academicas',100)->nullable();
            $table->string('asistencia_fiesta_graduados',100)->nullable();
            $table->string('registro_taller_empleabilidad',100)->nullable();
            $table->string('invitacion_taller_empleabilidad',100)->nullable();
            $table->string('asistencia_taller_empleabilidad',100)->nullable();
            $table->string('consentimiento_informado_firmado',100)->nullable();
            $table->string('registro_bolsa_empleo',30)->nullable();
            $table->string('f_postulacion_ofertas_empleo',150)->nullable();
            $table->string('f_remision1_hoja_vida',150)->nullable();
            $table->string('f_remision2_hoja_vida',150)->nullable();
            $table->string('f_remision3_hoja_vida',150)->nullable();
            $table->string('f_remision4_hoja_vida',150)->nullable();
            $table->string('seguimiento_observacion',200)->nullable();
            $table->string('ubicacion_empleo_si_no',10)->nullable();
            $table->string('tiene_hijos',10)->nullable();
            $table->string('cuantos_hijos_tiene',10)->nullable();
            $table->string('edades_de_los_hijos',100)->nullable();
            $table->timestamps();
        });

    }










    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graduates');
    }
}
