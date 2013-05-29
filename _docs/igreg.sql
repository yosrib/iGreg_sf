/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  29/05/2013 09:57:53                      */
/*==============================================================*/


drop table if exists actualite;

drop table if exists actulangue;

drop table if exists admin;

drop table if exists adminprojet;

drop table if exists client;

drop table if exists clientnewsletter;

drop table if exists dialogue;

drop table if exists email;

drop table if exists etatprojet;

drop table if exists gallerie;

drop table if exists gallerielangue;

drop table if exists galleriepage;

drop table if exists langue;

drop table if exists languesite;

drop table if exists newsletter;

drop table if exists page;

drop table if exists pagelangue;

drop table if exists photo;

drop table if exists photolangue;

drop table if exists projet;

drop table if exists reseausosial;

drop table if exists sujet;

drop table if exists tel;

drop table if exists typeadmin;

drop table if exists typepage;

/*==============================================================*/
/* Table : actualite                                            */
/*==============================================================*/
create table actualite
(
   id_actualite         int not null,
   date_actualite       datetime not null,
   primary key (id_actualite)
);

/*==============================================================*/
/* Table : actulangue                                           */
/*==============================================================*/
create table actulangue
(
   id_actualite         int not null,
   iso_langue           varchar(5) not null,
   titre_aclulangue     varchar(255),
   text_actulangue      text,
   primary key (id_actualite, iso_langue)
);

/*==============================================================*/
/* Table : admin                                                */
/*==============================================================*/
create table admin
(
   id_admin             int not null,
   id_typeadmin         int not null,
   email_admin          varchar(255) not null,
   pass_admin           varchar(255) not null,
   actif_admin          int not null,
   nom_admin            varchar(255),
   prenom_admin         varchar(255),
   datenaissance_admin  datetime,
   tel_admin            int,
   primary key (id_admin)
);

/*==============================================================*/
/* Table : adminprojet                                          */
/*==============================================================*/
create table adminprojet
(
   id_admin             int not null,
   id_projet            int not null,
   debut_adminprojet    datetime,
   fin_adminprojet      datetime,
   primary key (id_admin, id_projet)
);

/*==============================================================*/
/* Table : client                                               */
/*==============================================================*/
create table client
(
   id_client            int not null,
   nom_client           varchar(255) not null,
   prenom_client        varchar(255) not null,
   email_client         varchar(255) not null,
   adresse_client       text,
   pays_client          varchar(255),
   codepostal_client    varchar(255),
   logitude_client      int,
   lattidude_client     int,
   ville_client         varchar(255),
   primary key (id_client)
);

/*==============================================================*/
/* Table : clientnewsletter                                     */
/*==============================================================*/
create table clientnewsletter
(
   id_clientnewsletter  int not null,
   iso_langue           varchar(5) not null,
   id_projet            int not null,
   actif_client_newsletter int not null,
   email_clientnewsletter varchar(255) not null,
   primary key (id_clientnewsletter)
);

/*==============================================================*/
/* Table : dialogue                                             */
/*==============================================================*/
create table dialogue
(
   id_dialogue          int not null,
   id_sujet             int not null,
   id_admin             int,
   id_client            int,
   auteur_dialogue      varchar(255) not null,
   description_dialogue text not null,
   date_dialogue        datetime not null,
   actif_dialogue       int,
   primary key (id_dialogue)
);

/*==============================================================*/
/* Table : email                                                */
/*==============================================================*/
create table email
(
   id_email             int not null,
   id_projet            int not null,
   adresse_email        varchar(255) not null,
   default_email        int not null,
   primary key (id_email)
);

/*==============================================================*/
/* Table : etatprojet                                           */
/*==============================================================*/
create table etatprojet
(
   id_etatprojet        int not null,
   libelle_etatprojet   varchar(255) not null,
   primary key (id_etatprojet)
);

/*==============================================================*/
/* Table : gallerie                                             */
/*==============================================================*/
create table gallerie
(
   id_gallerie          int not null,
   id_projet            int not null,
   primary key (id_gallerie)
);

/*==============================================================*/
/* Table : gallerielangue                                       */
/*==============================================================*/
create table gallerielangue
(
   id_gallerie          int not null,
   iso_langue           varchar(5) not null,
   titre_gallerielangue varchar(255),
   description_gallerielangue text,
   primary key (id_gallerie, iso_langue)
);

/*==============================================================*/
/* Table : galleriepage                                         */
/*==============================================================*/
create table galleriepage
(
   id_gallerie          int not null,
   id_page              int not null,
   position_galleriepage int not null,
   primary key (id_gallerie, id_page)
);

/*==============================================================*/
/* Table : langue                                               */
/*==============================================================*/
create table langue
(
   iso_langue           varchar(5) not null,
   primary key (iso_langue)
);

/*==============================================================*/
/* Table : languesite                                           */
/*==============================================================*/
create table languesite
(
   id_projet            int not null,
   iso_langue           varchar(5) not null,
   default_languesite   int not null,
   position_languesite  int not null,
   desctipion_languesite text,
   title_languesite     varchar(255),
   pays_languesite      varchar(255),
   actif_languesite     int not null,
   primary key (id_projet, iso_langue)
);

/*==============================================================*/
/* Table : newsletter                                           */
/*==============================================================*/
create table newsletter
(
   id_newsletter        int not null,
   id_projet            int not null,
   sujet_newsletter     varchar(255) not null,
   body_newsletter      text not null,
   date_newsletter      datetime not null,
   primary key (id_newsletter)
);

/*==============================================================*/
/* Table : page                                                 */
/*==============================================================*/
create table page
(
   id_page              int not null,
   id_projet            int not null,
   id_typepage          int not null,
   menu_page            int not null,
   parent_page          int not null,
   order_page           int not null,
   primary key (id_page)
);

/*==============================================================*/
/* Table : pagelangue                                           */
/*==============================================================*/
create table pagelangue
(
   id_page              int not null,
   iso_langue           varchar(5) not null,
   titre_pagelangue     varchar(255),
   content_pagelangue   text,
   title_pagelangue     varchar(255),
   description_pagelangue text,
   primary key (id_page, iso_langue)
);

/*==============================================================*/
/* Table : photo                                                */
/*==============================================================*/
create table photo
(
   id_photo             int not null,
   id_gallerie          int not null,
   order_photo          int not null,
   primary key (id_photo)
);

/*==============================================================*/
/* Table : photolangue                                          */
/*==============================================================*/
create table photolangue
(
   iso_langue           varchar(5) not null,
   id_photo             int not null,
   titre_photolangue    varchar(255),
   description_photolangue text,
   primary key (iso_langue, id_photo)
);

/*==============================================================*/
/* Table : projet                                               */
/*==============================================================*/
create table projet
(
   id_projet            int not null,
   id_actualite         int,
   id_etatprojet        int not null,
   id_client            int not null,
   nom_projet           varchar(255) not null,
   user_projet          varchar(255) not null,
   pass_projet          varchar(255) not null,
   analytics_projet     varchar(255),
   maintenance_projet   int not null,
   dateproduction_projet datetime not null,
   date_projet          datetime not null,
   lattitude_projet     int,
   longitude_projet     int,
   urlproduction_projet varchar(255),
   primary key (id_projet)
);

/*==============================================================*/
/* Table : reseausosial                                         */
/*==============================================================*/
create table reseausosial
(
   id_resocial          int not null,
   id_projet            int not null,
   nom_resocial         varchar(255) not null,
   url_resocial         varchar(255) not null,
   primary key (id_resocial)
);

/*==============================================================*/
/* Table : sujet                                                */
/*==============================================================*/
create table sujet
(
   id_sujet             int not null,
   id_admin             int,
   id_projet            int not null,
   id_client            int,
   titre_sujet          varchar(255) not null,
   date_sujet           datetime not null,
   actif_sujet          int,
   primary key (id_sujet)
);

/*==============================================================*/
/* Table : tel                                                  */
/*==============================================================*/
create table tel
(
   id_tel               int not null,
   id_client            int not null,
   num_tel              int not null,
   type_tel             varchar(255),
   principale_tel       int not null,
   primary key (id_tel)
);

/*==============================================================*/
/* Table : typeadmin                                            */
/*==============================================================*/
create table typeadmin
(
   id_typeadmin         int not null,
   libelle_typeadmin    varchar(255) not null,
   primary key (id_typeadmin)
);

/*==============================================================*/
/* Table : typepage                                             */
/*==============================================================*/
create table typepage
(
   id_typepage          int not null,
   nom_typepage         varchar(255) not null,
   primary key (id_typepage)
);

alter table actulangue add constraint fk_actulangue foreign key (id_actualite)
      references actualite (id_actualite) on delete restrict on update restrict;

alter table actulangue add constraint fk_actulangue2 foreign key (iso_langue)
      references langue (iso_langue) on delete restrict on update restrict;

alter table admin add constraint fk_relation_17 foreign key (id_typeadmin)
      references typeadmin (id_typeadmin) on delete restrict on update restrict;

alter table adminprojet add constraint fk_adminprojet foreign key (id_admin)
      references admin (id_admin) on delete restrict on update restrict;

alter table adminprojet add constraint fk_adminprojet2 foreign key (id_projet)
      references projet (id_projet) on delete restrict on update restrict;

alter table clientnewsletter add constraint fk_relation_13 foreign key (id_projet)
      references projet (id_projet) on delete restrict on update restrict;

alter table clientnewsletter add constraint fk_relation_14 foreign key (iso_langue)
      references langue (iso_langue) on delete restrict on update restrict;

alter table dialogue add constraint fk_relation_21 foreign key (id_admin)
      references admin (id_admin) on delete restrict on update restrict;

alter table dialogue add constraint fk_relation_22 foreign key (id_client)
      references client (id_client) on delete restrict on update restrict;

alter table dialogue add constraint fk_relation_7 foreign key (id_sujet)
      references sujet (id_sujet) on delete restrict on update restrict;

alter table email add constraint fk_relation_10 foreign key (id_projet)
      references projet (id_projet) on delete restrict on update restrict;

alter table gallerie add constraint fk_relation_2 foreign key (id_projet)
      references projet (id_projet) on delete restrict on update restrict;

alter table gallerielangue add constraint fk_gallerielangue foreign key (id_gallerie)
      references gallerie (id_gallerie) on delete restrict on update restrict;

alter table gallerielangue add constraint fk_gallerielangue2 foreign key (iso_langue)
      references langue (iso_langue) on delete restrict on update restrict;

alter table galleriepage add constraint fk_galleriepage foreign key (id_gallerie)
      references gallerie (id_gallerie) on delete restrict on update restrict;

alter table galleriepage add constraint fk_galleriepage2 foreign key (id_page)
      references page (id_page) on delete restrict on update restrict;

alter table languesite add constraint fk_languesite foreign key (id_projet)
      references projet (id_projet) on delete restrict on update restrict;

alter table languesite add constraint fk_languesite2 foreign key (iso_langue)
      references langue (iso_langue) on delete restrict on update restrict;

alter table newsletter add constraint fk_relation_15 foreign key (id_projet)
      references projet (id_projet) on delete restrict on update restrict;

alter table page add constraint fk_relation_6 foreign key (id_projet)
      references projet (id_projet) on delete restrict on update restrict;

alter table page add constraint fk_relation_9 foreign key (id_typepage)
      references typepage (id_typepage) on delete restrict on update restrict;

alter table pagelangue add constraint fk_pagelangue foreign key (id_page)
      references page (id_page) on delete restrict on update restrict;

alter table pagelangue add constraint fk_pagelangue2 foreign key (iso_langue)
      references langue (iso_langue) on delete restrict on update restrict;

alter table photo add constraint fk_relation_3 foreign key (id_gallerie)
      references gallerie (id_gallerie) on delete restrict on update restrict;

alter table photolangue add constraint fk_photolangue foreign key (iso_langue)
      references langue (iso_langue) on delete restrict on update restrict;

alter table photolangue add constraint fk_photolangue2 foreign key (id_photo)
      references photo (id_photo) on delete restrict on update restrict;

alter table projet add constraint fk_relation_12 foreign key (id_actualite)
      references actualite (id_actualite) on delete restrict on update restrict;

alter table projet add constraint fk_relation_18 foreign key (id_etatprojet)
      references etatprojet (id_etatprojet) on delete restrict on update restrict;

alter table projet add constraint fk_relation_5 foreign key (id_client)
      references client (id_client) on delete restrict on update restrict;

alter table reseausosial add constraint fk_relation_16 foreign key (id_projet)
      references projet (id_projet) on delete restrict on update restrict;

alter table sujet add constraint fk_relation_19 foreign key (id_admin)
      references admin (id_admin) on delete restrict on update restrict;

alter table sujet add constraint fk_relation_20 foreign key (id_client)
      references client (id_client) on delete restrict on update restrict;

alter table sujet add constraint fk_relation_8 foreign key (id_projet)
      references projet (id_projet) on delete restrict on update restrict;

alter table tel add constraint fk_relation_11 foreign key (id_client)
      references client (id_client) on delete restrict on update restrict;

