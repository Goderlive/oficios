<?php
date_default_timezone_set('America/Mexico_City');

// local
//$conect = 'mysql:host=localhost;dbname=planeacion_y_evaluacion;charset=utf8';
$username = 'root';
$dbpass = '';


// metepec.simontspbrm.com
$conect = 'mysql:host=localhost;dbname=ofi_metepec;charset=utf8';
//$username = 'simontsp_supermetepec';
//$dbpass = 'Stokes170390??';




try {
	$con = new PDO($conect, $username , $dbpass);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
	echo 'Error conectando con la base de datos: ' . $e->getMessage();
}
