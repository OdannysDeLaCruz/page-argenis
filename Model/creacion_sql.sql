create database pagargenis;
	use pagargenis;

	create table contenido (

		id_c int not null  AUTO_INCREMENT,
		seccion varchar(100),
		titulo varchar(200),
		mensaje text,

		primary key (id_c)


		)Engine=InnoDB;

	create table videos (

		id_v int not null,
		titulo varchar(150),
		url varchar(200),
		id_c1 int not null,

		primary key (id_v),
		foreign key (id_c1)references contenido(id_c)

		)Engine=InnoDB;

	create table opiniones (

		id_o int not null auto_increment,
		opinion text,
		opinador varchar(50),

		primary key (id_o)

		)Engine=InnoDB;

	create table contacto (

		id 			int not null auto_increment,
		titulo  	varchar (100),
		tel 		varchar(30), --no va almacenar numero sino texto
		nomb_usu 	varchar(50),
		nombre_logo varchar(45),

		primary key(id)

		)Engine=InnoDB;

	create table galeria (

		id int not null auto_increment,
		titulo varchar(50),
		subtitulo varchar(150),
		apodo varchar(50), /*texto que identifica la galeria "Galería" */
		imagen varchar(50),

		primary key(id)

		)Engine=InnoDB;

	create table items (

		id_i int not null AUTO_INCREMENT,
		texto text,
		id_c2 int not null,

		primary key (id_i),
		foreign key (id_c2)references contenido(id_c) 

		)Engine=InnoDB;
