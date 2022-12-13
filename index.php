<?php 
date_default_timezone_set('America/Bogota');
include( 'include/cabecerabasico.php' );
?>
	<html lang="es">
		<head>
			<title>Sistema de Evaluación de Proyectos Integradores - SEPI</title>
			<meta charset="utf-8" />
			<!--<link rel='stylesheet' href="{% static 'css/bootstrap.min.css' %}" type='text/css'/>-->
			<link rel="stylesheet" type="text/css" href="Css/Generales/styles_General.css" />
			<link rel="stylesheet" type="text/css" href="Css/Generales/My_Style.css" />
			<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
           <?php ("Content-Type: text/html; charset=utf-8");?>
		   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></scri
			<link href="assets/css/landing-page.css" rel="stylesheet">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		
			<link href="Bootstrap/bootstrap-4.0.0/bootstrap-4.0.0/scss/_button-group.scss">
		   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
			<link rel="shortcut icon" href="images/favicon.ico">
		   
    	</head>

		<body>
			
			<table	 align="center">
				<form METHOD="POST" ACTION="acceso.php">
					<tr>
						<td align="CENTER" class="Contenedor">
							
							<h2 class="css-titulo">BIENVENID@S A EL SISTEMA DE EVALUACIÓN </h2>
							<h2 class="css-titulo">DE PROYECTOS INTEGRADORES SEPI</h2>
							<div class="letter">
								<P>Ingrese nombre de usuario y contraseña</p>
							</div>
								<!-- <P class="letter1">(las Cookies deben estar habilitadas en su navegador)</P> -->
							
							<div class="letter">
							
								<P></P>
							<div class="container">	
								<!--<form action="/formCambioClave.php">-->
									<div class="form-group">
										<table  align="center" id="ContenedorHijo" >
											<tr>
												<td
													class="letter">Usuario:
												</td>
												<P></P>
												<td>
													<input placeholder="Cedula o Código" type="text" name="usr" class="class1 form-control class2 letter" onkeyup="form1.field2.value=home.usr.value"/>
												</td>
											</tr>
								
												<P></P>
											<tr align="center">
												<td colspan="2">
												<P></P>
												<br/>
																 
												</td>
											</tr>
								
											<tr>
												<td>
												<!--<div class="form-group">-->
													<label for="psw" class="letter">Contraseña:</label>
												</td>
												<P></P>
												<td >
													<input  type="password" name="pwd" class="class1 form-control class2 letter" id="psw" placeholder="Password" />
												
												</td>
											</tr>
											<tr>
												<td>
												
												</td>
												<!--</div>-->
											</tr>
											<P></P>
											<tr align="center">
												<td colspan="2">
												<P></P>
												<br/>
																 
												</td>
											</tr>
											<div class="letter">	
												<tr align="center">
													<td colspan="3">
														<button type="submit" class="class1 btn btn-primary class2 letter class3 ex">Ingresar al sistema
														</button>
													<!--
													<P>
																					
													</P>
													<br/>
													<div class="form-check">
													<label class="form-check-label">
													<input class="class1 form-check-input class2 letter" type="checkbox" name="remember"> Recordar Contraseña
													</label>
													</div>
												
													<input type="submit" name="enviar" value="Ingresar al sistema"  class="BotonIngresar Botones" align= "center"/>-->
												
													
												
													</td>
												</tr>
											</div>
											
										</table>
									</div>	
										
								<!--</form>-->
							</div>
							<!--
							<input type="checkbox" name="vehicle" value="Bike"> Recordar nombre de usuario y contraseña<br>
							-->
							<P></P>
							
							<!-- <a href="formCambioClave.php"> ¿Olvidó su contraseña?</a>  -->
							<P>
							 <!-- <a href="form_add_alumno.php">Descargar formato inscripcion Proyecto</a> -->
							 <P></P>
							 <a href='download3.php'>Descargar formato inscripción Proyecto</a>
							</P>
							<!--
							<P>
							
							 <a href="https://youtu.be/5BpmAN7ila4" target="_blank">Tutorial Como subir proyecto<br /><img src="logo_you.png" alt="Tutorial" /></a> 
							<a href="https://youtu.be/FJGmX9IDR-I" target="_blank">Tutorial Cómo subir proyecto<br /><img src="logo_you.png" alt="Tutorial" /></a>
							
							</P>
							
							 <!-- <a href="form_add_alumno.php">Registrarme</a>  -->
							
							 <!-- <a href="indexerror1.php">Registrarme</a>  
							<P>
							
							</P>
							 
							<P>
							
							</P>
							-->
							</div>
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








