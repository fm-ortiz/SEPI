<?php
	//include( 'include/login.php' );
	include( 'include/conexion.php' );
	include( 'include/cabecera.php' );
	?>
    <html lang="es">
		<head>
			<link rel="stylesheet" type="text/css" href="Css/Generales/styles_General.css" />
			<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<?php ("Content-Type: text/html; charset=utf-8");?>
			<?php
				echo ("<span style=\"font-weight: bold;\">Cambio de clave");
				echo ("<br>");
				echo ("<br>");
			?>
	 	</head>
		<body>
			<table width="auto"	align="center">
				<form action="grabarCambioClave.php" method="post">
					<td class="Contenedor">		
						<table align="center">
							<tr>
								<td width="30%">Documento:</td>
								<td width="70%"><input placeholder="Solo Cedula" type="text" name="documento" id="documento" value=''/></td>
							</tr>
							<tr>
								<td>Clave Nueva:</td>
								<td>
									<input placeholder="nueva clave" type="password" name="clave1" id="clave1"  value= '' />
								</td>
							</tr>
							<tr>
								<td>Confirmacion:</td>
								<td>
									<input  placeholder="confirmar nueva clave" type="password" name="clave2" id="clave2"  value= '' />
								</td>
							</tr>
						</table>		
			
						<table align="center">
							<tr>
								<td>
									<input  type="submit" name="enviar" value="Guardar" class="BotonIngresar Botones" />
								</td>
							</tr>
						</table>
					</td>
				</form>
			</table>

		</body>
        <footer>
			<?php
               include( 'include/pie.php' );
			?>
		</footer>
	</html>	
