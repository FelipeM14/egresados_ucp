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
            $table->string('nombre_y_apellidos')->nullable();
            $table->string('codigo')->nullable();
            $table->string('fecha_graduacion')->nullable();
            $table->string('telefono3')->nullable();
            $table->string('correo_actualizacion')->nullable();
            $table->string('ocupacion3')->nullable();
            $table->string('labora3')->nullable();
            $table->string('cargo3')->nullable();
            $table->string('titulos_obtenidos_ucp')->nullable();
            $table->string('actualizada')->nullable();
            $table->string('enviar_informacion_redes_sociales')->nullable();
            $table->string('gestion_matriculados')->nullable();
            $table->string('celular1')->nullable();
            $table->string('celular2')->nullable();
            $table->string('celular3')->nullable();
            $table->string('telefono_fijo1')->nullable();
            $table->string('telefono_fijo2')->nullable();
            $table->string('correo_electronico1')->nullable();
            $table->string('correo_electronico2')->nullable();
            $table->string('correo_electronico3')->nullable();
            $table->string('direccion_vivienda')->nullable();
            $table->string('cidudad_de_residencia')->nullable();
            $table->string('departamento_de_residencia')->nullable();
            $table->string('pais_de_residencia')->nullable();
            $table->string('participacion_proyectos_investigacion')->nullable();
            $table->string('nombre_proyecto_investigacion')->nullable();
            $table->string('pertenece_red_investigacion')->nullable();
            $table->string('nombre_red_investigacion')->nullable();
            $table->string('ambito_red_investigacion')->nullable();
            $table->string('reconicimiento_laboral')->nullable();
            $table->string('nombre_econicimiento_laboral')->nullable();
            $table->string('pertenece_organizacion_sinanimolucro')->nullable();
            $table->string('nombre_organizacion_sinanimolucro')->nullable();
            $table->string('grados_formacion')->nullable();
            $table->string('nombre_estudios_posgraduales')->nullable();
            $table->string('lugar_estudios_posgraduales')->nullable();
            $table->string('universidad_estudios_posgraduales')->nullable();
            $table->string('interes_estudios_posgradual')->nullable();
            $table->string('que_le_gustaria_estudiar')->nullable();
            $table->string('nivel_posgrado')->nullable();
            $table->string('jornada_disponibilidad')->nullable();
            $table->string('universidad_para_realizar_estudios')->nullable();
            $table->string('lugar_residencia_al_graduarse')->nullable();
            $table->string('primer_cargo_al_graduarse_ucp')->nullable();
            $table->string('primer_salario_al_graduarse_ucp')->nullable();
            $table->string('visitas_al_exterior_al_graduarse')->nullable();
            $table->string('pais_despues_de_graduarce')->nullable();
            $table->string('tiempo_fuera_del_pais')->nullable();
            $table->string('ocupacion_mayoria_del_tiempo')->nullable();
            $table->string('empresa_donde_esta_laborando')->nullable();
            $table->string('cargo_actual')->nullable();
            $table->string('nivel_cargo_ocupacional')->nullable();
            $table->string('cargo_ocupacional_actualmente')->nullable();
            $table->string('area_desempeno_profesional_actual')->nullable();
            $table->string('ambito_de_la_empresa')->nullable();
            $table->string('telefono_laboral')->nullable();
            $table->string('correo_labora')->nullable();
            $table->string('dirreccion_trabajo')->nullable();
            $table->string('en_su_trabajo_usted_es')->nullable();
            $table->string('ingreso_laboral_mes_pasado')->nullable();
            $table->string('cuanto_tiempo_lleva_en_el_trabajo')->nullable();
            $table->string('nivel_formacion_mas_apropiado')->nullable();
            $table->string('utiliza_los_conocimientos')->nullable();
            $table->string('mayor_satisfaccion_laboral')->nullable();
            $table->string('mayor_insatisfaccion_laboral')->nullable();
            $table->string('relacion_perfil_laboral_profesional')->nullable();
            $table->string('meses_buscando_trabajo')->nullable();
            $table->string('dificultad_conseguir_empleo')->nullable();
            $table->string('perfil_que_busca_al_emplearse')->nullable();
            $table->string('aspiracion_salarial')->nullable();
            $table->string('nombre_contacto_personal')->nullable();
            $table->string('parentesco_contacto')->nullable();
            $table->string('telefono_fijo_contacto')->nullable();
            $table->string('celular_contacto1')->nullable();
            $table->string('celular_contacto2')->nullable();
            $table->string('nombre_segundo_contacto')->nullable();
            $table->string('parentesco_segundo_contacto')->nullable();
            $table->string('telefono_segundo_contacto')->nullable();
            $table->string('celular1_segundo_contacto')->nullable();
            $table->string('celular2_segundo_contacto')->nullable();
            $table->string('informacion_graduado_ucp')->nullable();
            $table->string('nombre_graduado_referido')->nullable();
            $table->timestamps();
        });


        Schema::table('graduates', function (Blueprint $table) {
            $table->string('programa_del_que_se_graduo')->nullable();
            $table->string('donde_trabaja_el_graduado')->nullable();
            $table->string('telefono_graduado_referido')->nullable();
            $table->string('email_graduado_referido')->nullable();
            $table->string('asistencia_graduo_y_ahora_que')->nullable();
            $table->string('autoevaluacion')->nullable();
            $table->string('realizacion_carta_en_custodia')->nullable();
            $table->string('programa_1ag_envio_correspondencia')->nullable();
            $table->string('seguimiento_m1')->nullable();
            $table->string('seguimiento_m5')->nullable();
            $table->string('sancocho_universitario')->nullable();
            $table->string('fiesta_de_los_ninos')->nullable();
            $table->string('jornadas_actualizacion_academicas')->nullable();
            $table->string('asistencia_fiesta_graduados')->nullable();
            $table->string('registro_taller_empleabilidad')->nullable();
            $table->string('invitacion_taller_empleabilidad')->nullable();
            $table->string('asistencia_taller_empleabilidad')->nullable();
            $table->string('consentimiento_informado_firmado')->nullable();
            $table->string('registro_bolsa_empleo')->nullable();
            $table->string('f_postulacion_ofertas_empleo')->nullable();
            $table->string('f_remision1_hoja_vida')->nullable();
            $table->string('f_remision2_hoja_vida')->nullable();
            $table->string('f_remision3_hoja_vida')->nullable();
            $table->string('f_remision4_hoja_vida')->nullable();
            $table->string('seguimiento_observacion')->nullable();
            $table->string('ubicacion_empleo_si_no')->nullable();
            $table->string('tiene_hijos')->nullable();
            $table->string('cuantos_hijos_tiene')->nullable();
            $table->string('edades_de_los_hijos')->nullable();
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
