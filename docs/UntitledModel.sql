CREATE TABLE "additional_informations" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.additional_informations_id_seq'::regclass),
  "company_name" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  "company_address" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "company_phone" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "company_activity" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "company_sponsor" bool NOT NULL,
  "name_contact" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "know_course" json NOT NULL,
  "course_follow" json NOT NULL,
  "works" bool NOT NULL,
  "state_id" int8 NOT NULL,
  "registration_id" int8 NOT NULL,
  "level_instruction" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "additional_informations_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "additional_informations" OWNER TO "postgres";

CREATE TABLE "agreement_companies" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.agreement_companies_id_seq'::regclass),
  "agreement_id" int8 NOT NULL,
  "state_id" int8 NOT NULL,
  "objective" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "date_agreement_signature" date NOT NULL,
  "expiry_date" date NOT NULL,
  "representative" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "social_reason" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "agreement_companies_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "agreement_companies" OWNER TO "postgres";

CREATE TABLE "agreements" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.agreements_id_seq'::regclass),
  "name" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "state_id" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "agreements_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "agreements" OWNER TO "postgres";

CREATE TABLE "attendances" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.attendances_id_seq'::regclass),
  "state_id" int8 NOT NULL,
  "duration" int4 NOT NULL,
  "date" date NOT NULL,
  "type_id" time(0) NOT NULL,
  "detail_registration_id" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "attendances_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "attendances" OWNER TO "postgres";

CREATE TABLE "authorities" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.authorities_id_seq'::regclass),
  "user_id" int8 NOT NULL,
  "state_id" int8 NOT NULL,
  "status_id" int8 NOT NULL,
  "position_id" int8 NOT NULL,
  "institution_id" int8 NOT NULL,
  "start_position" date NOT NULL,
  "end_position" date NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "authorities_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "authorities" OWNER TO "postgres";

CREATE TABLE "catalogues" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.catalogues_id_seq'::regclass),
  "parent_code_id" int8,
  "code" varchar(100) COLLATE "pg_catalog"."default" NOT NULL,
  "name" varchar(500) COLLATE "pg_catalog"."default" NOT NULL,
  "type" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  "icon" varchar(200) COLLATE "pg_catalog"."default",
  "state_id" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "catalogues_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "catalogues" OWNER TO "postgres";

CREATE TABLE "cecy_institutions" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.cecy_institutions_id_seq'::regclass),
  "state_id" int8 NOT NULL,
  "logo" int8 NOT NULL,
  "name" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  "slogan" varchar(500) COLLATE "pg_catalog"."default",
  "code" varchar(200) COLLATE "pg_catalog"."default",
  CONSTRAINT "cecy_institutions_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "cecy_institutions" OWNER TO "postgres";

CREATE TABLE "courses" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.courses_id_seq'::regclass),
  "code" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "name" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "cost" numeric(3,2) NOT NULL,
  "photo" text COLLATE "pg_catalog"."default" NOT NULL,
  "summary" varchar(1000) COLLATE "pg_catalog"."default" NOT NULL,
  "duration" int4 NOT NULL,
  "modality_id" int8 NOT NULL,
  "free" bool NOT NULL,
  "state_id" int8 NOT NULL,
  "observation" varchar(1000) COLLATE "pg_catalog"."default" NOT NULL,
  "objective" varchar(225) COLLATE "pg_catalog"."default" NOT NULL,
  "needs" json NOT NULL,
  "facilities" json NOT NULL,
  "theoretical_phase" json NOT NULL,
  "practical_phase" json NOT NULL,
  "cross_cutting_topics" json NOT NULL,
  "bibliographys" json NOT NULL,
  "requirements" json NOT NULL,
  "teaching_strategies" json NOT NULL,
  "participant_type_id" int8 NOT NULL,
  "area_id" int8 NOT NULL,
  "level_id" int8 NOT NULL,
  "required_installing_sources" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "practice_hours" int4 NOT NULL,
  "theory_hours" int4 NOT NULL,
  "practice_required_resources" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "aimtheory_required_resources" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "learning_teaching_strategy" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "person_proposal_id" int8 NOT NULL,
  "proposed_date" date NOT NULL,
  "approval_date" date NOT NULL,
  "need_date" date NOT NULL,
  "local_proposal" varchar(500) COLLATE "pg_catalog"."default" NOT NULL,
  "schedules_id" int8 NOT NULL,
  "project" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "capacity" int4 NOT NULL,
  "classroom_id" int8 NOT NULL,
  "course_type_id" int8 NOT NULL,
  "specialty_id" int8 NOT NULL,
  "academic_period_id" int8 NOT NULL,
  "setec_name" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "courses_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "courses" OWNER TO "postgres";

CREATE TABLE "detail_registrations" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.detail_registrations_id_seq'::regclass),
  "registration_id" int8 NOT NULL,
  "state_id" int8 NOT NULL,
  "status_id" int8 NOT NULL,
  "status_certificate_id" int8 NOT NULL,
  "final_grade" numeric(3,2) NOT NULL,
  "certificate_withdrawn" date NOT NULL,
  "observation" json NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "detail_registrations_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "detail_registrations" OWNER TO "postgres";

CREATE TABLE "evaluation_mechanisms" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.evaluation_mechanisms_id_seq'::regclass),
  "state_id" int8 NOT NULL,
  "status_id" int8 NOT NULL,
  "type_id" int8 NOT NULL,
  "technique" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  "instrument" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  CONSTRAINT "evaluation_mechanisms_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "evaluation_mechanisms" OWNER TO "postgres";

CREATE TABLE "instructor_planifications" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.instructor_planifications_id_seq'::regclass),
  "state_id" int8 NOT NULL,
  "planification_id" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "instructor_planifications_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "instructor_planifications" OWNER TO "postgres";

CREATE TABLE "instructors" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.instructors_id_seq'::regclass),
  "state_id" int8 NOT NULL,
  "user_id" int8 NOT NULL,
  "status_id" int8 NOT NULL,
  "responsible_id" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "instructors_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "instructors" OWNER TO "postgres";

CREATE TABLE "locations" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.locations_id_seq'::regclass),
  "name" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "state_id" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "locations_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "locations" OWNER TO "postgres";

CREATE TABLE "participants" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.participants_id_seq'::regclass),
  "user_id" int8 NOT NULL,
  "person_type_id" int8 NOT NULL,
  "state_id" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "participants_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "participants" OWNER TO "postgres";

CREATE TABLE "planifications" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.planifications_id_seq'::regclass),
  "date_start" date,
  "date_end" date,
  "course_id" int8 NOT NULL,
  "state_id" int8 NOT NULL,
  "status_id" int8 NOT NULL,
  "school_period_id" int8 NOT NULL,
  "classroom_id" int8 NOT NULL,
  "planned_end_date" date NOT NULL,
  "capacity" int4 NOT NULL,
  "observation" varchar(1000) COLLATE "pg_catalog"."default" NOT NULL,
  "conference" int8 NOT NULL,
  "responsible_id" int8 NOT NULL,
  "parallel" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "planifications_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "planifications" OWNER TO "postgres";

CREATE TABLE "prerequisites" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.prerequisites_id_seq'::regclass),
  "course_id" int8 NOT NULL,
  "state_id" int8 NOT NULL,
  "parent_code_id" int8,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "prerequisites_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "prerequisites" OWNER TO "postgres";

CREATE TABLE "profile_instructor_courses" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.profile_instructor_courses_id_seq'::regclass),
  "course_id" int8 NOT NULL,
  "state_id" int8 NOT NULL,
  "required_knowledge" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "required_experience" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "required_skills" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "profile_instructor_courses_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "profile_instructor_courses" OWNER TO "postgres";

CREATE TABLE "registrations" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.registrations_id_seq'::regclass),
  "date_registration" varchar(50) COLLATE "pg_catalog"."default" NOT NULL,
  "participant_id" int8 NOT NULL,
  "state_id" int8 NOT NULL,
  "type_id" int8 NOT NULL,
  "number" varchar(100) COLLATE "pg_catalog"."default" NOT NULL,
  "planification_id" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "registrations_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "registrations" OWNER TO "postgres";

CREATE TABLE "scheduleables" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.scheduleables_id_seq'::regclass),
  "state_id" int8 NOT NULL,
  "schedule_id" int8 NOT NULL,
  "classroom_id" int8 NOT NULL,
  "scheduleable_type" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "scheduleable_id" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "scheduleables_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "scheduleables" OWNER TO "postgres";
CREATE INDEX "scheduleables_scheduleable_type_scheduleable_id_index" ON "scheduleables" USING btree (
  "scheduleable_type" COLLATE "pg_catalog"."default" "pg_catalog"."text_ops" ASC NULLS LAST,
  "scheduleable_id" "pg_catalog"."int8_ops" ASC NULLS LAST
);

CREATE TABLE "schedules" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.schedules_id_seq'::regclass),
  "state_id" int8 NOT NULL,
  "start_time" varchar(50) COLLATE "pg_catalog"."default" NOT NULL,
  "end_time" varchar(50) COLLATE "pg_catalog"."default" NOT NULL,
  "day_id" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "schedules_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "schedules" OWNER TO "postgres";

CREATE TABLE "school_periods" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.school_periods_id_seq'::regclass),
  "code" varchar(100) COLLATE "pg_catalog"."default" NOT NULL,
  "name" varchar(500) COLLATE "pg_catalog"."default" NOT NULL,
  "start_date" date NOT NULL,
  "end_date" date NOT NULL,
  "ordinary_start_date" date NOT NULL,
  "ordinary_end_date" date NOT NULL,
  "extraordinary_start_date" date NOT NULL,
  "extraordinary_end_date" date NOT NULL,
  "especial_start_date" date NOT NULL,
  "especial_end_date" date NOT NULL,
  "state_id" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "school_periods_pkey" PRIMARY KEY ("id"),
  CONSTRAINT "school_periods_code_unique" UNIQUE ("code"),
  CONSTRAINT "school_periods_name_unique" UNIQUE ("name")
);
ALTER TABLE "school_periods" OWNER TO "postgres";

CREATE TABLE "topics" (
  "id" int8 NOT NULL DEFAULT nextval('cecy.topics_id_seq'::regclass),
  "description" varchar(500) COLLATE "pg_catalog"."default" NOT NULL,
  "parent_code_id" int8,
  "state_id" int8 NOT NULL,
  "course_id" int8 NOT NULL,
  "type_id" int8 NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  CONSTRAINT "topics_pkey" PRIMARY KEY ("id")
);
ALTER TABLE "topics" OWNER TO "postgres";

ALTER TABLE "additional_informations" ADD CONSTRAINT "additional_informations_level_instruction_foreign" FOREIGN KEY ("level_instruction") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "additional_informations" ADD CONSTRAINT "additional_informations_registration_id_foreign" FOREIGN KEY ("registration_id") REFERENCES "registrations" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "additional_informations" ADD CONSTRAINT "additional_informations_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "agreement_companies" ADD CONSTRAINT "agreement_companies_agreement_id_foreign" FOREIGN KEY ("agreement_id") REFERENCES "agreements" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "agreement_companies" ADD CONSTRAINT "agreement_companies_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "agreements" ADD CONSTRAINT "agreements_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "attendances" ADD CONSTRAINT "attendances_detail_registration_id_foreign" FOREIGN KEY ("detail_registration_id") REFERENCES "detail_registrations" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "attendances" ADD CONSTRAINT "attendances_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "authorities" ADD CONSTRAINT "authorities_institution_id_foreign" FOREIGN KEY ("institution_id") REFERENCES "cecy_institutions" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "authorities" ADD CONSTRAINT "authorities_position_id_foreign" FOREIGN KEY ("position_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "authorities" ADD CONSTRAINT "authorities_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "authorities" ADD CONSTRAINT "authorities_status_id_foreign" FOREIGN KEY ("status_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "authorities" ADD CONSTRAINT "authorities_user_id_foreign" FOREIGN KEY ("user_id") REFERENCES "users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "catalogues" ADD CONSTRAINT "catalogues_parent_code_id_foreign" FOREIGN KEY ("parent_code_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "catalogues" ADD CONSTRAINT "catalogues_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "cecy_institutions" ADD CONSTRAINT "cecy_institutions_logo_foreign" FOREIGN KEY ("logo") REFERENCES "images" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "cecy_institutions" ADD CONSTRAINT "cecy_institutions_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "courses" ADD CONSTRAINT "courses_academic_period_id_foreign" FOREIGN KEY ("academic_period_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "courses" ADD CONSTRAINT "courses_area_id_foreign" FOREIGN KEY ("area_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "courses" ADD CONSTRAINT "courses_classroom_id_foreign" FOREIGN KEY ("classroom_id") REFERENCES "classrooms" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "courses" ADD CONSTRAINT "courses_course_type_id_foreign" FOREIGN KEY ("course_type_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "courses" ADD CONSTRAINT "courses_level_id_foreign" FOREIGN KEY ("level_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "courses" ADD CONSTRAINT "courses_modality_id_foreign" FOREIGN KEY ("modality_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "courses" ADD CONSTRAINT "courses_participant_type_id_foreign" FOREIGN KEY ("participant_type_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "courses" ADD CONSTRAINT "courses_person_proposal_id_foreign" FOREIGN KEY ("person_proposal_id") REFERENCES "authorities" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "courses" ADD CONSTRAINT "courses_schedules_id_foreign" FOREIGN KEY ("schedules_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "courses" ADD CONSTRAINT "courses_specialty_id_foreign" FOREIGN KEY ("specialty_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "courses" ADD CONSTRAINT "courses_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "detail_registrations" ADD CONSTRAINT "detail_registrations_registration_id_foreign" FOREIGN KEY ("registration_id") REFERENCES "registrations" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "detail_registrations" ADD CONSTRAINT "detail_registrations_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "detail_registrations" ADD CONSTRAINT "detail_registrations_status_certificate_id_foreign" FOREIGN KEY ("status_certificate_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "detail_registrations" ADD CONSTRAINT "detail_registrations_status_id_foreign" FOREIGN KEY ("status_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "evaluation_mechanisms" ADD CONSTRAINT "evaluation_mechanisms_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "evaluation_mechanisms" ADD CONSTRAINT "evaluation_mechanisms_status_id_foreign" FOREIGN KEY ("status_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "evaluation_mechanisms" ADD CONSTRAINT "evaluation_mechanisms_type_id_foreign" FOREIGN KEY ("type_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "instructor_planifications" ADD CONSTRAINT "instructor_planifications_planification_id_foreign" FOREIGN KEY ("planification_id") REFERENCES "planifications" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "instructor_planifications" ADD CONSTRAINT "instructor_planifications_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "instructors" ADD CONSTRAINT "instructors_responsible_id_foreign" FOREIGN KEY ("responsible_id") REFERENCES "authorities" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "instructors" ADD CONSTRAINT "instructors_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "instructors" ADD CONSTRAINT "instructors_status_id_foreign" FOREIGN KEY ("status_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "instructors" ADD CONSTRAINT "instructors_user_id_foreign" FOREIGN KEY ("user_id") REFERENCES "users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "locations" ADD CONSTRAINT "locations_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "participants" ADD CONSTRAINT "participants_person_type_id_foreign" FOREIGN KEY ("person_type_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "participants" ADD CONSTRAINT "participants_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "participants" ADD CONSTRAINT "participants_user_id_foreign" FOREIGN KEY ("user_id") REFERENCES "instructors" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "planifications" ADD CONSTRAINT "planifications_classroom_id_foreign" FOREIGN KEY ("classroom_id") REFERENCES "classrooms" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "planifications" ADD CONSTRAINT "planifications_conference_foreign" FOREIGN KEY ("conference") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "planifications" ADD CONSTRAINT "planifications_course_id_foreign" FOREIGN KEY ("course_id") REFERENCES "courses" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "planifications" ADD CONSTRAINT "planifications_parallel_foreign" FOREIGN KEY ("parallel") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "planifications" ADD CONSTRAINT "planifications_responsible_id_foreign" FOREIGN KEY ("responsible_id") REFERENCES "authorities" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "planifications" ADD CONSTRAINT "planifications_school_period_id_foreign" FOREIGN KEY ("school_period_id") REFERENCES "school_periods" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "planifications" ADD CONSTRAINT "planifications_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "planifications" ADD CONSTRAINT "planifications_status_id_foreign" FOREIGN KEY ("status_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "prerequisites" ADD CONSTRAINT "prerequisites_course_id_foreign" FOREIGN KEY ("course_id") REFERENCES "courses" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "prerequisites" ADD CONSTRAINT "prerequisites_parent_code_id_foreign" FOREIGN KEY ("parent_code_id") REFERENCES "prerequisites" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "prerequisites" ADD CONSTRAINT "prerequisites_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "profile_instructor_courses" ADD CONSTRAINT "profile_instructor_courses_course_id_foreign" FOREIGN KEY ("course_id") REFERENCES "courses" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "profile_instructor_courses" ADD CONSTRAINT "profile_instructor_courses_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "registrations" ADD CONSTRAINT "registrations_participant_id_foreign" FOREIGN KEY ("participant_id") REFERENCES "instructors" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "registrations" ADD CONSTRAINT "registrations_planification_id_foreign" FOREIGN KEY ("planification_id") REFERENCES "planifications" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "registrations" ADD CONSTRAINT "registrations_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "registrations" ADD CONSTRAINT "registrations_type_id_foreign" FOREIGN KEY ("type_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "scheduleables" ADD CONSTRAINT "scheduleables_classroom_id_foreign" FOREIGN KEY ("classroom_id") REFERENCES "classrooms" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "scheduleables" ADD CONSTRAINT "scheduleables_schedule_id_foreign" FOREIGN KEY ("schedule_id") REFERENCES "schedules" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "scheduleables" ADD CONSTRAINT "scheduleables_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "schedules" ADD CONSTRAINT "schedules_day_id_foreign" FOREIGN KEY ("day_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "schedules" ADD CONSTRAINT "schedules_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "school_periods" ADD CONSTRAINT "school_periods_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "topics" ADD CONSTRAINT "topics_course_id_foreign" FOREIGN KEY ("course_id") REFERENCES "courses" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "topics" ADD CONSTRAINT "topics_parent_code_id_foreign" FOREIGN KEY ("parent_code_id") REFERENCES "topics" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "topics" ADD CONSTRAINT "topics_state_id_foreign" FOREIGN KEY ("state_id") REFERENCES "states" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "topics" ADD CONSTRAINT "topics_type_id_foreign" FOREIGN KEY ("type_id") REFERENCES "catalogues" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

