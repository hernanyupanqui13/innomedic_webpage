# Host: localhost  (Version 8.0.17)
# Date: 2020-07-02 10:33:47
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "t_areas"
#

DROP TABLE IF EXISTS `t_areas`;
CREATE TABLE `t_areas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_areas"
#

INSERT INTO `t_areas` VALUES (1,'\r\nOdontología','icon-dental','Consiste en solicitar al paciente que, tras una inspiración máxima, expulse todo el aire de sus pulmones durante el tiempo que necesite para ello. Permite la medición de los llamados “volúmenes estáticos”.'),(2,'Medicina','icon-medicine','En Medicina estudian la prevención, el diagnóstico, el pronóstico, el tratamiento y el alivio de las enfermedades y la prevención de sus secuelas; y las prácticas clínica, familiar y comunitaria o las acciones sociales en salud.'),(3,'Terapia física ','fas fa-hiking fa-lg','Nuestra experiencia en este servicio permite que nuestros profesionales altamente calificados puedan realizar el tratamiento de los pacientes con limitaciones funcionales agudas o crónicas, que se presentan como resultado de enfermedades o lesiones.'),(4,'Radiología','fas fa-file-prescription fa-lg','Para lograr un diagnóstico acertado, esta especialidad se encarga de generar imágenes del interior del cuerpo utilizando Rayos X, Ultrasonido y Campos Magnéticos.'),(5,'Triaje','fa fa-medkit fa-lg','En triage es un sistema de ​selección y clasificación de pacientes en los servicios de urgencia, basado en sus necesidades terapéuticas y los recursos disponibles para atenderlo.'),(6,'Electrocardiograma','fa fa-file-medical-alt  fa-lg','Un electrocardiograma es un procedimiento simple e indoloro que mide la actividad eléctrica del corazón. Cada vez que el corazón late, una señal eléctrica circula a través de él. Un electrocardiograma muestra si su corazón está latiendo a un ritmo y con una fuerza normal. También muestra el tamaño y la posición de las cámaras del corazón. Un electrocardiograma anormal puede ser un signo de daño o enfermedad del corazón.'),(7,'Laboratorio','icon-lab','El laboratorio tiene un historial superior de desempeño de alta calidad y está dedicado a proporcionar un servicio preciso, oportuno y rentable a nuestros médicos, sus pacientes y la comunidad en general.'),(8,'Cardiología','icon-cardiology','Nuestra especialidad de Cardiología se centra en el diagnóstico, tratamiento y prevención de problemas de salud relacionados con el corazón, las arterias y venas que componen el sistema cardiovascular.'),(9,'Oftalmología','fas fa-glasses fa-lg','Esta especialidad esta encargada del tratamiento de las enfermedades de los ojos, incluyendo el globo ocular, su musculatura, el sistema lagrimal y los párpados.'),(10,'Audiometría','fa fa-stethoscope fa-lg','La audiometría es una prueba que evalúa el funcionamiento del sistema auditivo, que permite determinar la capacidad de una persona para escuchar los sonidos y la fase del proceso de audición que está alterada.'),(11,'Espirometría','fas fa-head-side-cough-slash fa-lg','Consiste en solicitar al paciente que, tras una inspiración máxima, expulse todo el aire de sus pulmones durante el tiempo que necesite para ello. Permite la medición de los llamados “volúmenes estáticos”, por lo que obtendremos algunos de los siguientes volúmenes y capacidades.'),(12,'Psicología','icon-brain','Brindamos una gama completa de servicios de salud mental con diferentes niveles de intensidad.');

#
# Structure for table "t_blog"
#

DROP TABLE IF EXISTS `t_blog`;
CREATE TABLE `t_blog` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT '0000-00-00 00:00:00',
  `img` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_blog"
#


#
# Structure for table "t_busqueda"
#

DROP TABLE IF EXISTS `t_busqueda`;
CREATE TABLE `t_busqueda` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "t_busqueda"
#


#
# Structure for table "t_categoria_empleado"
#

DROP TABLE IF EXISTS `t_categoria_empleado`;
CREATE TABLE `t_categoria_empleado` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) DEFAULT NULL,
  `categoria_` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

#
# Data for table "t_categoria_empleado"
#

INSERT INTO `t_categoria_empleado` VALUES (1,'Coordinador Médico','CoordinadorMédico'),(2,'Médico Auditor','MédicoAuditor'),(4,'Licenciado en Enfermeria','LicenciadoenEnfermeria'),(6,'CAOHC y NIOSH','CAOHCyNIOSH'),(10,'Licenciado en Psicología','LicenciadoenPsicología'),(11,'Médico Auditor','MédicoAuditor'),(12,'Médico Cardiólogo','MédicoCardiólogo'),(13,'Médico Neumólogo','MédicoNeumólogo'),(14,'Médico Oftalmólogo','MédicoOftalmólogo'),(15,'Médico Ocupacional','MédicoOcupacional'),(16,'Médico Otorrinolaringólogo','MédicoOtorrinolaringólogo'),(17,'Médico Radiológo','MédicoRadiológo'),(18,'Terapia Física y Rehabilitación','TerapiaFísicayRehabilitación');

#
# Structure for table "t_cita"
#

DROP TABLE IF EXISTS `t_cita`;
CREATE TABLE `t_cita` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT '0000-00-00 00:00:00',
  `service` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `message` text,
  `employe` varchar(255) DEFAULT NULL,
  `ruc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_cita"
#

INSERT INTO `t_cita` VALUES (1,'Web-delete','escudero059407@hotmail.com','123456734',NULL,'2020-06-09 11:16:57',NULL,NULL,'edwqdqqqqqqqqqqqqqqqqqqqqqqqqqqqq','ESCUDERO HUILLCAMASCCO EVARISTO','10727571499'),(2,'Web-delete','escudero0594@hotmail.com','123456789',NULL,'2020-06-09 11:18:17',NULL,NULL,'hola deseo que se contacten conmigo por whasapt','ESCUDERO HUILLCAMASCCO EVARISTO','10727571499'),(3,'dwdwdw','dwdddwd@innomedic.pe','',NULL,'2020-06-09 11:44:13',NULL,NULL,'','',''),(4,'dwqdqwdqwdwqd','wqdqwdwdwdq@innop.com','',NULL,'2020-06-09 11:46:02',NULL,NULL,'dwqddd','',''),(5,'evaristo escudero huillcamascco','escudero0594@innom.com','924543121',NULL,'2020-06-09 12:19:31',NULL,NULL,'dsdwdwdwdwdwdwdqwd dwqdwqdwqd','ESCUDERO HUILLCAMASCCO EVARISTO','10727571499'),(6,'dwdw','escudero059407@hotmail.com','234567331',NULL,'2020-06-09 05:46:00',NULL,NULL,'dwdqwdqwdddqwdwqdwdwqdwqdwdwdw','ESCUDERO HUILLCAMASCCO EVARISTO','10727571499'),(7,'fewfewf','wertgh@inn.pe','123456789',NULL,'2020-06-11 09:35:39',NULL,NULL,'w3ffwf fwf  wwdwdwdwd','ESCUDERO HUILLCAMASCCO EVARISTO','10727571499'),(8,'sqsqwsdqwd','dwqdqwdwqd@iin.pe','123456789',NULL,'2020-06-11 09:37:51',NULL,NULL,'dwqqqqqqqqqqqqqqqqqqqqqqqqqqq','ESCUDERO HUILLCAMASCCO EVARISTO','10727571499'),(9,'Web-delete','escudero059407@hotmail.com','213456890',NULL,'2020-06-11 09:44:01',NULL,NULL,'er2wquikjhgf fefe fewf ewff fewfewfwefwef','ESCUDERO HUILLCAMASCCO EVARISTO','10727571499'),(10,'Angelo ramirez  gomez','Aramirez@inmomedic.pe','924543121',NULL,'2020-06-11 10:16:41',NULL,NULL,'Buenas tardes deswo que se comuniquen conmigo','RAMIREZ GOMEZ ANGELO MIGUEL','10764079081');

#
# Structure for table "t_clientes_empresas"
#

DROP TABLE IF EXISTS `t_clientes_empresas`;
CREATE TABLE `t_clientes_empresas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `img` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_clientes_empresas"
#

INSERT INTO `t_clientes_empresas` VALUES (1,'Savar ','Cooporación Logística','special-photo-01.png','Logística','http://www.savar.com.pe/websavar/new/principal.php',1),(2,'Ingeco','Ingeniería de la construcción','special-photo-02.png','Ingeniería','http://ingeco.com.pe/',1),(3,'Insn','Instituto nacional de salud del niño','special-photo-03.png','Salud','http://www.insn.gob.pe/',1),(4,'Sat','Servicio de administración tributaria de Lima','special-photo-04.png','Administración','https://www.sat.gob.pe/Websitev9',1),(5,'McDonald\'s','McDonald\'s es una cadena de restaurantes de comida rápida estadounidense','mcdonalds-logo.png','Cadena de restaurantes','https://www.mcdonalds.com.pe/',1),(6,'Club de Regatas ','El Club de Regatas \"Lima\", es una asociación civil no lucrativa de la ciudad de Lima, Perú. ','club-regatas.png','Deporte','https://www.crl.pe/',1),(7,'Gelarti',' Helado Gourmet','gelarti.png','Heladeria','http://www.gelarti.com.pe/',1),(8,'Creditex','Creditex, la empresa textil con mayor integración vertical en el Perú.','Creditex.png','Textil ','http://www.creditex.com.pe/',1),(9,'Securitas','En Securitas Perú estamos preparados para brindarles Servicios de Protección','securitas.png','Protección ','https://www.securitasperu.com/',1),(10,'Cesel','CESEL S.A. es una empresa consultora con 45 años desarrollando consultoría...','cesel.png','Consultora ','http://www.cesel.com.pe/',1),(11,'Odisea',' Empresa líder en Prevención de Pérdidas y Riesgos del mercado peruano..','odisea.png','Seguridad ','http://www.grupoodisea.com.pe/',1),(12,'Falabella','Banco Falabella es un banco perteneciente al grupo Solari ...','falabella.png','Banco ','https://www.bancofalabella.pe/home/',1),(13,'Alteliza','Especialistas en Limpieza, Saneamiento y Administración de Instalaciones','alteliza.png','Alteliza Limpieza, saneamiento y mantenimiento.','http://www.alteliza.com.pe/',1),(14,'Americatel','Americatel Perú es una empresa de telecomunicaciones y tecnologías de la información del Grupo Entel','americatel.png','Telecomunicaciones y tecnologías de la información.','https://www.americatel.com.pe/',1),(15,'Adex','ADEX es el gremio empresarial líder del comercio exterior peruano, trabaja por el desarrollo del país y promoción de las exportaciones peruanas','asociaciondeexportadoresadex.png','Asociación de Exportadores ','https://www.adexperu.org.pe/',1),(16,'c',NULL,NULL,NULL,NULL,2),(17,'sc',NULL,NULL,NULL,NULL,2),(18,'sc',NULL,NULL,NULL,NULL,2),(19,'s',NULL,NULL,NULL,NULL,2),(20,'cs',NULL,NULL,NULL,NULL,2),(21,'cs',NULL,NULL,NULL,NULL,2),(22,'c',NULL,NULL,NULL,NULL,2),(23,'sc',NULL,NULL,NULL,NULL,2),(24,'sc',NULL,NULL,NULL,NULL,2),(25,'sc',NULL,NULL,NULL,NULL,2),(26,'s',NULL,NULL,NULL,NULL,2),(27,'c',NULL,NULL,NULL,NULL,2),(28,'sc',NULL,NULL,NULL,NULL,2),(29,'s',NULL,NULL,NULL,NULL,2),(30,'c',NULL,NULL,NULL,NULL,2),(31,'sc',NULL,NULL,NULL,NULL,2);

#
# Structure for table "t_consultorias"
#

DROP TABLE IF EXISTS `t_consultorias`;
CREATE TABLE `t_consultorias` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img_small` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_consultorias"
#

INSERT INTO `t_consultorias` VALUES (1,'slider-gallery-00.jpg','Admisión','slider-gallery-00-sm.jpg'),(2,'slider-gallery-01.jpg','Medicina','slider-gallery-01-sm.jpg'),(4,'slider-gallery-07.jpg','Audiometría','slider-gallery-07-sm.jpg'),(5,'slider-gallery-06.jpg','Oftalmología','slider-gallery-06-sm.jpg'),(6,'slider-gallery-08.jpg','Electrocardiograma','slider-gallery-08-sm.jpg'),(7,'slider-gallery-03.jpg','Laboratorio','slider-gallery-03-sm.jpg'),(8,'slider-gallery-05.jpg','Rayos x','slider-gallery-05-sm.jpg'),(9,'slider-gallery-04.jpg','Psicología','slider-gallery-04-sm.jpg');

#
# Structure for table "t_empleado"
#

DROP TABLE IF EXISTS `t_empleado`;
CREATE TABLE `t_empleado` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `cip` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_empleado"
#

INSERT INTO `t_empleado` VALUES (1,'Dra. Lesley Alicia Martha  Morales Chumacero','Coordinadora Médico ','photodos.png','0000-00-00 00:00:00','534535','2','CoordinadorMédico'),(2,'Dra. Steisy Cindy Riveros Tineo','Médico Auditor','photouno.png','0000-00-00 00:00:00',NULL,'2','MédicoAuditor'),(3,'Dr. Alvaro Smelin Aguilar Montoya','Médico Auditor','Dr. Alvaro Smelin Aguilar Montoya.png','0000-00-00 00:00:00',NULL,'2','MédicoAuditor'),(4,'Dr. David Conrado Montoya Goicochea','Médico Cardiólogo','Dr. David Conrado Montoya Goicochea.png','0000-00-00 00:00:00',NULL,'1','MédicoCardiólogo'),(5,'Dr. Jose Antonio  Rivera Mendoza','Médico Neumólogo','Dr. Jose Antonio  Rivera Mendoza.png','0000-00-00 00:00:00',NULL,'1','MédicoNeumólogo'),(6,'Dra. Anahi Astrid Galecio Balarezo','Médico Ocupacional','Dra. Anahi Astrid Galecio Balarezo.png','0000-00-00 00:00:00',NULL,'2','MédicoOcupacional'),(7,'Dr. Eduardo Amilcar Berrios Luna','Médico Otorrinolaringólogo','Dr. Eduardo Amilcar Berrios Luna.png','0000-00-00 00:00:00',NULL,'1','MédicoOtorrinolaringólogo'),(8,'Dra. Cecilia Francis Medina Aquino','Médico Oftalmólogo','Dra. Cecilia Francis Medina Aquino.png','0000-00-00 00:00:00',NULL,'1','MédicoOftalmólogo'),(9,'Dr. Percy Alfredo Espinal Bravo','Médico Radiológo','Dr. Percy Alfredo Espinal Bravo.png','0000-00-00 00:00:00',NULL,'1','MédicoRadiológo'),(10,'Lic.  Kevin Pongo Briceño','Certificado en CAOHC  y NIOSH','Lic. Kevin Pongo Briceno.png','0000-00-00 00:00:00',NULL,'1','CAOHCyNIOSH'),(11,'Lic. Anthony  Córdova Martinez','Licenciado en Psicología','phototres.png','0000-00-00 00:00:00',NULL,'2','LicenciadoenPsicología'),(12,'Lic. Lian Enrique Hernandez Acevedo','Licenciado en Psicología','phonocuatro.png','0000-00-00 00:00:00',NULL,'2','LicenciadoenPsicología'),(13,'Lic. Jhon Brian Jaimes Bazan ','Licenciado en Enfermeria','Lic. Jaimes Bazan Jhon Brian.png','0000-00-00 00:00:00',NULL,'2','LicenciadoenEnfermeria'),(14,'Lic. Diana Carolina Valverde Alberco ','Licenciado en Enfermeria','Lic. Valverde Alberco Diana Carolina.png','0000-00-00 00:00:00',NULL,'2','LicenciadoenEnfermeria'),(15,'Lic. Yathya Yanina Mogollon Montero ','Licenciado en Enfermeria','Lic. Mogollon Montero Yathya Yanina.png','0000-00-00 00:00:00',NULL,'1','LicenciadoenEnfermeria'),(16,'Lic. Claudia Ines Quispe Porras','Tecnólogo Médico en Terapia Física y Rehabilitación','Lic. Claudia Ines Quispe Porras.png','0000-00-00 00:00:00',NULL,'1','TerapiaFísicayRehabilitación'),(17,'Lic. Reynaldo Artica Vicente','Tecnólogo Médico en Laboratorio Clínico','Lic. Reynaldo Artica Vicente.png','0000-00-00 00:00:00',NULL,'2','LaboratorioClínico'),(18,'Lic. Danny Mendoza Masias','Tecnólogo Médico en Laboratorio Clínico','Lic. Danny Mendoza Masias.png','0000-00-00 00:00:00',NULL,'2','LaboratorioClínico'),(19,'Lic. Rosa Fabiola Yparraguirre Santander','Tecnólogo Médico en Optometría Clinica','Lic. Rosa Fabiola Yparraguirre Santander.png','0000-00-00 00:00:00',NULL,'1','LaboratorioClínico');

#
# Structure for table "t_eventos"
#

DROP TABLE IF EXISTS `t_eventos`;
CREATE TABLE `t_eventos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "t_eventos"
#


#
# Structure for table "t_gallery"
#

DROP TABLE IF EXISTS `t_gallery`;
CREATE TABLE `t_gallery` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img_about` text,
  `img_about1` text,
  `img_about2` text,
  `img_about3` text,
  `img_about4` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_gallery"
#

INSERT INTO `t_gallery` VALUES (1,'about-01.jpg','about-02.jpg','about-03.jpg','about-04.jpg','banner-right.jpg');

#
# Structure for table "t_oficina"
#

DROP TABLE IF EXISTS `t_oficina`;
CREATE TABLE `t_oficina` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `desc` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_oficina"
#

INSERT INTO `t_oficina` VALUES (1,'Nuestras Áreas','Comodidades','<!--Nuestra clínica cuenta con la última generación en la  tecnología, capaz de manejar todas sus necesidades.-->');

#
# Structure for table "t_preguntas"
#

DROP TABLE IF EXISTS `t_preguntas`;
CREATE TABLE `t_preguntas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text,
  `date` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "t_preguntas"
#

INSERT INTO `t_preguntas` VALUES (1,'evaristo escudero huillcamascco','escudero0594@hotmail.com','924543121','hola tengo una pregunta, de como realizar el mensaje de texto','2020-06-10 06:38:38'),(2,'qwertyuiolk,mjhfvdc','ASDF@innomedic.pe','123456789','dqw  usdhqusdhbq dcwqudnqwudwqd','2020-06-11 09:39:26');

#
# Structure for table "t_preguntas_frecuentes"
#

DROP TABLE IF EXISTS `t_preguntas_frecuentes`;
CREATE TABLE `t_preguntas_frecuentes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `status` int(11) DEFAULT '0',
  `identificador` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "t_preguntas_frecuentes"
#

INSERT INTO `t_preguntas_frecuentes` VALUES (1,'¿Como ingresar a la plataforma web de resultados?','<p>Ingresar a la Pagina web:&nbsp;<span style=\"color: #ff0000;\"><a  title=\"Innomedic International\" href=\"http://www.innomedic.pe/\" target=\"_blank\" rel=\"noopener\"><strong>www.innomedic.pe</strong></a></span> opcion <span style=\"color: #000000;\"><strong>\"En linea\"</strong></span> seguidamente ingresar a la opci&oacute;n <strong><span style=\"color: #000000;\">\"Resultados\".</span></strong><br />o caso contrario, ingresar directamente en el siguiente link:&nbsp;<span style=\"color: #ff0000;\"><strong><a title=\"Innomedic International\" href=\"http://200.4.213.137:8021/\" target=\"_blank\" rel=\"noopener\">Click aqu&iacute;!.</a></strong>&nbsp; </span>Ingresar su Usuario y Contrase&ntilde;a y la opcion <strong><span style=\"color: #000000;\">\"Ingresar\"</span></strong></p>',1,'edit1'),(2,'¿Como puedo ver los resultados de mis trabajadores?','<p>Ingresar a la Pagina web:&nbsp;<span style=\"color: #ff0000;\"><a title=\"Innomedic International\" href=\"http://www.innomedic.pe/\" target=\"_blank\" rel=\"noopener\"><strong>www.innomedic.pe</strong></a></span> opcion <span style=\"color: #000000;\"><strong>\"En linea\"</strong></span> seguidamente ingresar a la opci&oacute;n <strong><span style=\"color: #000000;\">\"Resultados\".</span></strong><br />o caso contrario, ingresar directamente en el siguiente link:&nbsp;<span style=\"color: #ff0000;\"><strong><a title=\"Innomedic International\" href=\"http://200.4.213.137:8021/\" target=\"_blank\" rel=\"noopener\">Click aqu&iacute;!.</a></strong>&nbsp; </span>Ingresar su Usuario y Contrase&ntilde;a y la opcion <strong><span style=\"color: #000000;\">\"Ingresar\",&nbsp;</span></strong><span style=\"color: #000000;\">Una vez ingresado al sistema le aparacer&aacute;<strong> \"Resultados en Linea\"</strong>&nbsp;con las opciones de busqueda como:&nbsp;<br /><strong>Fecha Inicio, Apellidos y Nombres, Formato, Empresa, Proyecto, Fecha Final, Doc. de Identidad, Aptitud, Perfil</strong> y el boton <strong>\"Buscar\"</strong>. La busqueda mas r&aacute;pida es Ingresar la fecha que ingreso del examen del trabajador, hacer Click en el boton <strong>\"Buscar\".</strong>&nbsp;Caso contrario llenar todo los filtros que sea necesario y hacer click en boton <strong>\"Buscar\".</strong></span></p>\n<p><span style=\"color: #000000;\">Una vez realizado el proceso el sistema deber&aacute; de cargar los registros de los trabajadores. Una vez cargado en el sistema hacer click en el icono de <strong>Impresora</strong>.</span></p>\n<p><span style=\"color: #000000;\">Hacer Click en <strong>Imprimir,</strong>&nbsp;guardar como <strong>PDF</strong>. </span></p>',1,'edit2'),(3,'¿Como puedo programar una cita para mis trabajadores?','<p>Ingresar a la Pagina web:&nbsp;<span style=\"color: #ff0000;\"><a title=\"Innomedic International\" href=\"http://www.innomedic.pe/\" target=\"_blank\" rel=\"noopener\"><strong>www.innomedic.pe</strong></a></span> opcion <span style=\"color: #000000;\"><strong>\"En linea\"</strong></span> seguidamente ingresar a la opci&oacute;n <strong><span style=\"color: #000000;\">\"Resultados\".</span></strong><br />o caso contrario, ingresar directamente en el siguiente link:&nbsp;<span style=\"color: #ff0000;\"><strong><a title=\"Innomedic International\" href=\"http://200.4.213.137:8021/\" target=\"_blank\" rel=\"noopener\">Click aqu&iacute;!.</a></strong>&nbsp; </span>Ingresar su Usuario y Contrase&ntilde;a y la opcion <strong><span style=\"color: #000000;\">\"Ingresar\",&nbsp;</span></strong><span style=\"color: #000000;\">Una vez ingresado al sistema le aparacer&aacute;<strong> \"Programar Cita\"</strong>&nbsp;con las opciones como:&nbsp;<br /><strong>Empresa, Fecha de Programaci&oacute;n, DNi, Apellido Paterno, Apellido Materno, Nombres, Fecha de Nacimiento, Correo Electronico, Telefono, Proyecto,Perfil,</strong><br /><strong>&Aacute;rea, Puesto( Caso contrario de no encontrar el puesto agregar \"Nuevo puesto\"), Formatos, Tipo Examen, Observaciones</strong> y el boton<strong> \"Grabar</strong>\". Una vez ingresado todo los campos requeridos hacer click en <strong>\"Grabar\",</strong> el sistema validar&aacute; los datos que se ingreso. Un ves validado se guarda en la base de datos, se muestra en al interfaz <strong>\"Citas Programadas\".</strong></span></p>',1,'edit3');

#
# Structure for table "t_sede"
#

DROP TABLE IF EXISTS `t_sede`;
CREATE TABLE `t_sede` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `maps` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_sede"
#

INSERT INTO `t_sede` VALUES (1,'La Victoria ',' Av. Canadá 1335 - 1339, La Victoria, Lima, Perú',NULL),(2,'San borja',' Av. Javier Prado Este 2638, San Borja, Lima, Perú',NULL);

#
# Structure for table "t_servicio"
#

DROP TABLE IF EXISTS `t_servicio`;
CREATE TABLE `t_servicio` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "t_servicio"
#

INSERT INTO `t_servicio` VALUES (1,'Servicio Agil Y Eficaz','Contamos con avanzados sistemas de información y equipos de última tecnología que nos permite brindarte el mejor servicio.','icon-first-aid-kit'),(2,'Servicios Completos en Salud Ocupacional','Brindamos Servicios Ocupacionales del más alto nivel, cumpliendo con la normativa obligatoria vigente Nº29.783, correspondiente a la \"Ley de Seguridad y Salud en el Trabajo\".','icon-flask'),(3,'Médicos Profesionales','Médicos calificados y certificados para atención médica de calidad.','icon-doctor');

#
# Structure for table "t_slider"
#

DROP TABLE IF EXISTS `t_slider`;
CREATE TABLE `t_slider` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` text,
  `img` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `btn` varchar(255) DEFAULT NULL,
  `estado` int(11) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_slider"
#

INSERT INTO `t_slider` VALUES (1,'LIDERES EN SALUD OCUPACIONAL','Con la filosofía de mejora continua.','slide-02.jpg',NULL,'Saber mas',1),(2,'MAS DE 7 DE AÑOS DE EXPERIENCIA','En salud ocupacional ','slide-01.jpg',NULL,'Mas Información',1),(3,'LA SEGURIDAD DE SALUD, SE INICIA AQUÍ','La salud es nuestros pacientes es nuestra  prioridad','slide-03.jpg',NULL,'Saber mas',1),(4,'Aperturamos las programaciones en Linea',NULL,'slide-04.png','','Programación en Linea',2);

#
# Structure for table "t_static"
#

DROP TABLE IF EXISTS `t_static`;
CREATE TABLE `t_static` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_static"
#

INSERT INTO `t_static` VALUES (1,'\r\n¿Busca un especialista certificado?','¡Siempre estamos aceptando nuevos clientes! Creemos en proporcionar la mejor atención posible a todos nuestros pacientes existentes y damos la bienvenida a nuevos clientes para que prueben el servicio que tenemos para ofrecer.','banner-callus.jpg');

#
# Structure for table "t_static_one"
#

DROP TABLE IF EXISTS `t_static_one`;
CREATE TABLE `t_static_one` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `subtitle` varchar(255) DEFAULT NULL,
  `created` date DEFAULT '0000-00-00',
  `subtitle_reser` varchar(255) DEFAULT NULL,
  `video` text,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_static_one"
#

INSERT INTO `t_static_one` VALUES (1,'Clínica Innomedic International','Innomedic es una clinica con mas de 7 años de experiencia en el mercado especializado en el servicio de Salud Ocupacional, brinda servicios de calidad que nos permite garantizar el cumplimiento de todas las evaluaciones de acuerdo a la <b>ley 29783. Ley de Seguridad y Salud en el trabajo, su reglamento y modificación Ley Nº 30222.</b>','7 años de una excelencia en servicio','2012-01-13','Realizar una cotización',NULL,NULL);

#
# Structure for table "t_suscriptor"
#

DROP TABLE IF EXISTS `t_suscriptor`;
CREATE TABLE `t_suscriptor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_suscriptor"
#

INSERT INTO `t_suscriptor` VALUES (1,'escudero059407@hotmail.com','2020-06-09 09:14:48'),(2,'escudero0594@hotmail.com','2020-06-09 09:34:11'),(3,'frrffrfrewfrew@innomed.com','2020-06-09 05:45:19'),(4,'escudero0507@hotmail.com','2020-06-11 10:06:35');

#
# Structure for table "t_time_job"
#

DROP TABLE IF EXISTS `t_time_job`;
CREATE TABLE `t_time_job` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `dia` varchar(255) DEFAULT NULL,
  `hours` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_time_job"
#

INSERT INTO `t_time_job` VALUES (1,'Lunes','07:00 AM - 17:00 PM'),(2,'Martes','07:00 AM - 17:00 PM'),(3,'Miercoles','07:00 AM - 17:00 PM'),(4,'Jueves','07:00 AM - 17:00 PM'),(5,'Viernes','07:00 AM - 17:00 PM'),(6,'Sabado','07:00 AM - 17:00 PM'),(7,'Domingo ','Cerrado');

#
# Structure for table "t_valores"
#

DROP TABLE IF EXISTS `t_valores`;
CREATE TABLE `t_valores` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_valores"
#

INSERT INTO `t_valores` VALUES (1,'Excelencia en el servicio','icon-compassion','Demostrar cuidado y sensibilidad por los diversos antecedentes de nuestros pacientes y colegas y generosidad en nuestras comunidades.'),(2,'Profesionalismo','icon-doctor','\r\n Cómo se pronuncia\r\nAdopte el cambio, fomente la invención y permanezca continuamente a la vanguardia de los avances en salud oral por el bien de nuestros pacientes.'),(3,'Ética profesional.','icon-integrity','Adherirse a altos estándares éticos y profesionales, demostrando compromiso con nuestras responsabilidades con confianza, honestidad y respeto por todos.'),(4,'Honestidad','icon-team','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi fugit ipsam laudantium animi adipisci consequuntur nobis, ab maiores voluptatem reiciendis dolores minima debitis atque iure ut magnam omnis, dolore unde.'),(5,'Responsabilidad','icon-innovation ','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi fugit ipsam laudantium animi adipisci consequuntur nobis, ab maiores voluptatem reiciendis dolores minima debitis atque iure ut magnam omnis, dolore unde.'),(6,'Puntualidad','icon-clock2','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi fugit ipsam laudantium animi adipisci consequuntur nobis, ab maiores voluptatem reiciendis dolores minima debitis atque iure ut magnam omnis, dolore unde.');

#
# Structure for table "t_ventajas"
#

DROP TABLE IF EXISTS `t_ventajas`;
CREATE TABLE `t_ventajas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_ventajas"
#

INSERT INTO `t_ventajas` VALUES (1,'Entrega de certificado de aptitud el mismo día.'),(2,'Placas de Rayos X digitalizada.'),(3,'Triple control de Calidad para los resultados.'),(4,'Sede: San Borja '),(5,'Precios Competitivos.'),(6,'Personal altamente Calificado.'),(7,'\nPlataforma MEDIWEB.');

#
# Structure for table "t_view_service"
#

DROP TABLE IF EXISTS `t_view_service`;
CREATE TABLE `t_view_service` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `desc` text,
  `img` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `img_view` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_view_service"
#

/*!40000 ALTER TABLE `t_view_service` DISABLE KEYS */;
INSERT INTO `t_view_service` VALUES (1,'Exámenes médicos ocupacionales','<ul class=\"marker-list-md\">\r\n\t<li>Evaluación médica pre ocupacional.</li>\r\n\t<li>Evaluación médica ocupacional periódica.</li>\r\n\t<li>Evaluación médica por cambio de puesto.</li>\r\n\t<li> Evaluación médica por reinserción laboral</li>\r\n\t<li> Evaluación médica post ocupacional (retiro).</li>\r\n\t<li> Evaluación médica IN HOUSE.</li>\r\n</ul>\r\n\r\n','SERVICIOS-01 (1).png',NULL,'services-01.jpg','icon-cardiology'),(5,'Monitoreos ergonómicos y de riesgos psicosociales.','Evaluaciones para identificación de factores de riesgo psicosocial y el impacto psicológico que aquellos producen en los trabajadores.\nEvaluaciones ergonómicas en los puestos de trabajo.','SERVICIOS-01 (5).png',NULL,'services-05.jpg','icon-terapevt'),(6,'Vigilancia médica','<ul class=\"marker-list-md\">\r\n\t<li>Vigilancia médica ocupacional (asesoría y supervisión).</li>\r\n\t<li>Supervisiones periódicas opinadas e inopinadas del sistema de gestión en la seguridad de la empresa.</li>\r\n\t<li>Evaluaciones de aptitud médica y psicológica para postulantes al puesto de brigadista.</li>\r\n\t<li>Capacitaciones / charlas / talleres en salud ocupacional.</li>\r\n</ul>','SERVICIOS-01 (4).png',NULL,NULL,'icon-team'),(7,'Auditorías','Evalúa el Sistema de Gestión de Seguridad y Salud en cada uno de los procesos y actividades de los colaboradores en forma sistemática con el objeto de minimizar los riesgos y corregir las desviaciones de los estándares en los que se basa el programa de control de riesgos, y proporcionar oportunidades para medir las exigencias del objetivo programado.\n','SERVICIOS-01 (2).png',NULL,'services-04.jpg','icon-pencil-writing'),(8,'Capacitaciones en salud, seguridad e higiene empresarial','El trabajador debe recibir elementos teóricos y prácticos de prevención y control de enfermedades comunes y profesionales, accidentes e incidentes y primeros auxilios, esto contribuye a la corrección de actitudes del personal en el puesto de trabajo.\n','SERVICIOS-01 (3).png',NULL,'services-03.jpg','icon-doctor');
/*!40000 ALTER TABLE `t_view_service` ENABLE KEYS */;

#
# Structure for table "t_visitas"
#

DROP TABLE IF EXISTS `t_visitas`;
CREATE TABLE `t_visitas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `direccionip` varchar(255) DEFAULT NULL,
  `direccionip4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "t_visitas"
#

INSERT INTO `t_visitas` VALUES (1,'2020-06-09 15:56:14','192.168.0.130','3232235650'),(2,'2020-06-09 15:56:14','192.168.0.130','3232235650'),(3,'2020-06-09 15:59:04','192.168.0.130','3232235650'),(4,'2020-06-09 18:00:12','192.168.0.130','3232235650'),(5,'2020-06-10 08:18:21','192.168.0.130','3232235650'),(6,'2020-06-10 14:23:57','192.168.0.130','3232235650'),(7,'2020-06-11 08:02:58','192.168.0.130','3232235650'),(8,'2020-06-11 10:14:42','192.168.0.112','3232235632'),(9,'2020-06-11 14:01:16','192.168.0.130','3232235650'),(10,'2020-06-11 16:39:28','192.168.0.130','3232235650'),(11,'2020-06-12 08:48:24','192.168.0.130','3232235650'),(12,'2020-06-12 13:10:39','192.168.0.130','3232235650'),(13,'2020-06-12 17:19:44','192.168.0.130','3232235650'),(14,'2020-06-12 19:36:12','192.168.0.130','3232235650'),(15,'2020-06-12 19:36:25','192.168.0.130','3232235650'),(16,'2020-06-13 08:25:36','192.168.0.130','3232235650'),(17,'2020-06-13 08:37:55','192.168.0.130','3232235650'),(18,'2020-06-13 12:51:27','192.168.0.130','3232235650'),(19,'2020-06-13 16:05:19','192.168.0.130','3232235650'),(20,'2020-06-15 13:30:29','192.168.0.130','3232235650'),(21,'2020-06-22 10:09:59','192.168.0.130','3232235650'),(22,'2020-06-22 11:55:02','192.168.0.130','3232235650'),(23,'2020-06-23 09:08:57','192.168.0.130','3232235650'),(24,'2020-06-24 09:48:04','192.168.0.130','3232235650'),(25,'2020-07-01 11:10:59','192.168.0.130','3232235650'),(26,'2020-07-01 14:59:57','192.168.0.130','3232235650'),(27,'2020-07-01 16:09:58','192.168.0.130','3232235650'),(28,'2020-07-02 08:03:17','192.168.0.130','3232235650'),(29,'2020-07-02 09:03:56','192.168.0.130','3232235650'),(30,'2020-07-02 09:45:32','192.168.0.130','3232235650');

#
# Structure for table "th_employe"
#

DROP TABLE IF EXISTS `th_employe`;
CREATE TABLE `th_employe` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address_one` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `phone_one` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twiter` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `views` text,
  `about` text,
  `sms_mail` text,
  `phone_emergencia` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "th_employe"
#

INSERT INTO `th_employe` VALUES (1,' Av. Canadá 1335 - 1339, La Victoria, Lima, Perú','ventas@innomedic.pe',' Av. Canadá 1335 - 1339, La Victoria, Lima, Perú',' Av. Javier Prado Este 2638, San Borja, Lima, Perú','(+51) 946 887 798','(+51) 914 007 682','https://es-la.facebook.com/InnomedicInternational/','https://www.instagram.com/innomedic_internacional/','https://twitter.com/Innomedic_Peru',NULL,'<h3 class=\" theme-color display-5 \">Misi&oacute;n&nbsp;</h3>\n<p class=\" text-justify \">Brindar un servicio de calidad a los colaboradores de nuestros clientes, asegur&aacute;ndonos que sean atendidos de la mejor manera y que sientan la seguridad de nuestras evaluaciones y resultados.</p>\n<h3 class=\" theme-color \">Visi&oacute;n&nbsp;</h3>\n<p class=\" text-justify \">Ser reconocidos como un centro de evaluaciones ocupacionales de prestigio gracias a la calidez de nuestro trato, el cumplimiento de los acuerdos con nuestros clientes, el recurso humano con el que contamos y la tecnolog&iacute;a e infraestructura de la que disponemos, todo esto con el respaldo de nuestros clientes.</p>\n','<p class=\"text-justify \">Innomedic es una clínica con mas de 7 a&ntilde;os de experiencia en el mercado especializado en el servicio de Salud Ocupacional, brinda servicios de calidad que nos permite garantizar el cumplimiento de todas las evaluaciones de acuerdo a la ley 29783.<strong> Ley de Seguridad y Salud en el trabajo, su reglamento&nbsp;</strong><strong>y modificaci&oacute;n Ley N&ordm; 30222.</strong></p>\n<p><strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://www.innomedic.pe/assets/images/content/xxxxxxxx.png\" alt=\"DIGESA\"/></strong></p>','Para recibir comunicados por correo electrónico, simplemente proporcione\r\nsu correo electrónico a continuación',NULL,'logo.png','https://www.linkedin.com/in/innomedic-international-300125ba/');
