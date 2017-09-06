<?php
/*
Archivo de configuración general
*/

/*0-Localhost | 1-Producción*/
$estado = 0;
$carpetas = 'GranTeocalli/';
$nombreProyecto = "gt-ese/";

DEFINE('CORREO_CONTACTO','contacto@flubox.com.mx');
DEFINE('TITULO_CORREO_CONTACTO', 'Nuevo mensaje de contacto via web');

switch ($estado) {
	case '0':
		DEFINE('LINK','http://localhost/'.$carpetas.$nombreProyecto);
	break;

	case '1':
	  DEFINE('LINK','http://www.esenciateotihuacan.com');
	break;

	case '2':
	  DEFINE('LINK','http://192.168.1.79/'.$carpetas.$nombreProyecto);
}


?>