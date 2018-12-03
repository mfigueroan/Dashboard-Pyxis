<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,500" rel="stylesheet">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/Main.js"></script>
	<script src="js/funciones-dashboard.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
</head>



<body>
	<div class="container-fluid">
		<div class="row">
			<div class="barra-lateral col-12 col-sm-auto">
				<div class="logo">
					<h2>Dashboard</h2>
				</div>
				<nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
					<a href="#" id="inicio"><i class="icon-home"></i><span>Inicio</span></a>
					<a href="#" id="registros"><i class="icon-doc-text"></i><span>Registros</span></a>
					<a href="#"><i class="icon-users"></i><span>Seguimiento Paciente</span></a>
					<a href="#"><i class="icon-cog-alt"></i><span>Alertas</span></a>
					<a href="#"><i class="icon-logout"></i><span>Salir</span></a>
				</nav>
			</div>

			<main class="main col" id="main">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Estados de Maquinas</h3>
							<div id="includedContent"></div>


							<?php require('query/Service.php'); ?>
						</div>
					</div>

					<div class="columna col-lg-5">
						<div class="widget estadisticas">
							<h3 class="titulo">Estados Generales</h3>
							<div class="contenedor d-flex flex-wrap">
								<div class="caja" style="color: #35ae3b;">
									<h3>14</h3>
									<p>Bueno</p>
								</div>
								<div class="caja" style="color: #aea635;">
									<h3>25</h3>
									<p>Medio</p>
								</div>
								<div class="caja" style="color: #ae3535;">
									<h3>3</h3>
									<p>Alto</p>
								</div>
								<div class="caja" style="color: #3541ae;">
									<h3>1604</h3>
									<p>Total Pacientes</p>
								</div>
							</div>
						</div>

						<div class="widget comentarios">
							<h3 class="titulo">Listado de Registros</h3>
							<div class="contenedor">
								<div class="row">
									<div class="col">
										<!-- .table-dark Nos permite cambiar los colores de la tabla a osucors -->
										<!-- .table-striped Nos permite alternar colores entre cada fila -->
										<!-- .table-bordered Nos permite agregarle bordes a la tabla -->
										<!-- .table-hover Nos permite agregarle un hover a las filas -->
										<!-- .table-sm Nos permite hacer la tabla mas pequeña eliminando paddings -->
										<!-- .table-responsive-xx Nos permite adaptar nuestra tabla a dispositivos moviles -->
										<table class="table table-sm table-hover table-bordered table-responsive-lg" id="tablaRegistros">
											<thead>
												<tr>
													<th>Actividad</th>
													<th>Maquina</th>
													<th>Estado</th>
													<th>Fecha</th>
												</tr>
											</thead>
											<?php
											require "modal/ServiceModal.php";
											?>
											<!-- .table-active -->
											<!-- .table-success -->
											<!-- .table-warning -->
											<!-- .table-danger -->
											<!-- .table-info -->
											<tr class="table-success">
												<td>Ingreso Paciente xx</td>
												<td>25</td>
												<td>Correcto</td>
												<td>12/12/1212 00:00:00</td>
											</tr>

											<!-- .bg-primary -->
											<!-- .bg-success -->
											<!-- .bg-warning -->
											<!-- .bg-danger -->
											<!-- .bg-info -->
											<tr class="table-danger">
												<td>Ingreso Paciente xx</td>
												<td>25</td>
												<td>Error</td>
												<td>12/12/1212 00:00:00</td>
											</tr>
											<tr class="table-success">
												<td>Ingreso Paciente xx</td>
												<td>25</td>
												<td>Correcto</td>
												<td>12/12/1212 00:00:00</td>
											</tr>
										</table>
										<button class="btn btn-primary" id="vRegistros">Ver Mas</button>
										
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h3 class="titulo">Alertas</h3>
								<div class="alert alert-danger mt-3">
									<strong>Se ha detectado un error en la Maquina: XX </strong></a>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>

	<!-- Usar la CDN requiere acceso a Internet -->
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->



</body>

</html>