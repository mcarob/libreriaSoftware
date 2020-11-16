select * from administrador;
select * from usuario;
insert into public.tipo_usuario (nom_tipo_usuario) values('Administrador'),('Empleado'),('Publicador'),('Cliente');
insert into public.tipo_presentacion (nom_tipo_presentacion) values ('Física'),('Digital');
insert into tipo_documento (nom_tipo_documento) values('Libro'),('Ponencia'),('Articulo');
insert into parametro (nom_parametro,valor_num_parametro,valor_str_parametro) 
values('Maximo Libros',10,null),
		('Tiempo Prestamo',7,null);
insert into idioma (nom_idioma) values('Inglés'),('Español'),('Portugues'),('Alemán'),('Frances');

insert into public.estado_prestamo (nombre_estado) values ('Reservado'),('Atrasado'),('En Espera'),('Entregado'),('Solicitado');

insert into usuario (cod_tipo_usuario,user_usuario,pass_usuario,intentos_usuario,user_registro_date,nuevo_usuario,codigo_verificacion,estado_usuario)
values	(1,'caro1','81dc9bdb52d04dc20036dbd8313ed055',0,now(),1,'81dc9bdb52d04dc20036dbd8313ed055',1),
		(1,'cubillos1','81dc9bdb52d04dc20036dbd8313ed055',0,now(),1,'81dc9bdb52d04dc20036dbd8313ed055',1);

insert into administrador(cod_usuario,nom_administrador,telefono_administrador,correo_administrador) 
values	;


create table comentario_documento(
cod_comentario serial,
	
primary key(cod_comentario)

);

/**    se crea  el procedimiento de agregar cliente  */
CREATE OR REPLACE PROCEDURE public.agregarcliente(
	correo_registro character varying,
	contra_registro character varying,
	verificacion character varying,
	nombre_usuario character varying,
	telefono_usuario character varying,
	direccion_usuario character varying)
LANGUAGE 'plpgsql'

AS $BODY$DECLARE
 codigo integer;

BEGIN
	insert into usuario(cod_tipo_usuario,user_usuario,pass_usuario,intentos_usuario,user_registro_date,nuevo_usuario,codigo_verificacion,
					estado_usuario) values(4,correo_registro,contra_registro,0,now(),1,verificacion,1);
	select cod_usuario into codigo from usuario where user_usuario=correo_registro;
	insert into cliente(
	 cod_usuario, nom_cliente, telefono_cliente, correo_cliente, direccion_cliente, habilitado)
	values
	(codigo,nombre_usuario,telefono_usuario,correo_registro,direccion_usuario,1);
END;
$BODY$;
/** se crea el procedimiento de agregar empleado*/

CREATE OR REPLACE PROCEDURE public.agregarempleado(
	correo_registro character varying,
	contra_registro character varying,
	verificacion character varying,
	nombre_usuario character varying,
	telefono_usuario character varying,
	cedula_usuario character varying)
LANGUAGE 'plpgsql'

AS $BODY$
DECLARE
 codigo integer;

BEGIN
	insert into usuario(cod_tipo_usuario,user_usuario,pass_usuario,intentos_usuario,user_registro_date,nuevo_usuario,codigo_verificacion,
					estado_usuario) values(2,correo_registro,contra_registro,0,now(),1,verificacion,1);
	select cod_usuario into codigo from usuario where user_usuario=correo_registro;
	insert into public.empleado 
	(cod_usuario, ced_empleado, nom_empleado, telefono_empleado, correo_empleado)
	values
	(codigo,cedula_usuario,nombre_usuario,telefono_usuario,correo_registro);
END;
$BODY$;

/** se crea el procedimiento de agregar publicador */
CREATE OR REPLACE PROCEDURE public.agregarpublicador(
	correo_registro character varying,
	contra_registro character varying,
	verificacion character varying,
	nombre_usuario character varying,
	cedula_usuario character varying,
	direccion_usuario character varying,
	ciudad character varying,
	pais character varying,
	telefono character varying)
LANGUAGE 'plpgsql'
AS $BODY$
DECLARE
 codigo integer;

BEGIN
	insert into usuario(cod_tipo_usuario,user_usuario,pass_usuario,intentos_usuario,user_registro_date,nuevo_usuario,codigo_verificacion,
					estado_usuario) values(3,correo_registro,contra_registro,0,now(),1,verificacion,1);
	select cod_usuario into codigo from usuario where user_usuario=correo_registro;
	insert into public.publicador(cod_usuario, ced_publicador, nom_publicador, correo_publicador,
						direccion_publicador, ciudad_publicador, pais_publicador, telefono_publicador)
	values
	(codigo,cedula_usuario,nombre_usuario,correo_registro,direccion_usuario,ciudad,pais,telefono);
END;
$BODY$;