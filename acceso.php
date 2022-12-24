<?php
include( 'include/conexion.php' );
	$usr = $_POST['usr'];
	$pwd = $_POST['pwd'];
	$blnevaluador= $_POST['blnevaluador'];

$sql = "SELECT * FROM qryUsuario WHERE (qryUsuario.IDUsuario = '$usr' Or qryUsuario.strcodnombre = '$usr') AND qryUsuario.strClave = '$pwd'";
  $rs = odbc_exec($conn, $sql) or die ("Problema de acceso 00001");
    $num_reg = 0;
	
    while(odbc_fetch_row($rs)) {
	$clave = odbc_result($rs, "strClave");
	$byteTipoUsuario = odbc_result($rs, "byteTipoUsuario");
	$nui = odbc_result($rs, "IDUsuario");
    $usuario = odbc_result($rs, "strcodnombre");
	$num_reg++;
	}

	 if ( ($num_reg == 1) && ($clave == $pwd) ) { // DIFERENCIA MAYÚSCULAS / MINÚSCULAS EN EL pwd

		//DATOS PROPIOS DEL USUARIO PARA PASARLOS A COOKIS
		setcookie("cokiuser","$usr");
		
		odbc_free_result($rs);
		odbc_close($conn);
		
			if ( $byteTipoUsuario == 1 ) {
				
					if ($clave == "0000") {
						header ("Location: formCambioClave.php");
						} else {
					header ("Location: menu_Evaluador.php");
						}
						
				} else {
					
					if ($clave == "0000") {						
						header ("Location: formCambioClave.php");
						} else {
					header ("Location: menuAlumno.php");
						}
					echo ($blnevaluador);
				}

			} else {
					// Se cierra la conexión
					odbc_free_result($rs);
					odbc_close($conn);
					header ("Location: mensajes.php?msg=noautorizado");
					}
?>