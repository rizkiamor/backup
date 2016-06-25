/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     11/05/2016 19.14.52                          */
/*==============================================================*/


drop table if exists FOTO;

drop table if exists KATEGORI;

drop table if exists TAG;

drop table if exists TUTORIAL;

drop table if exists USERS;

/*==============================================================*/
/* Table: FOTO                                                  */
/*==============================================================*/
create table FOTO
(
   IDFOTO               int not null,
   IDKATEGORI           int,
   JUDUL                varchar(100),
   GAMBAR               varchar(100),
   DESKRIPSI            text,
   TAG                  text,
   TANGGALUPLOAD        date,
   primary key (IDFOTO)
);

/*==============================================================*/
/* Table: KATEGORI                                              */
/*==============================================================*/
create table KATEGORI
(
   IDKATEGORI           int not null,
   NAMAKATEGORI         varchar(100),
   primary key (IDKATEGORI)
);

/*==============================================================*/
/* Table: TAG                                                   */
/*==============================================================*/
create table TAG
(
   IDTAG                int not null,
   NAMATAG              varchar(100),
   primary key (IDTAG)
);

/*==============================================================*/
/* Table: TUTORIAL                                              */
/*==============================================================*/
create table TUTORIAL
(
   IDTUTORIAL           int not null,
   IDKATEGORI           int,
   JUDUL                varchar(100),
   TANGGALUPLOAD        date,
   TAG                  text,
   DESKRIPSI            text,
   GAMBAR               varchar(100),
   primary key (IDTUTORIAL)
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS
(
   IDUSERS              int not null,
   USERNAME             varchar(100),
   PASSWORD             varchar(100),
   NAMA                 varchar(100),
   primary key (IDUSERS)
);
