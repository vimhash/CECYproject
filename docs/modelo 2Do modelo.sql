-- Database generated with pgModeler (PostgreSQL Database Modeler).
-- PostgreSQL version: 9.2
-- Project Site: pgmodeler.com.br
-- Model Author: ---

SET check_function_bodies = false;
-- ddl-end --


-- Database creation must be done outside an multicommand file.
-- These commands were put in this file only for convenience.
-- -- object: tesis | type: DATABASE --
-- CREATE DATABASE tesis
-- ;
-- -- ddl-end --
-- 

-- object: public."Curso" | type: TABLE --
CREATE TABLE public."Curso"(
	codigo_curso varchar(20) NOT NULL,
	nombre_curso varchar(20),
	costo decimal(3,2),
	foto text,
	resumen varchar(255),
	duracion_horas varchar(25),
	id_modalidad integer,
	capacidad_del_curso integer,
	gratuito boolean,
	estado int2,
	observacion_curso varchar(255),
	objetivo varchar(255),
	tipo_participante varchar(100),
	id_area_especialidad integer,
	id_subtemas_curso integer,
	niveles varchar(150),
	recursos_requeridos_instalacion varchar(150),
	horas_practicas integer,
	horas_teoricas integer,
	recursos_requeridos_practica varchar(150),
	recursos_requeridos_teoricos varchar(150),
	"estrategias_enseñanza_aprendizaje" varchar(150),
	id_persona_propuesta integer,
	fecha_propuesta date,
	fecha_aprobacion date,
	local_propuesta_a_dictar varchar(150),
	id_horario_propuesta integer,
	proyecto_curso varchar(150),
	id_tipo_curso integer,
	CONSTRAINT codigo_curso PRIMARY KEY (codigo_curso)

);
-- ddl-end --
-- object: public."Localizaciones" | type: TABLE --
CREATE TABLE public."Localizaciones"(
	id serial,
	nombre varchar(150),
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Datos_Departamento" | type: TABLE --
CREATE TABLE public."Datos_Departamento"(
	id serial,
	nombre varchar(150),
	direccion varchar(150),
	id_persona_encargada integer,
	id_canton integer
);
-- ddl-end --
-- object: public."Usuario" | type: TABLE --
CREATE TABLE public."Usuario"(
	id serial,
	apellidos_nombres varchar(200),
	numero_identificacion varchar(20),
	direccion varchar(200),
	telefono varchar(15),
	fecha_nacimiento date,
	correo_electronico varchar(150),
	"contraseña" varchar(150),
	foto text,
	id_tipo_identificacion integer,
	id_sexo integer,
	id_etnia integer,
	celular varchar(15),
	id_nivel_instruccion integer,
	CONSTRAINT pk_usuario PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Rol" | type: TABLE --
CREATE TABLE public."Rol"(
	id serial,
	nombre varchar(150),
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
COMMENT ON TABLE public."Rol" IS 'estudiantes, docentes, ';
-- ddl-end --
-- ddl-end --

-- object: public."Persona_Curso_Prerequisito" | type: TABLE --
CREATE TABLE public."Persona_Curso_Prerequisito"(
	id serial,
	id_persona_participante integer,
	id_curso_prerequisito integer,
	pago_matricula boolean,
	numero_certificado varchar(155),
	fecha_retiro date,
	certificado_retirado boolean,
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Informacion_Laboral" | type: TABLE --
CREATE TABLE public."Informacion_Laboral"(
	id serial,
	empresa_nombre varchar(150),
	empresa_direccion varchar(150),
	empresa_correo varchar(150),
	"empresa_teñefono" varchar(150),
	empresa_actividad varchar(150),
	empresa_resumen varchar(255),
	empresa_auspiciado boolean,
	nombre_auspiciante varchar,
	id_persona_instructor integer,
	conocimiento_curso varchar(150),
	recomendacion_curso varchar(150),
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Detalles_curso" | type: TABLE --
CREATE TABLE public."Detalles_curso"(
	id serial,
	codigo_curso varchar(20),
	fecha_inicio date,
	fecha_fin_real date,
	id_persona_instructor integer,
	estado_curso varchar(10),
	id_horario integer,
	local_donde_se_dicta varchar(50),
	fecha_fin_prevista date,
	observacion_curso varchar(255),
	id_matricula integer,
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Convenio" | type: TABLE --
CREATE TABLE public."Convenio"(
	id serial,
	nombre varchar(150),
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Empresa_convenio" | type: TABLE --
CREATE TABLE public."Empresa_convenio"(
	id serial,
	id_convenio integer,
	objeto varchar(255),
	fecha_firma_convenio date,
	fecha_caducidad date,
	persona_representante varchar(150),
	razon_social varchar(200),
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Publico_Objetivo" | type: TABLE --
CREATE TABLE public."Publico_Objetivo"(
	id serial,
	id_poblacion integer,
	codigo_curso varchar(20),
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Necesidades_Propuesta" | type: TABLE --
CREATE TABLE public."Necesidades_Propuesta"(
	id serial,
	id_necesidad integer,
	codigo_curso varchar(20),
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Propuesta_Curso" | type: TABLE --
CREATE TABLE public."Propuesta_Curso"(
	id serial,
	id_persona_instructor integer,
	codigo_curso varchar(20),
	id_tipo_curso integer,
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Subtemas_Curso" | type: TABLE --
CREATE TABLE public."Subtemas_Curso"(
	id serial,
	nombre varchar(50),
	codigo_curso varchar(20),
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Contenido_Curso" | type: TABLE --
CREATE TABLE public."Contenido_Curso"(
	id serial,
	nombre varchar(50),
	codigo_curso varchar(20),
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Area_Especialidad" | type: TABLE --
CREATE TABLE public."Area_Especialidad"(
	id serial,
	nombre_area varchar(150),
	id_especialidad integer,
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Perfil_instructor_Curso" | type: TABLE --
CREATE TABLE public."Perfil_instructor_Curso"(
	id serial,
	codigo_curso varchar(20),
	conocimientos_requeridos varchar(150),
	experiencias_requeridos varchar(150),
	habilidades_requeridos varchar(150),
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Detalle_Horario" | type: TABLE --
CREATE TABLE public."Detalle_Horario"(
	id serial,
	nombre varchar(150),
	dia varchar(25),
	hora integer,
	id_horario integer,
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Horario" | type: TABLE --
CREATE TABLE public."Horario"(
	id serial,
	nombre varchar(150),
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Curso_Instructores" | type: TABLE --
CREATE TABLE public."Curso_Instructores"(
	id serial,
	estado varchar(10),
	id_persona_instructor integer,
	codigo_curso varchar(20),
	id_detalle_curso integer,
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Matricula" | type: TABLE --
CREATE TABLE public."Matricula"(
	id serial,
	fecha_matricula date,
	id_persona_participante integer,
	nota_final numeric,
	aprobado boolean,
	estado varchar(10),
	CONSTRAINT id PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Usuario_Rol" | type: TABLE --
CREATE TABLE public."Usuario_Rol"(
	id serial,
	id_rol int2,
	id_usuario inet
);
-- ddl-end --
-- object: public."Catalogo" | type: TABLE --
CREATE TABLE public."Catalogo"(
	id int2,
	nombre varchar,
	tipo varchar
);
-- ddl-end --
COMMENT ON TABLE public."Catalogo" IS 'Tipo Sexo = M o F; Etnia = meztiso, otros; Matricula primera, segunda; especialidadesCurso ,Modalidad presencial  virtual, Cursos gratutitos de paga, Necesidades ,';
-- ddl-end --
-- ddl-end --

-- object: public."Teachers" | type: TABLE --
CREATE TABLE public."Teachers"(
	id serial,
	id_usuario int2
);
-- ddl-end --
-- object: public."Estudiantes" | type: TABLE --
CREATE TABLE public."Estudiantes"(
	id serial,
	id_usuario int2,
	tipo_persona int2,
	CONSTRAINT pk_estudiantes PRIMARY KEY (id)

);
-- ddl-end --
-- object: public."Estados" | type: TABLE --
CREATE TABLE public."Estados"(
	id serial,
	nombre varchar
);
-- ddl-end --
-- object: public."Requisitos_Curso" | type: TABLE --
CREATE TABLE public."Requisitos_Curso"(
	id serial,
	id_requisito int2,
	id_curso int2,
	tipo_id inet,
	CONSTRAINT pk_requisito PRIMARY KEY (id)

);
-- ddl-end --
-- object: id_tipo_curso | type: CONSTRAINT --
ALTER TABLE public."Curso" ADD CONSTRAINT id_tipo_curso FOREIGN KEY (id_tipo_curso)
REFERENCES public."Catalogo" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_modalidad | type: CONSTRAINT --
ALTER TABLE public."Curso" ADD CONSTRAINT id_modalidad FOREIGN KEY (id_modalidad)
REFERENCES public."Catalogo" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_area_especialidad | type: CONSTRAINT --
ALTER TABLE public."Curso" ADD CONSTRAINT id_area_especialidad FOREIGN KEY (id_area_especialidad)
REFERENCES public."Area_Especialidad" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_horario_propuesta | type: CONSTRAINT --
ALTER TABLE public."Curso" ADD CONSTRAINT id_horario_propuesta FOREIGN KEY (id_horario_propuesta)
REFERENCES public."Horario" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fk_estado | type: CONSTRAINT --
ALTER TABLE public."Curso" ADD CONSTRAINT fk_estado FOREIGN KEY (estado)
REFERENCES public."Estados" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_persona_encargada | type: CONSTRAINT --
ALTER TABLE public."Datos_Departamento" ADD CONSTRAINT id_persona_encargada FOREIGN KEY (id_persona_encargada)
REFERENCES public."Usuario" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fk_localizacion | type: CONSTRAINT --
ALTER TABLE public."Datos_Departamento" ADD CONSTRAINT fk_localizacion FOREIGN KEY (id_canton)
REFERENCES public."Localizaciones" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fk_sexo | type: CONSTRAINT --
ALTER TABLE public."Usuario" ADD CONSTRAINT fk_sexo FOREIGN KEY (id_sexo)
REFERENCES public."Catalogo" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fk_etnia | type: CONSTRAINT --
ALTER TABLE public."Usuario" ADD CONSTRAINT fk_etnia FOREIGN KEY (id_etnia)
REFERENCES public."Catalogo" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "fk_nivelInstruccion" | type: CONSTRAINT --
ALTER TABLE public."Usuario" ADD CONSTRAINT "fk_nivelInstruccion" FOREIGN KEY (id_nivel_instruccion)
REFERENCES public."Catalogo" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_persona_instructor | type: CONSTRAINT --
ALTER TABLE public."Informacion_Laboral" ADD CONSTRAINT id_persona_instructor FOREIGN KEY (id_persona_instructor)
REFERENCES public."Usuario" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: codigo_curso | type: CONSTRAINT --
ALTER TABLE public."Detalles_curso" ADD CONSTRAINT codigo_curso FOREIGN KEY (codigo_curso)
REFERENCES public."Curso" (codigo_curso) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_horario | type: CONSTRAINT --
ALTER TABLE public."Detalles_curso" ADD CONSTRAINT id_horario FOREIGN KEY (id_horario)
REFERENCES public."Horario" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fkmatricula | type: CONSTRAINT --
ALTER TABLE public."Detalles_curso" ADD CONSTRAINT fkmatricula FOREIGN KEY (id_matricula)
REFERENCES public."Matricula" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_convenio | type: CONSTRAINT --
ALTER TABLE public."Empresa_convenio" ADD CONSTRAINT id_convenio FOREIGN KEY (id_convenio)
REFERENCES public."Convenio" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_poblacion | type: CONSTRAINT --
ALTER TABLE public."Publico_Objetivo" ADD CONSTRAINT id_poblacion FOREIGN KEY (id_poblacion)
REFERENCES public."Catalogo" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: codigo_curso | type: CONSTRAINT --
ALTER TABLE public."Publico_Objetivo" ADD CONSTRAINT codigo_curso FOREIGN KEY (codigo_curso)
REFERENCES public."Curso" (codigo_curso) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_necesidad | type: CONSTRAINT --
ALTER TABLE public."Necesidades_Propuesta" ADD CONSTRAINT id_necesidad FOREIGN KEY (id_necesidad)
REFERENCES public."Catalogo" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: codigo_curso | type: CONSTRAINT --
ALTER TABLE public."Necesidades_Propuesta" ADD CONSTRAINT codigo_curso FOREIGN KEY (codigo_curso)
REFERENCES public."Curso" (codigo_curso) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_persona_instructor | type: CONSTRAINT --
ALTER TABLE public."Propuesta_Curso" ADD CONSTRAINT id_persona_instructor FOREIGN KEY (id_persona_instructor)
REFERENCES public."Usuario" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: codigo_curso | type: CONSTRAINT --
ALTER TABLE public."Propuesta_Curso" ADD CONSTRAINT codigo_curso FOREIGN KEY (codigo_curso)
REFERENCES public."Curso" (codigo_curso) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_tipo_curso | type: CONSTRAINT --
ALTER TABLE public."Propuesta_Curso" ADD CONSTRAINT id_tipo_curso FOREIGN KEY (id_tipo_curso)
REFERENCES public."Catalogo" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: codigo_curso | type: CONSTRAINT --
ALTER TABLE public."Subtemas_Curso" ADD CONSTRAINT codigo_curso FOREIGN KEY (codigo_curso)
REFERENCES public."Curso" (codigo_curso) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: codigo_curso | type: CONSTRAINT --
ALTER TABLE public."Contenido_Curso" ADD CONSTRAINT codigo_curso FOREIGN KEY (codigo_curso)
REFERENCES public."Curso" (codigo_curso) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_especialidad | type: CONSTRAINT --
ALTER TABLE public."Area_Especialidad" ADD CONSTRAINT id_especialidad FOREIGN KEY (id_especialidad)
REFERENCES public."Catalogo" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: codigo_curso | type: CONSTRAINT --
ALTER TABLE public."Perfil_instructor_Curso" ADD CONSTRAINT codigo_curso FOREIGN KEY (codigo_curso)
REFERENCES public."Curso" (codigo_curso) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_horario | type: CONSTRAINT --
ALTER TABLE public."Detalle_Horario" ADD CONSTRAINT id_horario FOREIGN KEY (id_horario)
REFERENCES public."Horario" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: codigo_curso | type: CONSTRAINT --
ALTER TABLE public."Curso_Instructores" ADD CONSTRAINT codigo_curso FOREIGN KEY (codigo_curso)
REFERENCES public."Curso" (codigo_curso) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_detalle_curso | type: CONSTRAINT --
ALTER TABLE public."Curso_Instructores" ADD CONSTRAINT id_detalle_curso FOREIGN KEY (id_detalle_curso)
REFERENCES public."Detalles_curso" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_persona_instructor | type: CONSTRAINT --
ALTER TABLE public."Curso_Instructores" ADD CONSTRAINT id_persona_instructor FOREIGN KEY (id_persona_instructor)
REFERENCES public."Usuario" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: id_persona_participante | type: CONSTRAINT --
ALTER TABLE public."Matricula" ADD CONSTRAINT id_persona_participante FOREIGN KEY (id_persona_participante)
REFERENCES public."Usuario" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "Usuario_rol." | type: CONSTRAINT --
ALTER TABLE public."Usuario_Rol" ADD CONSTRAINT "Usuario_rol." FOREIGN KEY (id_usuario)
REFERENCES public."Usuario" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: rol_usuario | type: CONSTRAINT --
ALTER TABLE public."Usuario_Rol" ADD CONSTRAINT rol_usuario FOREIGN KEY (id_rol)
REFERENCES public."Rol" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fk_usuario | type: CONSTRAINT --
ALTER TABLE public."Teachers" ADD CONSTRAINT fk_usuario FOREIGN KEY (id_usuario)
REFERENCES public."Usuario" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fk_usuario | type: CONSTRAINT --
ALTER TABLE public."Estudiantes" ADD CONSTRAINT fk_usuario FOREIGN KEY (id_usuario)
REFERENCES public."Usuario" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fp_persona | type: CONSTRAINT --
ALTER TABLE public."Estudiantes" ADD CONSTRAINT fp_persona FOREIGN KEY (tipo_persona)
REFERENCES public."Catalogo" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fk_pre_requisito | type: CONSTRAINT --
ALTER TABLE public."Requisitos_Curso" ADD CONSTRAINT fk_pre_requisito FOREIGN KEY (id_requisito)
REFERENCES public."Curso" (codigo_curso) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fk_asignatura | type: CONSTRAINT --
ALTER TABLE public."Requisitos_Curso" ADD CONSTRAINT fk_asignatura FOREIGN KEY (id_curso)
REFERENCES public."Curso" (codigo_curso) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fk_tipo | type: CONSTRAINT --
ALTER TABLE public."Requisitos_Curso" ADD CONSTRAINT fk_tipo FOREIGN KEY (tipo_id)
REFERENCES public."Catalogo" (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --



