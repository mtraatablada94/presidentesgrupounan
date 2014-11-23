<?php 
	require("inc/conexion.php");
 ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Notas y Docentes</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/jquery-ui.css" rel="stylesheet">
	</head>
	<body>
		<header class="navbar navbar-static-top navbar-default navbar-fixed-top" id="top" role="banner">
	        <div class="container">
	            <div class="navbar-header">
	                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a href="Notas.php" class="navbar-brand"><img src="img/Logo.png" width="150" /></a>
	            </div>
	            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
	                <ul class="nav navbar-nav">
	                    <li><a href="Notas.php"><span class="glyphicon glyphicon-folder-open"></span> NOTAS</a></li>
	                    <li class="active"><a href="Visualizar.php"><span class="glyphicon glyphicon-phone-alt"></span> VISUALIZAR</a></li>
	                    <li><a href="Docentes.php"><span class="glyphicon glyphicon-edit"></span> DOCENTES</a></li>
	                </ul>
	                <ul class="nav navbar-nav navbar-right">
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-user"></span> Usuario <span class="caret"></span></a>
	                        <ul class="dropdown-menu" role="menu">
	                            <li><a href="#">Cambiar contraseña</a></li>
	                            <li><a href="#">Configuración</a></li>
	                            <li><a href="#">Salir</a></li>
	                        </ul>
	                    </li>
	                </ul>
	            </nav>
	        </div>
	    </header>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1>Lista de docentes</h1>
						</div>
						<div class="panel-body">
							<form action="Visualizar.php" method="GET">
								<div class="input-group">
									<span class="input-group-addon">BUSQUEDA</span>
									<input type="text" placeholder="Ingresar el nombre" name="nomdoc" class="form-control">
									<div class="input-group-btn">
										<button type="submit" class="btn btn-success">
											<span class="glyphicon glyphicon-filter"></span>
											Buscar
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-condensed">
								<thead class="bg-primary">
									<tr>
										<th>
											ID
										</th>
										<th>
											Nombres y Apellidos
										</th>
										<th>
											Cedula
										</th>
										<th>
											Tipo de Docente
										</th>
										<th>
											Grado Academico
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$nombredocente = "";
										if(isset($_GET["nomdoc"])){
											$nombredocente = $_GET["nomdoc"];
										}
										$resultado = $mysqli->query("SELECT * FROM DOCENTES WHERE nombre LIKE '".$nombredocente."%'");
										while($fila=$resultado->fetch_assoc()){
											echo"
												<tr>
													<td>".$fila['ID']."</td>
													<td>".$fila['nombre']."</td>
													<td>".$fila['cedula']."</td>
													<td>".$fila['tipo']."</td>
													<td>".$fila['grado']."</td>
												</tr>
											";
										}
									?>
								</tbody>
								<thead class="bg-primary">
									<tr>
										<th>
											ID
										</th>
										<th>
											Nombres y Apellidos
										</th>
										<th>
											Cedula
										</th>
										<th>
											Tipo de Docente
										</th>
										<th>
											Grado Academico
										</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="panel-footer">
							
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1>Lista de notas</h1>
						</div>
						<div class="panel-body">
							<form action="Visualizar.php" method="GET">
								<div class="input-group">
									<span class="input-group-addon">BUSQUEDA</span>
									<input type="text" placeholder="Ingresar el nombre" name="nomnot" class="form-control">
									<div class="input-group-btn">
										<button type="submit" class="btn btn-success">
											<span class="glyphicon glyphicon-filter"></span>
											Buscar
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-condensed">
								<thead class="bg-primary">
									<tr>
										<th>
											ID
										</th>
										<th>
											Nombres y Apellidos
										</th>
										<th>
											1er Parcial
										</th>
										<th>
											2do Parcial
										</th>
										<th>
											Promedio
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$nombrenota = "";
										if(isset($_GET["nomnot"])){
											$nombrenota = $_GET["nomnot"];
										}
										$resultado = $mysqli->query("SELECT * FROM NOTAS WHERE nombre LIKE '".$nombrenota."%'");
										while($fila=$resultado->fetch_assoc()){
											echo"
												<tr>
													<td>".$fila['ID']."</td>
													<td>".$fila['nombre']."</td>
													<td>".$fila['p1']."</td>
													<td>".$fila['p2']."</td>
													<td>".$fila['promedio']."</td>
												</tr>
											";
										}
									?>
								</tbody>
								<thead class="bg-primary">
									<tr>
										<th>
											ID
										</th>
										<th>
											Nombres y Apellidos
										</th>
										<th>
											1er Parcial
										</th>
										<th>
											2do Parcial
										</th>
										<th>
											Promedio
										</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="panel-footer">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.js"></script>
	</body>
</html>