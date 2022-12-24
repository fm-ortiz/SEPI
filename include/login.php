<?php
include( 'include/conexion.php' );
//session_start();
//if ($_SESSION['usr'] == '' ) {
//	echo "<script LANGUAGE='JavaScript'>";
//	echo "(alert('Acceso No Autorizado'))";
//	echo "</script>";
//	echo "<script LANGUAGE='JavaScript'>";
	//echo "{window.location.self= history.back()}";
//	echo "{window.location='index.php'}";
//	echo "</script>";
//}
if (isset($_COOKIE["cokiuser"])) {
//echo $_COOKIE["cokiuser"];
  $sql = "SELECT * FROM tblalumno where strnui = '".$_COOKIE["cokiuser"]."' or strcodnombre='".$_COOKIE["cokiuser"]."'";
  $rs = odbc_exec($conn, $sql) or die ("Problema de acceso 00001");
    while(odbc_fetch_row($rs)) {
	$nombre = odbc_result($rs, "strnombre");
	$usrs = odbc_result($rs, "strnui");
	//echo($usr);
	//$clave = odbc_result($rs, "strClave");
	//$byteTipoUsuario = odbc_result($rs, "byteTipoUsuario");
	//$nui = odbc_result($rs, "IDUsuario");
	//$num_reg++;
    //$usuario = odbc_result($rs, "strcodnombre");
	}
} else {
echo "no tengo cooki";
	echo "<script LANGUAGE='JavaScript'>";
	echo "(alert('Acceso No Autorizado'))";
	echo "</script>";
	echo "<script LANGUAGE='JavaScript'>";
	//echo "{window.location.self= history.back()}";
	echo "{window.location='index.php'}";
	echo "</script>";
}
?>