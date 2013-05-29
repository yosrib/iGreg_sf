/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  30/04/2013 15:57:33                      */
/*==============================================================*/


drop table if exists ACTUALITE;

drop table if exists ACTULANGUE;

drop table if exists ADMIN;

drop table if exists CLIENT;

drop table if exists CLIENTNEWSLETTER;

drop table if exists DIALOGUE;

drop table if exists EMAIL;

drop table if exists GALLERIE;

drop table if exists GALLERIELANGUE;

drop table if exists GALLERIEPAGE;

drop table if exists LANGUE;

drop table if exists LANGUESITE;

drop table if exists NEWSLETTER;

drop table if exists PAGE;

drop table if exists PAGELANGUE;

drop table if exists PHOTO;

drop table if exists PHOTOLANGUE;

drop table if exists SITE;

drop table if exists SUJET;

drop table if exists TEL;

drop table if exists TYPEPAGE;

/*==============================================================*/
/* Table : ACTUALITE                                            */
/*==============================================================*/
create table ACTUALITE
(
   ID_ACTUALITE         int not null,
   DATE_ACTUALITE       datetime not null,
   primary key (ID_ACTUALITE)
);

/*==============================================================*/
/* Table : ACTULANGUE                                           */
/*==============================================================*/
create table ACTULANGUE
(
   ID_ACTUALITE         int not null,
   ISO_LANGUE           varchar(5) not null,
   TITRE_ACLULANGUE     varchar(255),
   TEXT_ACTULANGUE      text,
   primary key (ID_ACTUALITE, ISO_LANGUE)
);

/*==============================================================*/
/* Table : ADMIN                                                */
/*==============================================================*/
create table ADMIN
(
   ID_ADMIN             int not null,
   EMAIL_ADMIN          varchar(255) not null,
   PASS_ADMIN           varchar(255) not null,
   ETAT_ADMIN           enum(0) not null,
   TYPE_ADMIN           char(10) not null,
   primary key (ID_ADMIN)
);

/*==============================================================*/
/* Table : CLIENT                                               */
/*==============================================================*/
create table CLIENT
(
   ID_CLIENT            int not null,
   NOM_CLIENT           varchar(255) not null,
   PRENOM_CLIENT        varchar(255) not null,
   EMAIL_CLIENT         varchar(255) not null,
   ADRESSE_CLIENT       text,
   PAYS_CLIENT          varchar(255),
   CODEPOSTAL_CLIENT    varchar(255),
   LOGITUDE_CLIENT      int,
   LATTIDUDE_CLIENT     int,
   primary key (ID_CLIENT)
);

/*==============================================================*/
/* Table : CLIENTNEWSLETTER                                     */
/*==============================================================*/
create table CLIENTNEWSLETTER
(
   ID_CLIENTNEWSLETTER  int not null,
   ISO_LANGUE           varchar(5) not null,
   ID_SITE              int not null,
   ETAT_CLIENT_NEWSLETTER enum(0) not null,
   EMAIL_CLIENTNEWSLETTER varchar(255) not null,
   primary key (ID_CLIENTNEWSLETTER)
);

/*==============================================================*/
/* Table : DIALOGUE                                             */
/*==============================================================*/
create table DIALOGUE
(
   ID_DIALOGUE          int not null,
   ID_SUJET             int not null,
   DESTINATAIRE_DIALOGUE varchar(255) not null,
   DESCRIPTION_DIALOGUE text not null,
   DATE_DIALOGUE        datetime not null,
   primary key (ID_DIALOGUE)
);

/*==============================================================*/
/* Table : EMAIL                                                */
/*==============================================================*/
create table EMAIL
(
   ID_EMAIL             int not null,
   ID_SITE              int not null,
   ADRESSE_EMAIL        varchar(255) not null,
   DEFAULT_EMAIL        enum(0) not null,
   primary key (ID_EMAIL)
);

/*==============================================================*/
/* Table : GALLERIE                                             */
/*==============================================================*/
create table GALLERIE
(
   ID_GALLERIE          int not null,
   ID_SITE              int not null,
   primary key (ID_GALLERIE)
);

/*==============================================================*/
/* Table : GALLERIELANGUE                                       */
/*==============================================================*/
create table GALLERIELANGUE
(
   ID_GALLERIE          int not null,
   ISO_LANGUE           varchar(5) not null,
   TITRE_GALLERIELANGUE varchar(255),
   DESCRIPTION_GALLERIELANGUE text,
   primary key (ID_GALLERIE, ISO_LANGUE)
);

/*==============================================================*/
/* Table : GALLERIEPAGE                                         */
/*==============================================================*/
create table GALLERIEPAGE
(
   ID_GALLERIE          int not null,
   ID_PAGE              int not null,
   POSITION_GALLERIEPAGE int not null,
   primary key (ID_GALLERIE, ID_PAGE)
);

/*==============================================================*/
/* Table : LANGUE                                               */
/*==============================================================*/
create table LANGUE
(
   ISO_LANGUE           varchar(5) not null,
   primary key (ISO_LANGUE)
);

/*==============================================================*/
/* Table : LANGUESITE                                           */
/*==============================================================*/
create table LANGUESITE
(
   ID_SITE              int not null,
   ISO_LANGUE           varchar(5) not null,
   DEFAULT_LANGUESITE   enum(0) not null,
   POSITION_LANGUESITE  int not null,
   DESCTIPION_LANGUESITE text,
   TITLE_LANGUESITE     varchar(255),
   PAYS_LANGUESITE      varchar(255),
   ETAT_LANGUESITE      enum(0) not null,
   primary key (ID_SITE, ISO_LANGUE)
);

/*==============================================================*/
/* Table : NEWSLETTER                                           */
/*==============================================================*/
create table NEWSLETTER
(
   ID_NEWSLETTER        int not null,
   ID_SITE              int not null,
   SUJET_NEWSLETTER     varchar(255) not null,
   BODY_NEWSLETTER      text not null,
   DATE_NEWSLETTER      datetime not null,
   primary key (ID_NEWSLETTER)
);

/*==============================================================*/
/* Table : PAGE                                                 */
/*==============================================================*/
create table PAGE
(
   ID_PAGE              int not null,
   ID_SITE              int not null,
   ID_TYPEPAGE          int not null,
   MENU_PAGE            enum(0) not null,
   PARENT_PAGE          int not null,
   ORDER_PAGE           int not null,
   primary key (ID_PAGE)
);

/*==============================================================*/
/* Table : PAGELANGUE                                           */
/*==============================================================*/
create table PAGELANGUE
(
   ID_PAGE              int not null,
   ISO_LANGUE           varchar(5) not null,
   TITRE_PAGELANGUE     varchar(255),
   CONTENT_PAGELANGUE   text,
   TITLE_PAGELANGUE     varchar(255),
   DESCRIPTION_PAGELANGUE text,
   primary key (ID_PAGE, ISO_LANGUE)
);

/*==============================================================*/
/* Table : PHOTO                                                */
/*==============================================================*/
create table PHOTO
(
   ID_PHOTO             int not null,
   ID_GALLERIE          int not null,
   ORDER_PHOTO          int not null,
   primary key (ID_PHOTO)
);

/*==============================================================*/
/* Table : PHOTOLANGUE                                          */
/*==============================================================*/
create table PHOTOLANGUE
(
   ISO_LANGUE           varchar(5) not null,
   ID_PHOTO             int not null,
   TITRE_PHOTOLANGUE    varchar(255),
   DESCRIPTION_PHOTOLANGUE text,
   primary key (ISO_LANGUE, ID_PHOTO)
);

/*==============================================================*/
/* Table : SITE                                                 */
/*==============================================================*/
create table SITE
(
   ID_SITE              int not null,
   ID_ACTUALITE         int,
   ID_CLIENT            int not null,
   ID_ADMIN             int not null,
   NOM_SITE             varchar(255) not null,
   EMAIL_SITE           varchar(255) not null,
   PASS_SITE            varchar(255) not null,
   ANALYTICS_SITE       varchar(255),
   MAINTENANCE_SITE     enum(0) not null,
   PRODUCTION_SITE      enum(0) not null,
   DATEPRODUCTION_SITE  datetime not null,
   DATE_SITE            datetime not null,
   LATTITUDE_SITE       int,
   LONGITUDE_SITE       int,
   primary key (ID_SITE)
);

/*==============================================================*/
/* Table : SUJET                                                */
/*==============================================================*/
create table SUJET
(
   ID_SUJET             int not null,
   ID_SITE              int not null,
   TITRE_SUJET          varchar(255) not null,
   DATE_SUJET           datetime not null,
   primary key (ID_SUJET)
);

/*==============================================================*/
/* Table : TEL                                                  */
/*==============================================================*/
create table TEL
(
   ID_TEL               int not null,
   ID_CLIENT            int not null,
   NUM_TEL              int not null,
   TYPE_TEL             varchar(255),
   PRINCIPALE_TEL       char(10) not null,
   primary key (ID_TEL)
);

/*==============================================================*/
/* Table : TYPEPAGE                                             */
/*==============================================================*/
create table TYPEPAGE
(
   ID_TYPEPAGE          int not null,
   NOM_TYPEPAGE         varchar(255) not null,
   primary key (ID_TYPEPAGE)
);

alter table ACTULANGUE add constraint FK_ACTULANGUE foreign key (ID_ACTUALITE)
      references ACTUALITE (ID_ACTUALITE) on delete restrict on update restrict;

alter table ACTULANGUE add constraint FK_ACTULANGUE2 foreign key (ISO_LANGUE)
      references LANGUE (ISO_LANGUE) on delete restrict on update restrict;

alter table CLIENTNEWSLETTER add constraint FK_RELATION_13 foreign key (ID_SITE)
      references SITE (ID_SITE) on delete restrict on update restrict;

alter table CLIENTNEWSLETTER add constraint FK_RELATION_14 foreign key (ISO_LANGUE)
      references LANGUE (ISO_LANGUE) on delete restrict on update restrict;

alter table DIALOGUE add constraint FK_RELATION_7 foreign key (ID_SUJET)
      references SUJET (ID_SUJET) on delete restrict on update restrict;

alter table EMAIL add constraint FK_RELATION_10 foreign key (ID_SITE)
      references SITE (ID_SITE) on delete restrict on update restrict;

alter table GALLERIE add constraint FK_RELATION_2 foreign key (ID_SITE)
      references SITE (ID_SITE) on delete restrict on update restrict;

alter table GALLERIELANGUE add constraint FK_GALLERIELANGUE foreign key (ID_GALLERIE)
      references GALLERIE (ID_GALLERIE) on delete restrict on update restrict;

alter table GALLERIELANGUE add constraint FK_GALLERIELANGUE2 foreign key (ISO_LANGUE)
      references LANGUE (ISO_LANGUE) on delete restrict on update restrict;

alter table GALLERIEPAGE add constraint FK_GALLERIEPAGE foreign key (ID_GALLERIE)
      references GALLERIE (ID_GALLERIE) on delete restrict on update restrict;

alter table GALLERIEPAGE add constraint FK_GALLERIEPAGE2 foreign key (ID_PAGE)
      references PAGE (ID_PAGE) on delete restrict on update restrict;

alter table LANGUESITE add constraint FK_LANGUESITE foreign key (ID_SITE)
      references SITE (ID_SITE) on delete restrict on update restrict;

alter table LANGUESITE add constraint FK_LANGUESITE2 foreign key (ISO_LANGUE)
      references LANGUE (ISO_LANGUE) on delete restrict on update restrict;

alter table NEWSLETTER add constraint FK_RELATION_15 foreign key (ID_SITE)
      references SITE (ID_SITE) on delete restrict on update restrict;

alter table PAGE add constraint FK_RELATION_6 foreign key (ID_SITE)
      references SITE (ID_SITE) on delete restrict on update restrict;

alter table PAGE add constraint FK_RELATION_9 foreign key (ID_TYPEPAGE)
      references TYPEPAGE (ID_TYPEPAGE) on delete restrict on update restrict;

alter table PAGELANGUE add constraint FK_PAGELANGUE foreign key (ID_PAGE)
      references PAGE (ID_PAGE) on delete restrict on update restrict;

alter table PAGELANGUE add constraint FK_PAGELANGUE2 foreign key (ISO_LANGUE)
      references LANGUE (ISO_LANGUE) on delete restrict on update restrict;

alter table PHOTO add constraint FK_RELATION_3 foreign key (ID_GALLERIE)
      references GALLERIE (ID_GALLERIE) on delete restrict on update restrict;

alter table PHOTOLANGUE add constraint FK_PHOTOLANGUE foreign key (ISO_LANGUE)
      references LANGUE (ISO_LANGUE) on delete restrict on update restrict;

alter table PHOTOLANGUE add constraint FK_PHOTOLANGUE2 foreign key (ID_PHOTO)
      references PHOTO (ID_PHOTO) on delete restrict on update restrict;

alter table SITE add constraint FK_RELATION_12 foreign key (ID_ACTUALITE)
      references ACTUALITE (ID_ACTUALITE) on delete restrict on update restrict;

alter table SITE add constraint FK_RELATION_4 foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

alter table SITE add constraint FK_RELATION_5 foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT) on delete restrict on update restrict;

alter table SUJET add constraint FK_RELATION_8 foreign key (ID_SITE)
      references SITE (ID_SITE) on delete restrict on update restrict;

alter table TEL add constraint FK_RELATION_11 foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT) on delete restrict on update restrict;

