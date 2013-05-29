/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  30/04/2013 16:02:51                      */
/*==============================================================*/


drop table if exists actualite;

drop table if exists actulangue;

drop table if exists administrateur;

drop table if exists client;

drop table if exists clientnewsletter;

drop table if exists dialogue;

drop table if exists email;

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

drop table if exists site;

drop table if exists sujet;

drop table if exists tel;

drop table if exists typepage;

drop table if exists reseausosial;

drop table if exists adminsite;

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
/* Table : administrateur                                       */
/*==============================================================*/
create table administrateur
(
   id_admin             int not null,
   email_admin          varchar(255) not null,
   pass_admin           varchar(255) not null,
   etat_admin           enum('0', '1') not null,
   type_admin           enum('0', '1') not null,
   primary key (id_admin)
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
   primary key (id_client)
);

/*==============================================================*/
/* Table : clientnewsletter                                     */
/*==============================================================*/
create table clientnewsletter
(
   id_clientnewsletter  int not null,
   iso_langue           varchar(5) not null,
   id_site              int not null,
   etat_client_newsletter enum('0', '1') not null,
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
   destinataire_dialogue varchar(255) not null,
   description_dialogue text not null,
   date_dialogue        datetime not null,
   primary key (id_dialogue)
);

/*==============================================================*/
/* Table : email                                                */
/*==============================================================*/
create table email
(
   id_email             int not null,
   id_site              int not null,
   adresse_email        varchar(255) not null,
   default_email        enum('0', '1') not null,
   primary key (id_email)
);

/*==============================================================*/
/* Table : gallerie                                             */
/*==============================================================*/
create table gallerie
(
   id_gallerie          int not null,
   id_site              int not null,
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
   id_site              int not null,
   iso_langue           varchar(5) not null,
   default_languesite   enum('0', '1') not null,
   position_languesite  int not null,
   desctipion_languesite text,
   title_languesite     varchar(255),
   pays_languesite      varchar(255),
   etat_languesite      enum('0', '1') not null,
   primary key (id_site, iso_langue)
);

/*==============================================================*/
/* Table : newsletter                                           */
/*==============================================================*/
create table newsletter
(
   id_newsletter        int not null,
   id_site              int not null,
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
   id_site              int not null,
   id_typepage          int not null,
   menu_page            enum('0', '1') not null,
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
/* Table : site                                                 */
/*==============================================================*/
create table site
(
   id_site              int not null,
   id_actualite         int,
   id_client            int not null,
   id_admin             int not null,
   nom_site             varchar(255) not null,
   email_site           varchar(255) not null,
   pass_site            varchar(255) not null,
   analytics_site       varchar(255),
   maintenance_site     enum('0', '1') not null,
   production_site      enum('0', '1') not null,
   dateproduction_site  datetime not null,
   date_site            datetime not null,
   lattitude_site       int,
   longitude_site       int,
   etat_site			enum('En attente','Design en cours','Design terminé','Développement en cours','Développement terminé','En test','En production')NOT NULL DEFAULT 'En attente',
   primary key (id_site)
);

/*==============================================================*/
/* Table : sujet                                                */
/*==============================================================*/
create table sujet
(
   id_sujet             int not null,
   id_site              int not null,
   titre_sujet          varchar(255) not null,
   date_sujet           datetime not null,
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
   principale_tel       enum('0', '1') not null,
   primary key (id_tel)
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
/*==============================================================*/
/* Table : reseausosial                                         */
/*==============================================================*/
create table reseausosial
(
   id_resocial          int not null,
   id_site              int not null,
   nom_resocial         varchar(255) not null,
   url_resocial         varchar(255) not null,
   primary key (id_resocial)
);
/*==============================================================*/
/* Table : adminsite                                           */
/*==============================================================*/
create table adminsite
(
   id_admin             int not null,
   id_site              int not null,
   primary key (id_admin, id_site)
);

alter table actulangue add constraint fk_actulangue foreign key (id_actualite)
      references actualite (id_actualite) on delete restrict on update restrict;

alter table actulangue add constraint fk_actulangue2 foreign key (iso_langue)
      references langue (iso_langue) on delete restrict on update restrict;

alter table clientnewsletter add constraint fk_relation_13 foreign key (id_site)
      references site (id_site) on delete restrict on update restrict;

alter table clientnewsletter add constraint fk_relation_14 foreign key (iso_langue)
      references langue (iso_langue) on delete restrict on update restrict;

alter table dialogue add constraint fk_relation_7 foreign key (id_sujet)
      references sujet (id_sujet) on delete restrict on update restrict;

alter table email add constraint fk_relation_10 foreign key (id_site)
      references site (id_site) on delete restrict on update restrict;

alter table gallerie add constraint fk_relation_2 foreign key (id_site)
      references site (id_site) on delete restrict on update restrict;

alter table gallerielangue add constraint fk_gallerielangue foreign key (id_gallerie)
      references gallerie (id_gallerie) on delete restrict on update restrict;

alter table gallerielangue add constraint fk_gallerielangue2 foreign key (iso_langue)
      references langue (iso_langue) on delete restrict on update restrict;

alter table galleriepage add constraint fk_galleriepage foreign key (id_gallerie)
      references gallerie (id_gallerie) on delete restrict on update restrict;

alter table galleriepage add constraint fk_galleriepage2 foreign key (id_page)
      references page (id_page) on delete restrict on update restrict;

alter table languesite add constraint fk_languesite foreign key (id_site)
      references site (id_site) on delete restrict on update restrict;

alter table languesite add constraint fk_languesite2 foreign key (iso_langue)
      references langue (iso_langue) on delete restrict on update restrict;

alter table newsletter add constraint fk_relation_15 foreign key (id_site)
      references site (id_site) on delete restrict on update restrict;

alter table page add constraint fk_relation_6 foreign key (id_site)
      references site (id_site) on delete restrict on update restrict;

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

alter table site add constraint fk_relation_12 foreign key (id_actualite)
      references actualite (id_actualite) on delete restrict on update restrict;

alter table site add constraint fk_relation_5 foreign key (id_client)
      references client (id_client) on delete restrict on update restrict;

alter table sujet add constraint fk_relation_8 foreign key (id_site)
      references site (id_site) on delete restrict on update restrict;

alter table tel add constraint fk_relation_11 foreign key (id_client)
      references client (id_client) on delete restrict on update restrict;

alter table reseausosial add constraint fk_relation_16 foreign key (id_site)
      references site (id_site) on delete restrict on update restrict;
	  
alter table adminsite add constraint fk_relation_17 foreign key (id_admin)
      references administrateur (id_admin) on delete restrict on update restrict;

alter table adminsite add constraint fk_relation_18 foreign key (id_site)
      references site (id_site) on delete restrict on update restrict;