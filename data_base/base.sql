/*
SQLyog Ultimate v9.63 
MySQL - 5.5.34 : Database - fenix_base
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `alert` */

DROP TABLE IF EXISTS `alert`;

CREATE TABLE `alert` (
  `idAlert` int(11) NOT NULL,
  `User_idCustomer` int(11) NOT NULL,
  `Subcategory_idSubcategory` int(11) NOT NULL,
  `City_idCity` int(11) NOT NULL,
  `search_text` varchar(255) DEFAULT NULL,
  `date_from` date DEFAULT NULL,
  `date_until` date DEFAULT NULL,
  `price_from` int(11) DEFAULT NULL,
  `price_until` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAlert`),
  KEY `fk_Alert_User1_idx` (`User_idCustomer`),
  KEY `fk_Alert_Subcategory1_idx` (`Subcategory_idSubcategory`),
  KEY `fk_Alert_City1_idx` (`City_idCity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `alert` */

/*Table structure for table `articulos` */

DROP TABLE IF EXISTS `articulos`;

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(30) DEFAULT NULL,
  `codigo_proveedor` varchar(30) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `proveedor_testigo` int(5) DEFAULT NULL,
  `precio_lista` decimal(10,2) DEFAULT NULL,
  `precio_costo` decimal(10,2) DEFAULT NULL,
  `utilidad` decimal(10,2) DEFAULT NULL,
  `ubicacion` varchar(10) DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `articulos` */

insert  into `articulos`(`id`,`codigo`,`codigo_proveedor`,`descripcion`,`proveedor_testigo`,`precio_lista`,`precio_costo`,`utilidad`,`ubicacion`,`observaciones`) values (1,'123456','1','prueba',1,'100.00','100.00','10.00',NULL,NULL);

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL AUTO_INCREMENT,
  `Category_name` varchar(45) NOT NULL,
  `Category_Desc` varchar(45) DEFAULT NULL,
  `image_tile_url` varchar(255) NOT NULL DEFAULT 'tile_by_default',
  PRIMARY KEY (`idCategory`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`idCategory`,`Category_name`,`Category_Desc`,`image_tile_url`) values (1,'Categoria 1','Una descripcion','e9b87-koala.jpg'),(4,'Categoria 2','Una descripcion','2dda2-penguins.jpg'),(5,'asdf','asdes',''),(6,'asdfa','asdfadsf','');

/*Table structure for table `city` */

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `idCity` int(11) NOT NULL AUTO_INCREMENT,
  `City_name` varchar(45) DEFAULT NULL,
  `Municipio_idMunicipio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCity`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `city` */

insert  into `city`(`idCity`,`City_name`,`Municipio_idMunicipio`) values (4,'Cordoba',1),(5,'Ciudad',1);

/*Table structure for table `configuration` */

DROP TABLE IF EXISTS `configuration`;

CREATE TABLE `configuration` (
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `configuration` */

insert  into `configuration`(`key`,`value`) values ('precio_destacados','10'),('precio_negrita','15'),('precio_por_foto','10'),('precio_por_mayuscula ','20'),('precio_por_palabra','10'),('tile_by_default','');

/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `idCountry` int(11) NOT NULL AUTO_INCREMENT,
  `Country_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCountry`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `country` */

insert  into `country`(`idCountry`,`Country_name`) values (1,'Argentina');

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `idCustomer` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Last_Name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL COMMENT 'Encriptado',
  `Address` varchar(255) DEFAULT NULL,
  `Num_Int` varchar(45) DEFAULT NULL,
  `Num_Ext` varchar(45) DEFAULT NULL,
  `twitter_account` varchar(255) DEFAULT NULL,
  `facebook_account` varchar(255) DEFAULT NULL,
  `City_idCity` int(11) DEFAULT NULL,
  `CP` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `mobile_phone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCustomer`),
  KEY `fk_User_Town1_idx` (`City_idCity`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`idCustomer`,`Name`,`Last_Name`,`email`,`password`,`Address`,`Num_Int`,`Num_Ext`,`twitter_account`,`facebook_account`,`City_idCity`,`CP`,`phone`,`mobile_phone`) values (1,'Maxi','Solimoo','email',NULL,'direccion','1','2','3','4',1,'5','6','7');

/*Table structure for table `empleados` */

DROP TABLE IF EXISTS `empleados`;

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `legajo` varchar(10) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `empleados` */

insert  into `empleados`(`id`,`legajo`,`apellido`,`nombre`,`dni`,`telefono`) values (1,'100','roberto','gomez',31220251,'3505000'),(2,'1500','perez','RAMON',31220251,'123456');

/*Table structure for table `listas` */

DROP TABLE IF EXISTS `listas`;

CREATE TABLE `listas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proveedor_id` int(11) DEFAULT NULL,
  `nombre_archivo` varchar(50) DEFAULT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `listas` */

insert  into `listas`(`id`,`proveedor_id`,`nombre_archivo`,`fecha_actualizacion`) values (1,1,NULL,NULL);

/*Table structure for table `loggedin_users` */

DROP TABLE IF EXISTS `loggedin_users`;

CREATE TABLE `loggedin_users` (
  `tbl_loggedin_users_id` int(11) NOT NULL AUTO_INCREMENT,
  `loggedusername` varchar(45) NOT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `useragent` text NOT NULL,
  `lastactivity` int(20) DEFAULT NULL,
  `online` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tbl_loggedin_users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `loggedin_users` */

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `tbl_messages_id` int(11) NOT NULL AUTO_INCREMENT,
  `senderid` int(11) NOT NULL,
  `receiverid` int(11) NOT NULL,
  `message` varchar(45) DEFAULT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `read` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tbl_messages_id`),
  KEY `senderid` (`senderid`),
  KEY `receiverid` (`receiverid`),
  CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`senderid`) REFERENCES `users` (`tbl_users_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiverid`) REFERENCES `users` (`tbl_users_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `messages` */

/*Table structure for table `modulos` */

DROP TABLE IF EXISTS `modulos`;

CREATE TABLE `modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `modulos` */

insert  into `modulos`(`id`,`nombre`) values (1,'RRHH'),(2,'Agricultura'),(3,'Almacen'),(4,'Licencias'),(5,'Sueldos');

/*Table structure for table `privileges` */

DROP TABLE IF EXISTS `privileges`;

CREATE TABLE `privileges` (
  `idPrivileges` int(11) NOT NULL,
  `desc_Privileges` varchar(255) NOT NULL,
  `action_Privileges` varchar(2000) DEFAULT NULL COMMENT 'Determina que acción se puede tomar con este privilegio. Investigar si es la mejor forma, o hay que identificar cada parte del sistema.',
  PRIMARY KEY (`idPrivileges`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `privileges` */

/*Table structure for table `proveedores` */

DROP TABLE IF EXISTS `proveedores`;

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `proveedores` */

insert  into `proveedores`(`id`,`nombre`,`codigo`) values (1,'MAIPU AUTOMOTORES','003'),(2,'AUTO HAUS','083'),(3,'PETTITI','077');

/*Table structure for table `publication_range` */

DROP TABLE IF EXISTS `publication_range`;

CREATE TABLE `publication_range` (
  `idPublication_range` int(11) NOT NULL,
  `days_per_week` int(11) DEFAULT '1',
  `weekly` int(11) DEFAULT '1' COMMENT 'implica el rango de semanas que será visible un clasificado.',
  `skip_between_days` int(11) DEFAULT '0' COMMENT 'salto entre días, no podrá tener valor si el rango es de 7 días.',
  PRIMARY KEY (`idPublication_range`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='\n';

/*Data for the table `publication_range` */

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `User_idUser` int(11) NOT NULL,
  `Role_Type` varchar(45) NOT NULL,
  PRIMARY KEY (`idRole`),
  KEY `fk_Profile_User1_idx` (`User_idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `role` */

/*Table structure for table `role_priv` */

DROP TABLE IF EXISTS `role_priv`;

CREATE TABLE `role_priv` (
  `Role_idRole` int(11) NOT NULL,
  `Privileges_idPrivileges` int(11) NOT NULL,
  PRIMARY KEY (`Role_idRole`,`Privileges_idPrivileges`),
  KEY `fk_Role_Priv_Privileges1_idx` (`Privileges_idPrivileges`),
  CONSTRAINT `fk_Role_Priv_Privileges1` FOREIGN KEY (`Privileges_idPrivileges`) REFERENCES `privileges` (`idPrivileges`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Role_Priv_Role1` FOREIGN KEY (`Role_idRole`) REFERENCES `role` (`idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `role_priv` */

/*Table structure for table `state` */

DROP TABLE IF EXISTS `state`;

CREATE TABLE `state` (
  `idState` int(11) NOT NULL AUTO_INCREMENT,
  `State_name` varchar(45) DEFAULT NULL,
  `Country_idCountry` int(11) DEFAULT NULL,
  PRIMARY KEY (`idState`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `state` */

insert  into `state`(`idState`,`State_name`,`Country_idCountry`) values (1,'Cordobaa',1);

/*Table structure for table `subcategory` */

DROP TABLE IF EXISTS `subcategory`;

CREATE TABLE `subcategory` (
  `idSubcategory` int(11) NOT NULL AUTO_INCREMENT,
  `Category_idCategory` int(11) NOT NULL,
  `SubCategory_name` varchar(45) NOT NULL,
  `Subcategory_Desc` varchar(45) DEFAULT NULL,
  `image_tile_url` varchar(255) NOT NULL DEFAULT 'tile_by_default',
  PRIMARY KEY (`idSubcategory`),
  KEY `fk_Subcategory_Category1_idx` (`Category_idCategory`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `subcategory` */

insert  into `subcategory`(`idSubcategory`,`Category_idCategory`,`SubCategory_name`,`Subcategory_Desc`,`image_tile_url`) values (1,1,'Categoria 22','Una descripcion','3c51c-lighthouse.jpg');

/*Table structure for table `submodulos` */

DROP TABLE IF EXISTS `submodulos`;

CREATE TABLE `submodulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modulo_id` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL,
  `orden` int(5) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `submodulos` */

insert  into `submodulos`(`id`,`modulo_id`,`nombre`,`action`,`orden`) values (1,5,'Liquidacion de Sueldos','sueldos/liquidacion',3),(2,1,'Contratos','rrhh/contratos',2),(3,1,'ABM de Empleados','rrhh/empleados',1),(4,4,'Tipo de Licencias','rrhh/tipo_licencias',1),(5,5,'Estructuras Salariales','sueldos/estructuras',1),(6,5,'Grupos Items','sueldos/grupos_items_sueldos',1),(7,5,'Items Recibo Sueldo','sueldos/items_sueldos',2),(8,4,'Solicitud de Licencias','rrhh/licencias',1),(9,1,'Datos AFIP','rrhh/datos_afip',99),(10,1,'Grupo Familiar','rrhh/grupo_familiar',99);

/*Table structure for table `tag` */

DROP TABLE IF EXISTS `tag`;

CREATE TABLE `tag` (
  `idTag` int(11) NOT NULL AUTO_INCREMENT,
  `Tag_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTag`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tag` */

insert  into `tag`(`idTag`,`Tag_name`) values (1,'Tag_1'),(2,'cgbx');

/*Table structure for table `tipo_licencias` */

DROP TABLE IF EXISTS `tipo_licencias`;

CREATE TABLE `tipo_licencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `es_paga` enum('SI','NO') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_licencias` */

insert  into `tipo_licencias`(`id`,`nombre`,`es_paga`) values (1,'Enfermedad','NO');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `tbl_users_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activationkey` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `secondname` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `dateofbirth` date DEFAULT NULL,
  `address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `interests` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profileprivacy` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accountactive` int(11) DEFAULT NULL,
  `accountblocked` int(11) DEFAULT NULL,
  `registereddate` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastloggenindate` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `appearonline` int(11) DEFAULT NULL,
  `userlvl` int(1) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  PRIMARY KEY (`tbl_users_id`),
  KEY `fk_tbl_users_tbl_pictures1` (`tbl_users_id`),
  KEY `fk_tbl_users_tbl_loggedin_users1` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`tbl_users_id`,`username`,`password`,`salt`,`activationkey`,`email`,`firstname`,`secondname`,`lastname`,`dateofbirth`,`address`,`country`,`interests`,`profileprivacy`,`accountactive`,`accountblocked`,`registereddate`,`lastloggenindate`,`appearonline`,`userlvl`,`phone`) values (1,'administrador','7c4a8d09ca3762af61e59520943dc26494f8941b','3vWpuQ+xQ5QTKT+T0WouNKtdug0HAqN6Ll3yr4P1BiaoQ','ac140f4c202fee5a707cbe7b733d627c','info@demo.com','User','Jay','Demo','2013-11-22','none',1,'Musica','public',1,0,'1376589072','1395784965',1,0,NULL);

/*Table structure for table `usuarios_modulos` */

DROP TABLE IF EXISTS `usuarios_modulos`;

CREATE TABLE `usuarios_modulos` (
  `modulo_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `orden` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuarios_modulos` */

insert  into `usuarios_modulos`(`modulo_id`,`usuario_id`,`orden`) values (1,0,NULL),(2,2,0),(2,0,NULL),(1,1,0),(4,1,1),(5,1,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
