<head><h1>Registros</h1></head>
<script>
		$(document).ready(function() {
    	$('#tablaRegistros').DataTable();
		} );
    </script>
    
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