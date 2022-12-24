<?php 
include( 'conexion.php' );
include( 'periodo.php' );
include( 'login.php' );
					 $sql = "SELECT tblmatricula.Id, tblmatricula.stridproyecto AS stridproyectoPeriodo, tblmatricula.stryear, tblmatricula.strperiodo, tblmatricula.strnui AS tblmatricula_strnui, tblalumno.strnui AS tblalumno_strnui, tblalumno.strcodnombre, tblalumno.strnombre, tblProyecto.strdescripcion
FROM tblProyecto INNER JOIN (tblProyectoPeriodo INNER JOIN (tblalumno INNER JOIN tblmatricula ON tblalumno.strnui = tblmatricula.strnui) ON tblProyectoPeriodo.idproyectoPeriodo = tblmatricula.stridproyecto) ON tblProyecto.idproyecto = tblProyectoPeriodo.idproyecto 
					 where tblmatricula.stryear='$yearActual' and  tblmatricula.strperiodo='$strPeriodo' and tblmatricula.strnui='$usrs'"; 
					 
						 $rs = odbc_exec($conn, $sql) or die ("Problema de acceso 00003");
						 
						 //print $sql;
						 //$a = $sql;
						 while(odbc_fetch_row($rs)) {
							 
							 
							$stridproyectoPeriodo = odbc_result($rs, "stridproyectoPeriodo");
							$nameproyecto = odbc_result($rs, "strdescripcion");
							/*
							$segundo_nombre = odbc_result($rs, "strsnombre");
							$primer_apellido = odbc_result($rs, "strpapellido");
							$segundo_apellido = odbc_result($rs, "strsapellido");
							$nombrecompleto = odbc_result($rs, "strnombre");
							$strcodnombre = odbc_result($rs, "strcodnombre");
							
							$primer_nombre = odbc_result($rs, "strpnombre");
							$primer_nombre = odbc_result($rs, "strpnombre");
							$primer_nombre = odbc_result($rs, "strpnombre");
							$primer_nombre = odbc_result($rs, "strpnombre");
							$primer_nombre = odbc_result($rs, "strpnombre");
							echo ("<br>");
							echo ("Nombre Completo: ");
							echo ("<br>");
							echo $nombrecompleto;
							echo ("<br>");
							echo ("Codigo de Ingreso");
							echo ("<br>");
							echo $usrs;
							echo ("<br>");
							echo ("<br>");
							*/
							}
?>	
							