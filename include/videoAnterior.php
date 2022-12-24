<?php
$sql1 = "SELECT tblProyectoPeriodo.[idproyecto] as idproyecto1, tblProyectoPeriodo.[idproyectoPeriodo], tblProyectoPeriodo.[stryear], tblProyectoPeriodo.[strPeriodo]
FROM tblProyectoPeriodo
 where idproyectoperiodo='$elconsecutivo' and stryear='2018' and strPeriodo='1'";
							$rs1 = odbc_exec($conn, $sql1) or die ("Problema de acceso 00004");
						while(odbc_fetch_row($rs1)) {	  
						$idvideoanterior = odbc_result($rs1, "idproyecto1");
						echo($sql1);
						}	
?>