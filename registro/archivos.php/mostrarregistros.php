$ titulo_sitio = "Registro simple de usuarios" ;
$ author = "Seminario de Titulación 2021" ;
$ viewport = "width = device-width, initial-scale = 1.0" ;
$ palabras clave = "registro, registro simple, registro simple de usuarios" ;
$ descripción = "Registro simple de usuarios con PHP y MySQL" ;
require_once ( "conexion.php" );

$ meta_nombre1 = "autor" ;
$ meta_nombre2 = "ventana gráfica " ;
$ meta_nombre3 = "palabras clave" ;
$ meta_nombre4 = "descripción" ;
$ solicitud = "SELECCIONAR * DE datos_usuarios PEDIR POR Nombre ASC" ;
$ resultado = mysqli_query ( $ conexión , $ solicitud );

$ sub_titulo = "Usuarios Registrados" ;
echo  "\ t <h2>" . $ sub_titulo . "</h2> \ n" ;

echo  "\ t <table cellpadding = '10 'cellspacing = '10'>
\ t \ t <tr>
\ t \ t \ t <th> Nombres </th>
\ t \ t \ t <th> Apellidos </th>
\ t \ t \ t <th> Correos </th>
\ t \ t \ t <th> Teléfonos </th>
\ t \ t \ t <th> Acción </th>
\ t \ t </tr> \ n " ;
while ( $ usuarios_registrados = mysqli_fetch_array ( $ resultado )) {
	$ usuario_nombre = $ usuarios_registrados [ 'Nombre' ];
	$ usuario_a Apellidos = $ usuarios_registrados [ 'Apellido' ];
	$ usuario_correo = $ usuarios_registrados [ 'Correo' ];
	$ usuario_telefono = $ usuarios_registrados [ 'Telefono' ];
	$ usuario_id = $ usuarios_registrados [ 'ID' ];
	$ enlace_borrar = "<a id = 'enlace_borrar' href = '.. / Registro_Simple / archivos_php / borrar_registros.php? id =" . $ usuario_id . "'> Eliminar </a>" ;

	echo  "\ t \ t <tr> \ n" ;
	echo  "\ t \ t \ t <td>" . $ usuario_nombre . "</td> \ n" ;
	echo  "\ t \ t \ t <td>" . $ usuario_a Apellidos . "</td> \ n" ;
	echo  "\ t \ t \ t <td>" . $ usuario_correo . "</td> \ n" ;
	echo  "\ t \ t \ t <td>" . $ usuario_telefono . "</td> \ n" ;
	echo  "\ t \ t \ t <td>" . $ enlace_borrar . "</td> \ n" ;
	echo  "\ t \ t </tr> \ n" ;
}
echo  "\ t </table> \ n" ;
