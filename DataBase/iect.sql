/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     26-02-2019 17:47:49                          */
/*==============================================================*/


drop index JOB_PK;

drop table JOB;

drop index RELATIONSHIP_3_FK;

drop index MACHINE_PK;

drop table MACHINE;

drop index RELATIONSHIP_2_FK;

drop index PDB_100_PK;

drop table PDB_100;

drop index RELATIONSHIP_1_FK;

drop index RESULT_PK;

drop table RESULT;

/*==============================================================*/
/* Table: JOB                                                   */
/*==============================================================*/
create table JOB (
   ID_JOB               SERIAL               not null,
   STATE                INT4                 null,
   JOB_DATE             DATE                 null,
   PROCESS_NAME         TEXT                 null,
   PDB1_MONOMER         TEXT                 null,
   PDB2_DRUG            TEXT                 null,
   GC_MONOMER           TEXT                 null,
   GC_DRUG              TEXT                 null,
   SAMPLING_SIZE        INT4                 null,
   PARAMETRIC_METHOD    TEXT                 null,
   BOND_SYSTEM          TEXT                 null,
   MONOMER_CHARGE       INT4                 null,
   DRUG_CHARGE          INT4                 null,
   COMPLEX_CHARGE       INT4                 null,
   MONOMER_MULTIPLICITY TEXT                 null,
   DRUG_MULTIPLICITY    TEXT                 null,
   COMPLEX_MULTIPLICITY TEXT                 null,
   ELEMENTS             TEXT                 null,
   PROCESSORS_NUMBER    INT4                 null,
   OUTPUTS_NUMBER       INT4                 null,
   EVALUATION_ALGORITHM TEXT                 null,
   INTERACTION_ENERGY_TYPE TEXT                 null,
   ID_USER              INT4                 null,
   constraint PK_JOB primary key (ID_JOB)
);

/*==============================================================*/
/* Index: JOB_PK                                                */
/*==============================================================*/
create unique index JOB_PK on JOB (
ID_JOB
);

/*==============================================================*/
/* Table: MACHINE                                               */
/*==============================================================*/
create table MACHINE (
   NAME                 TEXT                 not null,
   ALGORITHM            TEXT                 not null,
   PROCESSORS           INT4                 null,
   STATE                INT4                 null,
   P1                   DECIMAL              null,
   P2                   DECIMAL              null,
   P3                   DECIMAL              null,
   P4                   DECIMAL              null,
   P5                   DECIMAL              null,
   P6                   DECIMAL              null,
   P7                   DECIMAL              null,
   P8                   DECIMAL              null,
   P9                   DECIMAL              null,
   P10                  DECIMAL              null,
   P11                  DECIMAL              null,
   P12                  DECIMAL              null,
   constraint PK_MACHINE primary key (NAME)
);

/*==============================================================*/
/* Index: MACHINE_PK                                            */
/*==============================================================*/
create unique index MACHINE_PK on MACHINE (
NAME
);

/*==============================================================*/
/* Index: RELATIONSHIP_3_FK                                     */
/*==============================================================*/
create  index RELATIONSHIP_3_FK on MACHINE (
ALGORITHM
);

/*==============================================================*/
/* Table: PDB_100                                               */
/*==============================================================*/
create table PDB_100 (
   PDB_NAME             TEXT                 not null,
   ALGORITHM            TEXT                 not null,
   ENERGY               DECIMAL              null,
   CONTENT              TEXT                 null,
   constraint PK_PDB_100 primary key (PDB_NAME)
);

/*==============================================================*/
/* Index: PDB_100_PK                                            */
/*==============================================================*/
create unique index PDB_100_PK on PDB_100 (
PDB_NAME
);

/*==============================================================*/
/* Index: RELATIONSHIP_2_FK                                     */
/*==============================================================*/
create  index RELATIONSHIP_2_FK on PDB_100 (
ALGORITHM
);

/*==============================================================*/
/* Table: RESULT                                                */
/*==============================================================*/
create table RESULT (
   ALGORITHM            TEXT                 not null,
   ID_JOB               INT4                 null,
   ENERGY_AVERAGE       DECIMAL              null,
   MIN_AVERAGE          DECIMAL              null,
   MAX_ENERGY           DECIMAL              null,
   ALL_PDB              TEXT                 null,
   constraint PK_RESULT primary key (ALGORITHM)
);

/*==============================================================*/
/* Index: RESULT_PK                                             */
/*==============================================================*/
create unique index RESULT_PK on RESULT (
ALGORITHM
);

/*==============================================================*/
/* Index: RELATIONSHIP_1_FK                                     */
/*==============================================================*/
create  index RELATIONSHIP_1_FK on RESULT (
ID_JOB
);

alter table MACHINE
   add constraint FK_MACHINE_RELATIONS_RESULT foreign key (ALGORITHM)
      references RESULT (ALGORITHM)
      on delete restrict on update restrict;

alter table PDB_100
   add constraint FK_PDB_100_RELATIONS_RESULT foreign key (ALGORITHM)
      references RESULT (ALGORITHM)
      on delete restrict on update restrict;

alter table RESULT
   add constraint FK_RESULT_RELATIONS_JOB foreign key (ID_JOB)
      references JOB (ID_JOB)
      on delete restrict on update restrict;

