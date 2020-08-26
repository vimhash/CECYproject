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
        /*factory(IgnugCatalogue::class)->create([
          'code' => 'T',
          'name' => 'INDUSTRIA AGROPECUARIA ',
          'type' => 'Especialidad',
          'state_id' => 1,
        ]);*/

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
        //ROLE CECY START
        factory(Role::class)->create([
            'code' => '3',
            'name' => 'PARTICIPANTE',
            'system_id' => 1,
            'state_id' => 1,
        ]);
        //ROLE CECY END
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
