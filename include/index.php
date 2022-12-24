<?php
date_default_timezone_set('America/Bogota');
include( 'include/cabecerabasico.php' );
?>
<html lang="es">
		<head>
			<link rel="stylesheet" type="text/css" href="Css/Generales/styles_General.css" />
			<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
           <?php ("Content-Type: text/html; charset=utf-8");?>
    	</head>

		<body>
		<h1> Modulo de administracion </h1>
			<table	 align="center">
				<form METHOD="POST" ACTION="accesoadmin.php">
					<tr>
						<td align="CENTER" class="Contenedor">
							<P>Acceso solo para administradores</P>
								<P></P>
							<table  align="center" id="ContenedorHijo" >
								<tr>
									<td>
										Usuario:
									</td>
									<P></P>
									<td>
										<input placeholder="Usuario Admin" type="text" name="usr" class="CajasTxt" onkeyup="form1.field2.value=home.usr.value"/>
									</td>
								</tr>
								
								
								<tr align="center">
									<td colspan="2">
										<P></P>
										<br/>
										<P></P>					 
									</td>
								</tr>
								
								<tr>
									<td>
										Contrasena:
									</td>
									<td >
										<input  type="password" name="pwd" class="CajasTxt" placeholder="Password" />
									</td>
								</tr>
								
									
								<tr align="center">
									<td colspan="2">
										<P>
										
										</P>
											<br/>
											<input type="submit" name="enviar" value="Ingresar al sistema"  class="BotonIngresar Botones" align= "center"/>
										<P>
											
										</P>					 
									</td>
								</tr>
								
							</table>
							<!--
							<input type="checkbox" name="vehicle" value="Bike"> Recordar nombre de usuario y contraseña<br>
							<P></P>
							-->
						</td>

					</tr>
				</form >
			</table>

		</body>
		<footer>
			  <?php
				 include( 'include/pie.php' );
			   ?>
		</footer>
	</html>
