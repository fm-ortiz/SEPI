<?php
//session_start();

// DSN por ruta de archivo
//$db = "C:\Archivos de programa\X-POS\x-pos.mdb";
//$dsn = "DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$db";

// por DSN de Sistema // así cambie la ruta, se ubica por el DSN
$dsn = "evaluador";
$userbd = "";
$pwdbd = "";
$conn = odbc_connect( $dsn, $userbd, $pwdbd );
if (!$conn) { exit( "Error al conectar: odbc 1" . $conn) or die(exit("Error odbc 1"));
}
?>
