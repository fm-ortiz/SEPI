<?php
include( 'conexion.php' );
include( 'periodo.php' );

$sql = "SELECT * from tblperiodo where stryear= '$yearActual'  and strperiodo='$strPeriodo'";
  $rs = odbc_exec($conn, $sql) or die ("Problema de acceso consulta matricula");
    $num_reg_periodo = 0;
	//$num_reg++;
	//echo($sql);
	
	    while(odbc_fetch_row($rs)) {
	//$clave = odbc_result($rs, "strClave");
	//$byteTipoUsuario = odbc_result($rs, "byteTipoUsuario");
	//$nui = odbc_result($rs, "IDUsuario");
    //$usuario = odbc_result($rs, "strcodnombre");
	$num_reg_periodo++;
	}

	//if ($num_reg_periodo == 1) {
	//	$num_reg_periodo == 0
		//echo("entre");
	//	} else 
		//echo("else");
	//	$num_reg_periodo == 1
			
if($num_reg_periodo == 1) {
$num_reg_periodo == 0;
} else {
$num_reg_periodo == 1;
}		
?>