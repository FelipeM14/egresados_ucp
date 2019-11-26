-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2019 a las 00:49:48
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `graduados_ucp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `protected` int(11) NOT NULL DEFAULT '0',
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `protected`, `color`, `color_text`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Datos básicos', 1, '#000000', '#FFFFFF', 1, '2019-11-22 22:51:10', '2019-11-22 22:51:10'),
(2, 'Actualización datos', 1, '#FFFFFF', '#000000', 2, '2019-11-22 22:51:10', '2019-11-22 22:51:10'),
(3, 'Gestión matriculados', 0, '#045FB4', '#FFFFFF', 3, '2019-11-22 22:51:10', '2019-11-22 22:51:10'),
(4, 'Proyecto de investigación', 0, '#FF0000', '#FFFFFF', 4, '2019-11-22 22:51:10', '2019-11-22 22:51:10'),
(5, 'Comunidades academicas', 0, '#4B088A', '#FFFFFF', 5, '2019-11-22 22:51:10', '2019-11-22 22:51:10'),
(6, 'Reconocimientos y disticiones laborales', 0, '#B45F04', '#FFFFFF', 6, '2019-11-22 22:51:10', '2019-11-22 22:51:10'),
(7, 'Estudios posgraduales', 0, '#3ADF00', '#FFFFFF', 7, '2019-11-22 22:51:10', '2019-11-22 22:51:10'),
(8, 'Interes en continuar estudiando', 0, '#61380B', '#FFFFFF', 8, '2019-11-22 22:51:10', '2019-11-22 22:51:10'),
(9, 'Datos después de grado de la universidad', 0, '#08088A', '#FFFFFF', 9, '2019-11-22 22:51:10', '2019-11-22 22:51:10'),
(10, 'Datos laborales', 0, '#04B404', '#FFFFFF', 10, '2019-11-22 22:51:10', '2019-11-22 22:51:10'),
(11, 'Ocupación laboral', 0, '#FF00FF', '#FFFFFF', 11, '2019-11-22 22:51:10', '2019-11-22 22:51:10'),
(12, 'Información contacto laboral', 0, '#5FB404', '#FFFFFF', 12, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(13, 'Perfil laboral con respecto al perfil profesional', 0, '#2E9AFE', '#FFFFFF', 13, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(14, 'Busqueda de empleo', 0, '#8A0808', '#FFFFFF', 14, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(15, 'Información de contacto familiar o personal', 0, '#0B3B0B', '#FFFFFF', 15, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(16, 'Información de contacto de otro graduado', 0, '#045FB4', '#FFFFFF', 16, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(17, 'Requistos de grado', 0, '#FF0040', '#FFFFFF', 17, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(18, 'Seguimiento M1-M5', 0, '#AC58FA', '#FFFFFF', 18, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(19, 'Asistencia actividades', 0, '#2EFE64', '#FFFFFF', 19, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(20, 'Jornadas de actualización académicas', 0, '#FE9A2E', '#FFFFFF', 20, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(21, 'Asistencia a fiesta de graduados', 0, '#2EFEF7', '#FFFFFF', 21, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(22, 'Asistencia a talleres de acompañamiento a la empleabilidad', 0, '#FA58F4', '#FFFFFF', 22, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(23, 'Datos de registro en bolsa de empleo', 0, '#DF0101', '#FFFFFF', 23, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(24, 'Información sobre los hijos', 0, '#04B404', '#FFFFFF', 24, '2019-11-22 22:51:11', '2019-11-22 22:51:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `columns`
--

CREATE TABLE `columns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `size` int(11) NOT NULL DEFAULT '150',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `columns`
--

INSERT INTO `columns` (`id`, `title`, `name`, `order`, `category_id`, `status`, `size`, `created_at`, `updated_at`) VALUES
(1, 'Nombre y apellidos', 'nombre_y_apellidos', 1, 1, 1, 150, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(2, 'Código', 'codigo', 2, 1, 1, 20, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(3, 'Fecha graduación', 'fecha_graduacion', 3, 1, 1, 20, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(4, 'Programa', 'programa', 4, 1, 1, 150, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(5, 'Promoción No.', 'numero_promocion', 5, 1, 1, 20, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(6, 'Teléfono', 'telefono4', 1, 2, 1, 20, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(7, 'Correo electrónico', 'correo_actualizacion', 2, 2, 1, 100, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(8, 'En que ocupa la mayor parte del tiempo?', 'ocupacion3', 3, 2, 1, 150, '2019-11-22 22:51:11', '2019-11-22 22:51:11'),
(9, 'Empresa en la que labora', 'labora3', 4, 2, 1, 150, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(10, 'Cargo que desempeña', 'cargo3', 5, 2, 1, 100, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(11, 'Cantidad de títulos obtenidos en la universidad católica', 'titulos_obtenidos_ucp', 1, 3, 1, 20, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(12, 'Actualizada SI - NO', 'actualizada', 2, 3, 1, 10, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(13, 'Direcciones redes sociales - enviar mas información SI - NO', 'enviar_informacion_redes_sociales', 3, 3, 1, 100, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(14, 'Observación gestión matriculados', 'gestion_matriculados', 4, 3, 1, 150, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(15, 'Celular 1', 'celular1', 5, 3, 1, 20, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(16, 'Celular 2', 'celular2', 6, 3, 1, 20, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(17, 'Celular 3', 'celular3', 7, 3, 1, 20, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(18, 'Teléfono fijo 1', 'telefono_fijo1', 8, 3, 1, 20, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(19, 'Teléfono fijo 2', 'telefono_fijo2', 9, 3, 1, 20, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(20, 'Correo electrónico 1', 'correo_electronico1', 10, 3, 1, 100, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(21, 'Correo electrónico 2', 'correo_electronico2', 11, 3, 1, 100, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(22, 'Correo electrónico 3', 'correo_electronico3', 12, 3, 1, 100, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(23, 'Dirección vivienda', 'direccion_vivienda', 13, 3, 1, 100, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(24, 'Ciudad de residencia', 'cidudad_de_residencia', 14, 3, 1, 100, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(25, 'Departamento de residencia', 'departamento_de_residencia', 15, 3, 1, 100, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(26, 'País de residencia', 'pais_de_residencia', 16, 3, 1, 100, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(27, '¿Ha Realizado. Participado o está realizadó proyectos de investigación? (DIFERENTE AL DEL PREGRADO)', 'participacion_proyectos_investigacion', 1, 4, 1, 10, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(28, 'SI. Indique el nombre del proyecto de investigación', 'nombre_proyecto_investigacion', 2, 4, 1, 250, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(29, 'Usted pertenece a comunidades académicas, asociaciones científicas, profesionales, tecnologícas y/o redes de investigación', 'pertenece_red_investigacion', 1, 5, 1, 10, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(30, 'SI. Indique el nombre de la red a la que pertenece', 'nombre_red_investigacion', 2, 5, 1, 200, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(31, 'El ámbito de esta red es REGIONAL, NACIONAL o INTERNACIONAL', 'ambito_red_investigacion', 3, 5, 1, 50, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(32, 'Ha recibido algún reconocimiento, distinción por su desempeño laboral, estudiantil, deportivo, cultural u otros', 'reconicimiento_laboral', 1, 6, 1, 10, '2019-11-22 22:51:12', '2019-11-22 22:51:12'),
(33, ' Indique el nombre del reconocimeinto o distinción y quien se lo otorgo', 'nombre_econicimiento_laboral', 2, 6, 1, 200, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(34, 'Usted pertence o ha pertenecido a organizaciones sin ánimo de lucro o realiza o ha realizado voluntariados. SI - NO', 'pertenece_organizacion_sinanimolucro', 3, 6, 1, 10, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(35, 'Nombre de la organización sin ánimo de lucro, voluntariado o fundación en donde ha prestado sus servicios', 'nombre_organizacion_sinanimolucro', 4, 6, 1, 200, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(36, 'Seleccione todos sus grados de formación actual', 'grados_formacion', 1, 7, 1, 150, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(37, 'Si realizo estudios posgraduales indique nombre del estudio posgradual que realizó ¿cual?', 'nombre_estudios_posgraduales', 2, 7, 1, 200, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(38, '¿En qué ciudad - país realizo sus estudios posgraduales', 'lugar_estudios_posgraduales', 3, 7, 1, 150, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(39, 'Nombre de la universidad realizo sus estudios posgraduales', 'universidad_estudios_posgraduales', 4, 7, 1, 150, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(40, '¿En la actualidad ésta interesado en cursar estudios posgraduales?', 'interes_estudios_posgradual', 1, 8, 1, 50, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(41, 'Si la respuesta fue: definitivamente si o lo esta pensando, índique que le gustaría estudiar', 'que_le_gustaria_estudiar', 2, 8, 1, 150, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(42, '¿Qué nivel de posgrado conidera le permitirá mejorar su desempeño laboral?', 'nivel_posgrado', 3, 8, 1, 100, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(43, '¿Cuál de las siguientes jornadas se ajustaría más a su disponibilidad de tiempo?', 'jornada_disponibilidad', 4, 8, 1, 50, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(44, '¿En qué universidad ha pensado realizar sus estudios?', 'universidad_para_realizar_estudios', 5, 8, 1, 150, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(45, '¿Cuál fue su lugar de residencia en su primer empleo después de graduarse de la universidad?             \r\n            CIUDAD - DEPARTAMENTO - PAÍS', 'lugar_residencia_al_graduarse', 1, 9, 1, 150, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(46, '¿Cuál fue su primer cargo después de graduarse de la universidad?', 'primer_cargo_al_graduarse_ucp', 2, 9, 1, 150, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(47, '¿Cuál fue se primer cargo y salario después de graduarse de la universidad?', 'primer_salario_al_graduarse_ucp', 3, 9, 1, 100, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(48, '¿Ha estado algún tiempo en el exterior después de graduarse de la universidad?\r\n                        Si, por estudio – Si, Por trabajo - otro', 'visitas_al_exterior_al_graduarse', 4, 9, 1, 100, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(49, '¿En qué país estuvo después de su graduación?', 'pais_despues_de_graduarce', 5, 9, 1, 100, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(50, '¿Cuánto tiempo estuvo fuera del país?', 'tiempo_fuera_del_pais', 6, 9, 1, 50, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(51, '¿En la actualidad en qué actividad ocupa la mayor parte de su tiempo?', 'ocupacion_mayoria_del_tiempo', 1, 10, 1, 100, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(52, '¿Nombre de la empresa dónde se encuentra laborando?', 'empresa_donde_esta_laborando', 2, 10, 1, 150, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(53, '¿Cuál es su cargo actual? (ESCRIBA EL CARGO TEXTUALMENTE COMO LO INDIQUE EL GRADUADO)', 'cargo_actual', 3, 10, 1, 150, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(54, 'Nivel del cargo ocupacional', 'nivel_cargo_ocupacional', 1, 11, 1, 100, '2019-11-22 22:51:13', '2019-11-22 22:51:13'),
(55, '¿Qué cargo ocupacional, ocupa actualmente?', 'cargo_ocupacional_actualmente', 2, 11, 1, 100, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(56, '¿En qué área del ejercicio profesional se desempeña actualmente?', 'area_desempeno_profesional_actual', 3, 11, 1, 100, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(57, '¿El ámbito de la empresa es local, regional, nacional o internacional?', 'ambito_de_la_empresa', 1, 12, 1, 50, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(58, 'Teléfono laboral', 'telefono_laboral', 2, 12, 1, 20, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(59, 'Correo electrónico laboral', 'correo_labora', 3, 12, 1, 100, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(60, 'Dirección del trabajo', 'dirreccion_trabajo', 4, 12, 1, 150, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(61, 'Si se encuentra trabajando: en su trabajo usted es', 'en_su_trabajo_usted_es', 5, 12, 1, 150, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(62, 'La siguiente información se consulta sólo con fines académicos\r\n                        ¿Cuál fue su ingreso laboral el mes pasado?', 'ingreso_laboral_mes_pasado', 6, 12, 1, 100, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(63, '¿Cuánto tiempo lleva en esta actividad o trabajo?', 'cuanto_tiempo_lleva_en_el_trabajo', 7, 12, 1, 50, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(64, '¿Qué nivel de formación considera es el más apropiado para la\r\n                        actividad o trabajo que usted desempeña?', 'nivel_formacion_mas_apropiado', 1, 13, 1, 50, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(65, 'En éste trabajo, en qué medida utiliza los conocimientos, habilidades que\r\n                        obtuvo del programa del cuál es graduado?', 'utiliza_los_conocimientos', 2, 13, 1, 50, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(66, '¿Cuál de los siguientes aspectos le genera a usted mayor satisfacción en su trabajo actual?', 'mayor_satisfaccion_laboral', 3, 13, 1, 200, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(67, '¿Cuál de los siguientes aspectos le genera a usted mayor insatisfacción en su trabajo actual?', 'mayor_insatisfaccion_laboral', 4, 13, 1, 200, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(68, '¿Qué tan relacionado está su perfil laboral con respecto al perfil profesional?', 'relacion_perfil_laboral_profesional', 5, 13, 1, 100, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(69, 'Si está buscando trabajo u otro trabajo / ¿cuántos meses ha estado buscando trabajo?', 'meses_buscando_trabajo', 1, 14, 1, 50, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(70, '¿Cuál considera la principal dificultad a la hora de conseguir el empleo que busca?', 'dificultad_conseguir_empleo', 2, 14, 1, 100, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(71, '¿Cuál es el perfil ocupacional que busca para emplearse?', 'perfil_que_busca_al_emplearse', 3, 14, 1, 100, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(72, '¿Cuál es su aspiración salarial?', 'aspiracion_salarial', 4, 14, 1, 50, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(73, 'Indíquenos por favor el nombre un contacto personal, laboral o familiar', 'nombre_contacto_personal', 1, 15, 1, 100, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(74, 'Parentesco del contacto', 'parentesco_contacto', 2, 15, 1, 50, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(75, 'Teléfono fijo del contacto', 'telefono_fijo_contacto', 3, 15, 1, 20, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(76, 'Celular 1 del contacto', 'celular_contacto1', 4, 15, 1, 20, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(77, 'Celular 2 del contacto', 'celular_contacto2', 5, 15, 1, 20, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(78, 'Indíquenos por favor el nombre un segundo contacto personal, laboral o familiar', 'nombre_segundo_contacto', 6, 15, 1, 100, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(79, 'Parentesco del segundo contacto', 'parentesco_segundo_contacto', 7, 15, 1, 50, '2019-11-22 22:51:14', '2019-11-22 22:51:14'),
(80, 'Teléfono fijo segundo contacto', 'telefono_segundo_contacto', 8, 15, 1, 20, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(81, 'Celular 1 del segundo contacto', 'celular1_segundo_contacto', 9, 15, 1, 20, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(82, 'Celular 2 del segundo contacto', 'celular2_segundo_contacto', 10, 15, 1, 20, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(83, 'Tiene información de algún graduado ucp', 'informacion_graduado_ucp', 1, 16, 1, 10, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(84, 'Nombre graduado referido', 'nombre_graduado_referido', 2, 16, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(85, 'Programa del que se graduo', 'programa_del_que_se_graduo', 3, 16, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(86, 'Sabe dónde trabaja el graduado', 'donde_trabaja_el_graduado', 4, 16, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(87, 'Tiene algún No. telefónico de graduado referido', 'telefono_graduado_referido', 5, 16, 1, 20, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(88, 'Tiene la dirección de email de graduado referido', 'email_graduado_referido', 6, 16, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(89, 'Programa ¿me gradúo y ahora qué? fecha de asistencia', 'asistencia_graduo_y_ahora_que', 1, 17, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(90, 'Autoevaluación', 'autoevaluacion', 2, 17, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(91, 'Carta en custodia oficina 1AG - fecha de realización carta', 'realizacion_carta_en_custodia', 3, 17, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(92, 'Programa 1AG fecha de envió correspondencia', 'programa_1ag_envio_correspondencia', 4, 17, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(93, 'Seguimiento M1', 'seguimiento_m1', 1, 18, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(94, 'Seguimiento M5', 'seguimiento_m5', 2, 18, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(95, 'Sancocho universitario', 'sancocho_universitario', 1, 19, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(96, 'Fiesta de los niños', 'fiesta_de_los_ninos', 2, 19, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(97, 'Jornadas de actualización académicas. Si. Fecha - nombre de la jornada', 'jornadas_actualizacion_academicas', 1, 20, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(98, 'Asistencia a fiesta de graduados. Si - fecha', 'asistencia_fiesta_graduados', 1, 21, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(99, 'Fecha de registro al taller acompañamiento a la empleabilidad / emprendimiento', 'registro_taller_empleabilidad', 1, 22, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(100, 'Fecha de invitación al taller de acompañamiento a la empleabilidad', 'invitacion_taller_empleabilidad', 2, 22, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(101, 'Asistió al taller de acompañamiento a la empleabilidad. SI - NO', 'asistencia_taller_empleabilidad', 3, 22, 1, 100, '2019-11-22 22:51:15', '2019-11-22 22:51:15'),
(102, 'Consentimiento informado firmado y en físico oficina. SI - NO', 'consentimiento_informado_firmado', 4, 22, 1, 100, '2019-11-22 22:51:16', '2019-11-22 22:51:16'),
(103, 'Registro en bolsa de empleo. Si - Fecha de registro', 'registro_bolsa_empleo', 1, 23, 1, 30, '2019-11-22 22:51:16', '2019-11-22 22:51:16'),
(104, 'Auto-postulación a ofertas de empleo empresa - cargo y fecha', 'f_postulacion_ofertas_empleo', 2, 23, 1, 150, '2019-11-22 22:51:16', '2019-11-22 22:51:16'),
(105, 'Remisión de hojas de vida 1. Nombre de la empresa - fecha', 'f_remision1_hoja_vida', 3, 23, 1, 150, '2019-11-22 22:51:16', '2019-11-22 22:51:16'),
(106, 'Remisión de hojas de vida 2. Nombre de la empresa - fecha', 'f_remision2_hoja_vida', 4, 23, 1, 150, '2019-11-22 22:51:16', '2019-11-22 22:51:16'),
(107, 'Remisión de hojas de vida 3. Nombre de la empresa - fecha', 'f_remision3_hoja_vida', 5, 23, 1, 150, '2019-11-22 22:51:16', '2019-11-22 22:51:16'),
(108, 'Remisión de hojas de vida 4. Nombre de la empresa - fecha', 'f_remision4_hoja_vida', 6, 23, 1, 150, '2019-11-22 22:51:16', '2019-11-22 22:51:16'),
(109, 'Seguimiento. Dejar observación', 'seguimiento_observacion', 7, 23, 1, 200, '2019-11-22 22:51:16', '2019-11-22 22:51:16'),
(110, 'Ubicación de empleo. SI - NO', 'ubicacion_empleo_si_no', 8, 23, 1, 10, '2019-11-22 22:51:16', '2019-11-22 22:51:16'),
(111, '¿Tiene hijos?', 'tiene_hijos', 1, 24, 1, 10, '2019-11-22 22:51:16', '2019-11-22 22:51:16'),
(112, '¿Cuántos hijos tiene?', 'cuantos_hijos_tiene', 2, 24, 1, 10, '2019-11-22 22:51:16', '2019-11-22 22:51:16'),
(113, 'Qué edades tienen sus hijos', 'edades_de_los_hijos', 3, 24, 1, 100, '2019-11-22 22:51:16', '2019-11-22 22:51:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `graduates`
--

CREATE TABLE `graduates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_y_apellidos` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigo` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_graduacion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programa` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_promocion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono4` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_actualizacion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacion3` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labora3` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cargo3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulos_obtenidos_ucp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actualizada` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enviar_informacion_redes_sociales` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gestion_matriculados` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_fijo1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_fijo2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_electronico1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_electronico2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_electronico3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion_vivienda` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidudad_de_residencia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departamento_de_residencia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais_de_residencia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `participacion_proyectos_investigacion` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_proyecto_investigacion` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pertenece_red_investigacion` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_red_investigacion` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ambito_red_investigacion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reconicimiento_laboral` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_econicimiento_laboral` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pertenece_organizacion_sinanimolucro` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_organizacion_sinanimolucro` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grados_formacion` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_estudios_posgraduales` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lugar_estudios_posgraduales` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `universidad_estudios_posgraduales` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interes_estudios_posgradual` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `que_le_gustaria_estudiar` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel_posgrado` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jornada_disponibilidad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `universidad_para_realizar_estudios` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lugar_residencia_al_graduarse` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primer_cargo_al_graduarse_ucp` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primer_salario_al_graduarse_ucp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitas_al_exterior_al_graduarse` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais_despues_de_graduarce` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiempo_fuera_del_pais` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacion_mayoria_del_tiempo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa_donde_esta_laborando` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cargo_actual` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel_cargo_ocupacional` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cargo_ocupacional_actualmente` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_desempeno_profesional_actual` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ambito_de_la_empresa` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_laboral` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_labora` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dirreccion_trabajo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_su_trabajo_usted_es` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ingreso_laboral_mes_pasado` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuanto_tiempo_lleva_en_el_trabajo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel_formacion_mas_apropiado` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utiliza_los_conocimientos` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mayor_satisfaccion_laboral` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mayor_insatisfaccion_laboral` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relacion_perfil_laboral_profesional` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meses_buscando_trabajo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dificultad_conseguir_empleo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perfil_que_busca_al_emplearse` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aspiracion_salarial` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_contacto_personal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentesco_contacto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_fijo_contacto` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular_contacto1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular_contacto2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_segundo_contacto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentesco_segundo_contacto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_segundo_contacto` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular1_segundo_contacto` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular2_segundo_contacto` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `informacion_graduado_ucp` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_graduado_referido` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programa_del_que_se_graduo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donde_trabaja_el_graduado` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_graduado_referido` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_graduado_referido` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asistencia_graduo_y_ahora_que` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autoevaluacion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realizacion_carta_en_custodia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programa_1ag_envio_correspondencia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seguimiento_m1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seguimiento_m5` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sancocho_universitario` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiesta_de_los_ninos` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jornadas_actualizacion_academicas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asistencia_fiesta_graduados` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registro_taller_empleabilidad` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitacion_taller_empleabilidad` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asistencia_taller_empleabilidad` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consentimiento_informado_firmado` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registro_bolsa_empleo` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_postulacion_ofertas_empleo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_remision1_hoja_vida` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_remision2_hoja_vida` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_remision3_hoja_vida` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_remision4_hoja_vida` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seguimiento_observacion` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ubicacion_empleo_si_no` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiene_hijos` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuantos_hijos_tiene` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edades_de_los_hijos` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrar usuarios', 'web', '2019-11-22 22:51:03', '2019-11-22 22:51:03'),
(2, 'Realizar ajustes', 'web', '2019-11-22 22:51:03', '2019-11-22 22:51:03'),
(3, 'Ver datos', 'web', '2019-11-22 22:51:03', '2019-11-22 22:51:03'),
(4, 'Administrar datos graduados', 'web', '2019-11-22 22:51:03', '2019-11-22 22:51:03'),
(5, 'Consultar datos graduados', 'web', '2019-11-22 22:51:03', '2019-11-22 22:51:03'),
(6, 'Datos básicos ver', 'web', '2019-11-22 22:51:03', '2019-11-22 22:51:03'),
(7, 'Datos básicos editar', 'web', '2019-11-22 22:51:03', '2019-11-22 22:51:03'),
(8, 'Actualización datos ver', 'web', '2019-11-22 22:51:03', '2019-11-22 22:51:03'),
(9, 'Actualización datos editar', 'web', '2019-11-22 22:51:03', '2019-11-22 22:51:03'),
(10, 'Gestión matriculados ver', 'web', '2019-11-22 22:51:03', '2019-11-22 22:51:03'),
(11, 'Gestión matriculados editar', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(12, 'Proyecto de investigación ver', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(13, 'Proyecto de investigación editar', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(14, 'Comunidades academicas ver', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(15, 'Comunidades academicas editar', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(16, 'Reconocimientos y disticiones laborales ver', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(17, 'Reconocimientos y disticiones laborales editar', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(18, 'Estudios posgraduales ver', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(19, 'Estudios posgraduales editar', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(20, 'Interes en continuar estudiando ver', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(21, 'Interes en continuar estudiando editar', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(22, 'Datos después de grado de la universidad ver', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(23, 'Datos después de grado de la universidad editar', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(24, 'Datos laborales ver', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(25, 'Datos laborales editar', 'web', '2019-11-22 22:51:04', '2019-11-22 22:51:04'),
(26, 'Ocupación laboral ver', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(27, 'Ocupación laboral editar', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(28, 'Información contacto laboral ver', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(29, 'Información contacto laboral editar', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(30, 'Perfil laboral con respecto al perfil profesional ver', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(31, 'Perfil laboral con respecto al perfil profesional editar', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(32, 'Busqueda de empleo ver', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(33, 'Busqueda de empleo editar', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(34, 'Información de contacto familiar o personal ver', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(35, 'Información de contacto familiar o personal editar', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(36, 'Información de contacto de otro graduado ver', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(37, 'Información de contacto de otro graduado editar', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(38, 'Requistos de grado ver', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(39, 'Requistos de grado editar', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(40, 'Seguimiento M1-M5 ver', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(41, 'Seguimiento M1-M5 editar', 'web', '2019-11-22 22:51:05', '2019-11-22 22:51:05'),
(42, 'Asistencia actividades ver', 'web', '2019-11-22 22:51:06', '2019-11-22 22:51:06'),
(43, 'Asistencia actividades editar', 'web', '2019-11-22 22:51:06', '2019-11-22 22:51:06'),
(44, 'Jornadas de actualización académicas ver', 'web', '2019-11-22 22:51:06', '2019-11-22 22:51:06'),
(45, 'Jornadas de actualización académicas editar', 'web', '2019-11-22 22:51:06', '2019-11-22 22:51:06'),
(46, 'Asistencia a fiesta de graduados ver', 'web', '2019-11-22 22:51:06', '2019-11-22 22:51:06'),
(47, 'Asistencia a fiesta de graduados editar', 'web', '2019-11-22 22:51:06', '2019-11-22 22:51:06'),
(48, 'Asistencia a talleres de acompañamiento a la empleabilidad ver', 'web', '2019-11-22 22:51:06', '2019-11-22 22:51:06'),
(49, 'Asistencia a talleres de acompañamiento a la empleabilidad editar', 'web', '2019-11-22 22:51:06', '2019-11-22 22:51:06'),
(50, 'Datos de registro en bolsa de empleo ver', 'web', '2019-11-22 22:51:06', '2019-11-22 22:51:06'),
(51, 'Datos de registro en bolsa de empleo editar', 'web', '2019-11-22 22:51:06', '2019-11-22 22:51:06'),
(52, 'Información sobre los hijos ver', 'web', '2019-11-22 22:51:06', '2019-11-22 22:51:06'),
(53, 'Información sobre los hijos editar', 'web', '2019-11-22 22:51:06', '2019-11-22 22:51:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'web', '2019-11-22 22:51:06', '2019-11-22 22:51:06'),
(2, 'Mercadeo', 'web', '2019-11-22 22:51:09', '2019-11-22 22:51:09'),
(3, 'Monitor', 'web', '2019-11-22 22:51:09', '2019-11-22 22:51:09'),
(4, 'Biblioteca', 'web', '2019-11-22 22:51:09', '2019-11-22 22:51:09'),
(5, 'Recepción', 'web', '2019-11-22 22:51:09', '2019-11-22 22:51:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(4, 1),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `active`, `name`, `last_name`, `document_type`, `document_number`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Usuario', 'Prueba', 'C.C', '10098982929', 'angelica1.ramirez@ucp.edu.co', NULL, '$2y$10$eAsrqZvFduA7BfhNi5jvIOYIT9.SknBwIBCT6TG9hIqtg6xbguORu', NULL, '2019-11-22 22:51:02', '2019-11-22 22:51:02'),
(2, 1, 'Morita', 'González', 'C.C', '23948348', 'morita.gonzalez@ucp.edu.co', NULL, '$2y$10$eQHlAYRMw.tiq7Kr/QD7BO3b1MLWLGbneCxkDeA1sx3OqDNVnjngC', NULL, '2019-11-22 22:51:03', '2019-11-22 22:51:03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `columns`
--
ALTER TABLE `columns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `columns_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `graduates`
--
ALTER TABLE `graduates`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_column_id_foreign` (`column_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `columns`
--
ALTER TABLE `columns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de la tabla `graduates`
--
ALTER TABLE `graduates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `columns`
--
ALTER TABLE `columns`
  ADD CONSTRAINT `columns_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_column_id_foreign` FOREIGN KEY (`column_id`) REFERENCES `columns` (`id`);

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
