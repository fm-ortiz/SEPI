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
			<table	 align="center">
				<form METHOD="POST" ACTION="acceso.php">
					<tr>
						<td align="CENTER" class="Contenedor">
							<h2 id="Titulos">Usuarios registrados</h2>
							<P>Entre aqui usando su nombre de usuario y contrasena(las Cookies deben estar habilitadas en su navegador)</P>
								<P></P>
							<table  align="center" id="ContenedorHijo" >
								<tr>
									<td>
										Usuario:
									</td>
									<P></P>
									<td>
										<input placeholder="Cedula o Codigo" type="text" name="usr" class="CajasTxt" onkeyup="form1.field2.value=home.usr.value"/>
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
							<a href="formCambioClave.php"> ¿Olvido su contraseña?</a>
							<P>
							
							</P>
						
							<P>
							
							<a href="https://youtu.be/5BpmAN7ila4" target="_blank">Tutorial<br /><img src="logo_you.png" alt="Tutorial" /></a>
							</P>
							
							 <a href="form_add_alumno.php">Registrarme</a> 
							
							 <!-- <a href="indexerror1.php">Registrarme</a>  -->
							<P>
							
							</P>
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








