<?php

use Illuminate\Database\Seeder;
use App\Models\Ignug\State;
use App\Models\Attendance\Catalogue as AttendanceCatalogue;
use App\Models\Ignug\Catalogue as IgnugCatalogue;
use App\Models\Cecy\Catalogue as CecyCatalogue;
use App\Role;
use App\User;
use \App\Models\Ignug\Teacher;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // States
        factory(State::class)->create([
            'code' => '1',
            'name' => 'ACTIVE',
            'state' => 1,
        ]);
        factory(State::class)->create([
            'code' => '2',
            'name' => 'INACTIVE',
            'state' => 1,
        ]);
        factory(State::class)->create([
            'code' => '3',
            'name' => 'DELETED',
            'state' => 1,
        ]);

        // Catalogues
        // Workday Principal
        factory(AttendanceCatalogue::class)->create([
            'code' => 'work',
            'name' => 'Jornada',
            'type' => 'workdays.principal',
            'icon' => 'pi pi-calendar',
            'state_id' => 1,
        ]);

        // Workday Secundary
        factory(AttendanceCatalogue::class)->create([
            'code' => 'lunch',
            'name' => 'Almuerzo',
            'type' => 'workdays.secondary',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);

        // Task Processes
        factory(AttendanceCatalogue::class)->create([
            'code' => 'academic',
            'name' => 'ACADEMICO',
            'type' => 'tasks.process',
            'icon' => 'pi pi-calendar',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'code' => 'administrative',
            'name' => 'ADMINISTRATIVO',
            'type' => 'tasks.process',
            'icon' => 'pi pi-calendar',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'code' => 'entailment',
            'name' => 'VINCULACION',
            'type' => 'tasks.process',
            'icon' => 'pi pi-calendar',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'code' => 'investigation',
            'name' => 'INVESTIGACION',
            'type' => 'tasks.process',
            'icon' => 'pi pi-calendar',
            'state_id' => 1,
        ]);

        // Task Subprocesses academic
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '1',
            'name' => 'IMPARTIR CLASES PRESENCIALES, VIRTUALES O EN LINEA',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '2',
            'name' => 'PREPARACION Y ACTUALIZACION DE CLASES, SEMINARIOS, TALLERES Y OTROS',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '3',
            'name' => 'DISEÑO Y ELABORACION DE GUIAS, MATERIAL DIDACTICO Y SYLLABUS',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '4',
            'name' => 'ORIENTACION Y ACOMPAÑAMIENTO A TRAVES DE TUTORIAS PRESENCIALES O VIRTUALES, INDIVIDUALES O GRUPALES',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '5',
            'name' => 'ELABORACION DE REPORTES DE NIVEL ACADEMICO REFERENTE A EVALUACIONES, TRABAJOS Y RENDIMIENTO DEL ESTUDIANTE',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '6',
            'name' => 'VISITAS DE CAMPO',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '7',
            'name' => 'PREPARACION, ELABORACION, APLICACION Y CALIFICACION DE EXAMENES Y  PRACTICAS ',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);

        // Task Subprocesses administrative
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 4,
            'code' => '1',
            'name' => 'PARTICIPACION EN PROCESOS DEL SISTEMA NACIONAL DE EVALUACION PARA INGRESO A UNIVERSIDADES',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 4,
            'code' => '2',
            'name' => 'ACTIVIDADES DE DIRECCION O GESTION EN SUS DISTINTOS NIVELES DE ORGANIZACION ACADEMICA E INSTITUCIONAL',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 4,
            'code' => '3',
            'name' => 'REUNIONES DE ORGANO COLEGIADO SUPERIOR',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 4,
            'code' => '4',
            'name' => 'DISEÑO DE PROYECTOS DE CARRERAS Y PROGRAMAS DE ESTUDIOS',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 4,
            'code' => '5',
            'name' => 'ACTIVIDADES RELACIONADAS CON LA EVALUACION INSTITUCIONAL EXTERNA',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);

        // Task Subprocesses entailment
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 5,
            'code' => '1',
            'name' => 'DIRECCION SEGUIMIENTO Y EVALUACION DE PRACTICAS PRE PROFESIONALES',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 5,
            'code' => '2',
            'name' => 'DISEÑO E IMPARTICION DE CURSOS DE EDUCACION CONTINUA O DE CAPACITACION Y ACTUALIZACION',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 5,
            'code' => '3',
            'name' => 'PARTICIPACION EN ACTIVIDADES DE PROYECTOS SOCIALES, ARTISTICOS, PRODUCTIVOS Y EMPRESARIALES DE VINCULACION CON LA SOCIEDAD',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 5,
            'code' => '4',
            'name' => 'ELABORACION DE INFORMES DE SEGUIMIENTO DE PROYECTOS DE VINCULACION',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);

        // Task Subprocesses investigation
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 6,
            'code' => '1',
            'name' => 'GESTIONAR PROYECTOS DE INVESTIGACION, COMUNITARIOS Y/O DE EMPRENDIMIENTO',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '2',
            'name' => 'DIRECCION Y TUTORIAS PARA LA ELABORACION DE TRABAJOS PARA LA OBTENCION DE TITULO',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 3,
            'code' => '3',
            'name' => 'DIRECCION Y PARTICIPACION DE PROYECTOS DE INVESTIGACION E INNOVACION BASICA, APLICADA, TECNOLOGICA',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 6,
            'code' => '4',
            'name' => 'REALIZACION DE INVESTIGACION PARA LA RECUPERACION, FORTALECIMIENTO Y POTENCIAC ION DE LOS SABERES ANCESTRALES',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 6,
            'code' => '5',
            'name' => 'PARTICIPACION EN CONGRESOS, SEMINARIOS Y CONFERENCIAS PARA LA PRESENTACION DE AVANCES Y RESULTADOS DE SUS INVESTIGACIONES',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 6,
            'code' => '6',
            'name' => 'DISEÑO, GESTION Y PARTICIPACION EN REDES Y PROGRAMAS DE INVESTIGACION LOCAL NACIONAL E INTERNACIONAL',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 6,
            'code' => '7',
            'name' => 'PARTICIPACION EN COMITES O CONSEJOS ACADEMICOS Y EDITORIALES DE REVISTAS CIENTIFICAS Y ACADEMICAS INDEXADAS, Y DE ALTO IMPACTO CIENTIFICO O ACADEMICO',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);
        factory(AttendanceCatalogue::class)->create([
            'parent_code_id' => 6,
            'code' => '8',
            'name' => 'DIFUSION DE RESULTADOS Y BENEFICIOS SOCIALES DE LA INVESTIGACION, A TRAVES DE PUBLICACIONES, PRODUCCIONES ARTISTICAS, ACTUACIONES, CONCIERTOS, CREACION U ORGANIZACION DE INSTALACIONES Y DE EXPOSICIONES, ENTRE OTROS',
            'type' => 'tasks.activity',
            'icon' => 'pi pi-briefcase',
            'state_id' => 1,
        ]);

        // Ethnic origin
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'INDIGENA',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'AFROECUATORIANO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '3',
            'name' => 'NEGRO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '4',
            'name' => 'MULATO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '5',
            'name' => 'MONTUBIO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '6',
            'name' => 'MESTIZO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '7',
            'name' => 'BLANCO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '8',
            'name' => 'OTRO',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '9',
            'name' => 'NO REGISTRA',
            'type' => 'ethnic_origin',
            'state_id' => 1,
        ]);

        // Sex
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'HOMBRE',
            'type' => 'sex',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'MUJER',
            'type' => 'sex',
            'state_id' => 1,
        ]);
        // Gender
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'MASCULINO',
            'type' => 'gender',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'FEMENINO',
            'type' => 'gender',
            'state_id' => 1,
        ]);

        // Indetification Type
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'CEDULA',
            'type' => 'indetification_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'PASAPORTE',
            'type' => 'indetification_type',
            'state_id' => 1,
        ]);

        // Blood Type
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'A+',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'A-',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '3',
            'name' => 'B+',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '4',
            'name' => 'B-',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '5',
            'name' => 'AB+',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '6',
            'name' => 'AB-',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '7',
            'name' => 'O+',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '8',
            'name' => 'O-',
            'type' => 'blood_type',
            'state_id' => 1,
        ]);

        // career modality
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'PRESENCIAL',
            'type' => 'career_modality',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'SEMI-PRESENCIAL',
            'type' => 'career_modality',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '3',
            'name' => 'DISTANCIA',
            'type' => 'career_modality',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '4',
            'name' => 'DUAL',
            'type' => 'career_modality',
            'state_id' => 1,
        ]);

        // career type
        factory(IgnugCatalogue::class)->create([
            'code' => '1',
            'name' => 'TECNICATURA',
            'type' => 'career_type',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'code' => '2',
            'name' => 'TECNOLOGIA',
            'type' => 'career_type',
            'state_id' => 1,
        ]);

        // location
        factory(IgnugCatalogue::class)->create([
            'code' => 'ec',
            'name' => 'ECUADOR',
            'type' => 'country',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'parent_code_id' => 30,
            'code' => '17',
            'name' => 'PICHINCHA',
            'type' => 'province',
            'state_id' => 1,
        ]);
        factory(IgnugCatalogue::class)->create([
            'parent_code_id' => 30,
            'code' => '1',
            'name' => 'QUITO',
            'type' => 'canton',
            'state_id' => 1,
        ]);

        // roles system
        factory(IgnugCatalogue::class)->create([
            'code' => 'attendance',
            'name' => 'Attendance',
            'type' => 'system',
            'state_id' => 1,
        ]);

        //catalogoCECY
        //catalogue Areas
        factory(CecyCatalogue::class)->create([
            'code' => 'A',
            'name' => 'ADMINISTRACIÓN Y LEGISLACIÓN',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'B',
            'name' => 'AGRONOMÍA',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'C',
            'name' => 'ZOOTECNIA',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'D',
            'name' => 'ALIMENTACIÓN, GASTRONOMÍA Y TURISMO',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'E',
            'name' => 'TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'F',
            'name' => 'FINANZAS, COMERCIO Y VENTAS',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'H',
            'name' => 'CONSTRUCCIÓN E INFRAESTRUCTURA',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'I',
            'name' => 'FORESTAL, ECOLOGÍA Y AMBIENTE',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'J',
            'name' => 'EDUCACIÓN Y CAPACITACIÓN',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'K',
            'name' => 'ELECTRICIDAD Y ELECTRÓNICA',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'L',
            'name' => 'ESPECIES ACUÁTICAS Y PESCA',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'M',
            'name' => 'COMUNICACIÓN Y ARTES GRÁFICAS',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'N',
            'name' => 'MECÁNICA AUTOMOTRIZ',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'O',
            'name' => 'MECÁNICA INDUSTRIAL Y MINERÍA',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'P',
            'name' => 'PROCESOS INDUSTRIALES',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'Q',
            'name' => 'TRANSPORTE Y LOGÍSTICA',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'R',
            'name' => 'ARTES Y ARTESANÍA',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'S',
            'name' => 'SERVICIOS SOCIOCULTURALES Y A LA COMUNIDAD',
            'type' => 'Areas',
            'state_id' => 1,
            ]);
            factory(CecyCatalogue::class)->create([
            'code' => 'T',
            'name' => 'INDUSTRIA AGROPECUARIA ',
            'type' => 'Areas',
            'state_id' => 1,
            ]);

        //Tipo_participante
        factory(CecyCatalogue::class)->create([
            'name' => 'Adultos',
            'type' => 'participant_type',
            'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
            'name' => 'Estudiantes',
            'type' => 'participant_type',
            'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
            'name' => 'Profesores',
            'type' => 'Participant_type',
            'state_id' => 1,
        ]);

        //catalogue Modalidad
        factory(CecyCatalogue::class)->create([
          'name' => 'PRESENCIAL',
          'type' => 'Modality',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'name' => 'DUAL',
          'type' => 'Modality',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'name' => 'VIRTUAL',
          'type' => 'Modality',
          'state_id' => 1,
        ]);

        //catalogue levels
        factory(CecyCatalogue::class)->create([
            'code' => '',
            'name' => 'Primero',
            'type' => 'Nivel_curso',
            'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
            'code' => '',
            'name' => 'Segundo',
            'type' => 'Nivel_curso',
            'state_id' => 1,
        ]);

        //catalogue schedule
        factory(CecyCatalogue::class)->create([
            'code' => '',
            'name' => '13:00 - 15:00',
            'type' => 'Horas_horario',
            'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
            'code' => '',
            'name' => '15:00 - 17:00',
            'type' => 'Horas_horario',
            'state_id' => 1,
        ]);

        //catalogue course_type
        factory(CecyCatalogue::class)->create([
            'code' => '',
            'name' => 'Administrativo',
            'type' => 'Tipo_curso',
            'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
            'code' => '',
            'name' => 'Técnico',
            'type' => 'Tipo_curso',
            'state_id' => 1,
        ]);

        //catalogue academic_period
        factory(CecyCatalogue::class)->create([
            'code' => '',
            'name' => 'PRIMERO',
            'type' => 'Periodo_academico',
            'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
            'code' => '',
            'name' => 'SEGUNDO',
            'type' => 'Periodo_academico',
            'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
            'code' => '',
            'name' => 'TERCERO',
            'type' => 'Periodo_academico',
            'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
            'code' => '',
            'name' => 'CUARTO',
            'type' => 'Periodo_academico',
            'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
            'code' => '',
            'name' => 'QUINTO',
            'type' => 'Periodo_academico',
            'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
            'code' => '',
            'name' => 'SEXTO',
            'type' => 'Periodo_academico',
            'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
            'code' => '',
            'name' => 'SEPTIMO',
            'type' => 'Periodo_academico',
            'state_id' => 1,
        ]);


        factory(Role::class)->create([
            'code' => '1',
            'name' => 'DOCENTE',
            'system_id' => 1,
            'state_id' => 1,
        ]);
        factory(Role::class)->create([
            'code' => '2',
            'name' => 'ADMINISTRATIVO',
            'system_id' => 1,
            'state_id' => 1,
        ]);
        //ROLE CECY
        factory(Role::class)->create([
            'code' => '3',
            'name' => 'PARTICIPANTE',
            'system_id' => 1,
            'state_id' => 1,
        ]);

        //USERS CECY START
        factory(User::class)->create([
            'identification' => '1716346802',
            'postal_code' => '170308',
            'first_name' => 'HECTOR',
            'second_name' => 'HECTOR',
            'first_lastname' => 'AREVALO',
            'second_lastname' => 'AREVALO',
            'personal_email' => 'arevalo@mail.com',
            'birthdate' => '13-02-1996',
            'user_name' => 'hector_arevalo',
            'email' => 'harevalo@yavirac.edu.ec',
          //  'email_verified_at' => '',
            'password' => '123456',
            'state_id' => 1,
          //  'roles' => 3,
          //  'attendances' => '',
            'ethnic_origin_id'=>36,
            'location_id'=>62,
            'identification_type_id'=>44,
            'sex_id'=>40,
            'gender_id'=>42,
            'blood_type_id'=>52,
        ]);
        factory(User::class)->create([
            'identification' => '1755098736',
            'postal_code' => '170308',
            'first_name' => 'JACQUELIN',
            'second_name' => 'JACQUELIN',
            'first_lastname' => 'IBAÑEZ',
            'second_lastname' => 'IBAÑEZ',
            'personal_email' => 'jacquelin@mail.com',
            'birthdate' => '23-04-1995',
            'user_name' => 'Jackeline_ibañez',
            'email' => 'jel.ibanez@yavirac.edu.ec',
          //  'email_verified_at' => '',
            'password' => '123456',
            'state_id' => 1,
          //  'roles' => 3,
          //  'attendances' => '',
            'ethnic_origin_id'=>36,
            'location_id'=>62,
            'identification_type_id'=>44,
            'sex_id'=>41,
            'gender_id'=>43,
            'blood_type_id'=>52,
        ]);
        //USERS CECY END

        //B epecialidad
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 2,
          'code' => 'B.1',
          'name' => 'Agricultura Orgánica',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 2,
          'code' => 'B.2',
          'name' => 'Semillas',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 2,
          'code' => 'B.3',
          'name' => 'Semillas',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 2,
          'code' => 'B.4',
          'name' => 'Cultivos (Siembra, Cosecha, Postcosecha, Manejo Nutricional de las Plantas)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 2,
          'code' => 'B.5',
          'name' => 'Leguminosas',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 2,
          'code' => 'B.7',
          'name' => 'Floricultura',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 2,
          'code' => 'B.8',
          'name' => 'Fruticultura',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 2,
          'code' => 'B.9',
          'name' => 'Jardinería y Poda',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 2,
          'code' => 'B.10',
          'name' => 'Horticultura',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 2,
          'code' => 'B.11',
          'name' => 'Sanidad Vegetal (Control Fitosanitario, Control de Plagas y Malezas)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 2,
          'code' => 'B.12',
          'name' => 'Suelos y Agua (Manejo de Insumos Agrícolas, Fertilizantes, Riego, Abonos)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 2,
          'code' => 'B.13',
          'name' => 'Viticultura y Enología',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
  //E epecialidad
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.1',
          'name' => 'Servicios Telemáticos y Generados de Valor Agregado',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.2',
          'name' => 'Telecomunicaciones (Comunicación Telefónica, Telegráfica, Satelital)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.3',
          'name' => 'Instalación, Mantenimiento y Reparación de Fibra Óptica',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.4',
          'name' => 'Enlace de datos',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.5',
          'name' => 'Transmisión, Emisión y Recepción de Información',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.6',
          'name' => 'Servicios de Comunicación en Voz y Datos',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.7',
          'name' => 'Base de Datos Relacional (Oracle, Sybase, Sql, Server, Db2, Access, Informix, Datacom, Unicenter Tng)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.7',
          'name' => 'Base de Datos Relacional (Oracle, Sybase, Sql, Server, Db2, Access, Informix, Datacom, Unicenter Tng)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.7',
          'name' => 'Base de Datos Relacional (Oracle, Sybase, Sql, Server, Db2, Access, Informix, Datacom, Unicenter Tng)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.8',
          'name' => 'Control de Calidad (Auditoría Computacional, Evaluación de Software, Sistemas de Seguridad)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.9',
          'name' => 'Hardware y Equipos (Arquitectura de Pc, Mantenimiento, Configuración)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.10',
          'name' => 'Internet E Intranet(Administración de Firewall, Correo Electrónico, Navegadores)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.11',
          'name' => 'Programas de Escritorio (Office, Hojas Electrónicas, Procesadores de Texto, Power Point), Computación Básica U Operación de Computadoras.',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.12',
          'name' => 'Software Especializado (Flex, Smartsuit, Autocad, Softland, Arc View, 3d)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.13',
          'name' => 'Redes (Comunidades de Redes Tecnológicas, Servicios, Protocolos, Señalización, Armado, Operación, Mantenimiento y Conectividad) ',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.14',
          'name' => 'Sistema Operativo (Ms-Dos, Windows 3xx, 95, 98, 2000, Vms, Computación  Básica u Operación de Comput, Solaris, Novell, Unix)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.15',
          'name' => 'Análisis de Sistemas ( Proyectos Informáticos, Problemas, Modelamiento de Información,  Reingeniería)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.16',
          'name' => 'Lenguaje de Programación (Pascal, Básic, Cobol, Visual Básic, C+++, Power Builder, Clipper, Java, PHP, Puntonet)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 5,
          'code' => 'E.17',
          'name' => 'Codificación y Decodificación de Señales en Medios de Comunicación',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
//I Especialidad
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 8,
          'code' => 'I.1',
          'name' => 'Contaminación Ambiental',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 8,
          'code' => 'I.2',
          'name' => 'Gestión e Impacto Ambiental',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 8,
          'code' => 'I.3',
          'name' => 'Manejo y Conservación de Recursos Naturales',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 8,
          'code' => 'I.4',
          'name' => 'Producción Limpia',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 8,
          'code' => 'I.5',
          'name' => 'Tratamiento de Residuos (Líquidos, Sólidos, Gaseosos)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 8,
          'code' => 'I.6',
          'name' => 'Remediación Ambiental',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 8,
          'code' => 'I.7',
          'name' => 'Economía Ambiental',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 8,
          'code' => 'I.8',
          'name' => 'Combate de Incendios Forestal',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 8,
          'code' => 'I.9',
          'name' => 'Plantación, Conservación y Explotación de especies forestales (Poda, Raleo Forestación, Reforestación, Agroforestería, Viveros)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 8,
          'code' => 'I.10',
          'name' => 'Sanidad  y Manejo Forestal',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 8,
          'code' => 'I.11',
          'name' => 'Silvicultura',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 8,
          'code' => 'I.12',
          'name' => 'Geofísica (Sismología, Meteorología, Climatología)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);

        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 8,
          'code' => 'I.13',
          'name' => 'Energías Alternativas',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
      //J Especialidad
      factory(CecyCatalogue::class)->create([
        'parent_code_id' => 9,
        'code' => 'J.1',
        'name' => 'Capacitación (Identificación de Necesidades, Procesos de Capacitación Continua y por Competencias Laborales, Evaluación y Seguimiento)',
        'type' => 'Especialiadad',
        'state_id' => 1,
      ]);
      factory(CecyCatalogue::class)->create([
        'parent_code_id' => 9,
        'code' => 'J.2',
        'name' => 'Diseño Educativo y Curricular (Elaboración de Proyectos Educativos, Planes y Programas de Educación, Capacitación y Formación)',
        'type' => 'Especialiadad',
        'state_id' => 1,
      ]);
      factory(CecyCatalogue::class)->create([
        'parent_code_id' => 9,
        'code' => 'J.3',
        'name' => 'Evaluación del Aprendizaje',
        'type' => 'Especialiadad',
        'state_id' => 1,
      ]);
      factory(CecyCatalogue::class)->create([
        'parent_code_id' => 9,
        'code' => 'J.4',
        'name' => 'Formación de Instructores, Facilitadores, Monitores, Maestros, Guías, Formadores',
        'type' => 'Especialiadad',
        'state_id' => 1,
      ]);
      factory(CecyCatalogue::class)->create([
        'parent_code_id' => 9,
        'code' => 'J.5',
        'name' => 'Medios y Materiales Didácticos (Diseño, Elaboración)',
        'type' => 'Especialiadad',
        'state_id' => 1,
      ]);
      factory(CecyCatalogue::class)->create([
        'parent_code_id' => 9,
        'code' => 'J.6',
        'name' => 'Metodología y Técnica De Aprendizaje (Pre Básica, Básica, Media,  Diferencial, Adulto, Superior)',
        'type' => 'Especialiadad',
        'state_id' => 1,
      ]);
      factory(CecyCatalogue::class)->create([
        'parent_code_id' => 9,
        'code' => 'J.7',
        'name' => 'Orientación Vocacional',
        'type' => 'Especialiadad',
        'state_id' => 1,
      ]);
//L especialidad
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 11,
          'code' => 'L.1',
          'name' => 'Biología Marina (Selección Genética de Especies Acuáticas)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 11,
          'code' => 'L.2',
          'name' => 'Manejo de Especies Acuáticas',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 11,
          'code' => 'L.3',
          'name' => 'Cultivo de Especies Acuáticas',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 11,
          'code' => 'L.4',
          'name' => 'Pesca Artesanal y Buceo',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 11,
          'code' => 'L.5',
          'name' => 'Pesca Industrial',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 11,
          'code' => 'L.6',
          'name' => 'Tratamiento de Especies Acuáticas',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 11,
          'code' => 'L.7',
          'name' => 'Patologías de Especies Acuáticas',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 11,
          'code' => 'L.8',
          'name' => 'Piscicultura (Producción de Peces)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
//N especialidad
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 13,
          'code' => 'N.1',
          'name' => 'Ajuste y Mantenimiento de Motores',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 13,
          'code' => 'N.2',
          'name' => 'Carrocería (Mantenimiento, Reparación, Enderezada y Pintura)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 13,
          'code' => 'N.3',
          'name' => 'Diagnóstico y Reparación de Sistemas Automotrices',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 13,
          'code' => 'N.4',
          'name' => 'Interpretación de Catálogos y Diagramas',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 13,
          'code' => 'N.5',
          'name' => 'Mecánica General (Básica)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 13,
          'code' => 'N.6',
          'name' => 'Sistemas de Dirección, Frenos, Suspensión, Transmisión',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 13,
          'code' => 'N.7',
          'name' => 'Vulcanización (Montaje y Desmontaje Neumáticos, Balanceo de Ruedas, etc.)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
//O Especialidad
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.1',
          'name' => 'Construcción y Reparación de Hornos',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.2',
          'name' => 'Exploración y Explotación Minera (Extracción, Perforación de Cobre, Hierro, Petróleo, Otros)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.3',
          'name' => 'Forja (Fabricación de Piezas Mediante Calor y Compresión)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.4',
          'name' => 'Fresado (Fabricación de Piezas, Engranajes, etc., Mediante Fresadora)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.5',
          'name' => 'Fundición (Fabricación de Piezas Mediante la Fusión de Metales)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.6',
          'name' => 'Matricería (Fabricación de Moldes y Matrices de Piezas en Serie)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.7',
          'name' => 'Mecánica de Banco (Fabricación de Piezas Mediante Herramientas de Mano)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.8',
          'name' => 'Metalmecánica Metalurgia (Estructuras Metálicas, Autopartes a fin de Obtener Plantas de Proceso Llave en Mano, Superestructuras, Equipos con Alto Grado de Automatización y Componente Tecnológico)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.9',
          'name' => 'Balance Metalúrgico (Preparación de Muestras, Análisis Químico y Balance de Materiales)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.10',
          'name' => 'Geología (Mineralogía, Petrología, Cristalografía, etc.)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.11',
          'name' => 'Rectificación (Terminación de Piezas y Medidas Mediante Abrasivos)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.12',
          'name' => 'Soldadura (Eléctrica y Oxigas, Radiografía, etc.)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.13',
          'name' => 'Tornería (Fabricación de Piezas y Partes Mediante Torno)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.14',
          'name' => 'Tratamientos Térmicos (Mejoramiento de Propiedades de los Metales Mediante Calor y Frío)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.15',
          'name' => 'Hidráulica',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 14,
          'code' => 'O.15',
          'name' => 'Explosivos',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        // Q Especialidad
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 16,
          'code' => 'Q.1',
          'name' => 'Conducción de Vehículos Terrestres',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 16,
          'code' => 'Q.3',
          'name' => 'Mantenimiento de Aeronaves y Naves',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 16,
          'code' => 'Q.4',
          'name' => 'Transporte de Carga y de Pasajeros (Aéreo, Fluvial, Marítimo, Terrestre)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 16,
          'code' => 'Q.5',
          'name' => 'Aeronáutica (Control de Operaciones, Tránsito Aéreo, Diseño y Construcción de Aeronaves, etc.)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 16,
          'code' => 'Q.6',
          'name' => 'Pilotaje  y Técnicas de Navegación (Aéreo, Fluvial, Marítimo, Visual,  Instrumental, y/o Radar, etc.)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 16,
          'code' => 'Q.7',
          'name' => 'Logística Integral (Diseño, Producción, Entrega y Uso de un Producto o Servicio en el Mercado)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 16,
          'code' => 'Q.8',
          'name' => 'Cadenas de Abastecimiento (Información, Trazabilidad, Integración, Gestión de Nodos Logísticos Productivos Locales, Centros de Distribución Logística Internacional)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 16,
          'code' => 'Q.9',
          'name' => 'Manejo Integral de Bodegas y Almacenes',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 16,
          'code' => 'Q.10',
          'name' => 'Sistemas de Información Geográfica y Rutas',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 16,
          'code' => 'Q.10',
          'name' => 'Sistemas de Información Geográfica y Rutas',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 16,
          'code' => 'Q.11',
          'name' => 'Geodesia (Agrimensura, Cartografía, Fotogrametría, Topografía)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        //T especialidad
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 19,
          'code' => 'T.1',
          'name' => 'Transformación de Productos, Subproductos (Agrícola, Ganadero, Pesca, Forestal)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(CecyCatalogue::class)->create([
          'parent_code_id' => 19,
          'code' => 'T.2',
          'name' => 'Conglomerados Agroindustriales (Cárnico, Madera, Lácteos, Frutas y Vegetales, Pescado, etc.)',
          'type' => 'Especialiadad',
          'state_id' => 1,
        ]);
        factory(User::class, 100)->create()->each(function ($user) {
            $user->teacher()->save(factory(Teacher::class)->make());
            $user->roles()->attach(1);
        });
        // factory(App\Models\JobBoard::class, 10)->create();

      /*  factory(App\Models\Ignug\Catalogue::class)->create([
            'course_code' => 'YEC-ST',//startted
            'course_name' => 'STARTER',
            'cost' => '',
            'photo'  => 'imagen.jpg',
            'resumen' => '',
            'lasting_hours' => 80,
            'modality_id' =>54,
            'course_capacity_size' => 30,
            'for_free' => true,
            'state_id' => 1,
           'course_observation' => '',
            'objective' => '',
            'participant_type_id' => 63,
           'area_id' =>''
        ]);*/

        /*
            drop schema if exists attendance cascade;
            drop schema if exists ignug cascade;
            drop schema if exists job_board cascade;
            drop schema if exists web cascade;

            create schema attendance;
            create schema ignug;
            create schema job_board;
            create schema web;
        */
    }
}
