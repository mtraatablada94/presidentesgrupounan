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
	                    <li class="active"><a href="Notas.php"><span class="glyphicon glyphicon-folder-open"></span> NOTAS</a></li>
	                    <li><a href="Visualizar.php"><span class="glyphicon glyphicon-phone-alt"></span> VISUALIZAR</a></li>
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
		            <div class="jumbotron">
		                <img src="img/banner.png" alt="Banner del sitio web" class="img-responsive pull-right" />
		                <h1>Hello, te damos la bienvenida!</h1>
		                <p>
		                    Nuestra principal función consiste en mantener un buen fondo bibliográfico actualizado y facilitar, mediante los servicios eficientes del personal, el uso de los documentos necesarios para satisfacer las necesidades de información de los usuarios, de investigación y de educación.
		                </p>
		            </div>
		        </div>
		    </div>
			<div class="row">
				<div class="col-xs-6">
					<img src="img/img.jpg" class="img-responsive">
				</div>
				<div class="col-xs-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1>Lista de notas</h1>
						</div>
						<div class="panel-body">
							<a data-toggle="modal" style="margin-bottom:10px;" class="btn btn-primary" href="#frmIngresar"><span class="glyphicon glyphicon-pencil"></span> Nuevo Usuario</a>
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
										<th>
											
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$resultado = $mysqli->query("SELECT * FROM NOTAS");
										while($fila=$resultado->fetch_assoc()){
											echo"
												<tr>
													<td>".$fila['ID']."</td>
													<td>".$fila['nombre']."</td>
													<td>".$fila['p1']."</td>
													<td>".$fila['p2']."</td>
													<td>".$fila['promedio']."</td>
													<td style='width:100px;'><a class='btn btn-danger' href='inc/eliminarnota.php?id_nota=".$fila['ID']."'><span class='glyphicon glyphicon-trash'></span></a> <a class='btn btn-success' href='Notas.php?id_nota=".$fila['ID']."'><span class='glyphicon glyphicon-edit'></span></a></td>
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
										<th>
											
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
		<script>
			function promediar(){
				var p1 = $("#p1").val();
				var p2 = $("#p2").val();
				if(p1 != "" && p2 != ""){
					$("#promedio").val(((parseFloat(p1) + parseFloat(p2)) / 2).toString());
					console.log("michel: " + $("#promedio").val());
				}
			}
			function promediarmodificar(){
				var p1 = $("#p1m").val();
				var p2 = $("#p2m").val();
				if(p1 != "" && p2 != ""){
					$("#promediom").val(((parseFloat(p1) + parseFloat(p2)) / 2).toString());					
				}
			}
		</script>

		<!--formulario modal-->
		<div class="modal fade" ID="frmIngresar">
	   		<div class="modal-dialog">
	   			<div class="modal-content">
	   				<form style="padding:10px;" action="inc/guardarnotas.php" method="POST">
		   				<div class="modal-header">
		   					<div class="panel panel-primary">
								<div class="panel-heading">
									<h1>INGRESAR NOTAS</h1>
								</div>
							</div>
						</div>
						<div class="modal-body">
							<div class="input-group">
								<span class="input-group-addon">Nombre</span>
								<input name="nombre" placeholder="Ingrese su Nombre" class="form-control" />
							</div>
							<br />
							<div class="input-group">
								<span class="input-group-addon">1er Parcial</span>
								<input type="number" name="p1" id="p1" placeholder="Ingrese el primero parcial" class="form-control" />
							</div>
							<br />
							<div class="input-group">
								<span class="input-group-addon">2do Parcial</span>
								<input type="number" name="p2" id="p2" placeholder="Ingrese el segundo parcial" class="form-control" />
							</div>
							<br />
							<div class="input-group">
								<span class="input-group-addon">Promedio</span>
								<input type="number" name="promedio" id="promedio" placeholder="Promedio" class="form-control" disabled="disabled" />
								<div class="input-group-btn">
									<a href="javascript:promediar();" class="btn btn-default"><span class="glyphicon glyphicon-time"></span></a>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" name="btnGuardar" class="btn btn-primary">
								<span class="glyphicon glyphicon-floppy-saved"></span> 
								Guardar
							</button>
							<button class"button" type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar
						</div>
					</form>
				</div>	
			</div>
		</div>
		<?php
			$modal = "hidden";
			if(isset($_GET['id_nota']))
			{
				$modal = "show";
				$id = $_GET['id_nota'];
				$resultado = $mysqli->query("SELECT * FROM NOTAS WHERE ID=$id");
				while($fila=$resultado->fetch_assoc())
				{
		?>
		<div class="modal fade" id="frmModificar">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="inc/modificarnota.php" method="POST">
						<div class="modal-header">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h1 class="tittle">MODIFICAR NOTA</h1>
								</div>
							</div>
						</div>
						<div class="modal-body">
							<input name="id_nota" type="hidden" value="<?php echo"$id"; ?>"/>
							<div class="input-group">
								<span class="input-group-addon">Nombre</span>
								<input name="nombre" placeholder="Ingrese su Nombre" class="form-control" value="<?php echo$fila['nombre']; ?>" />
							</div>
							<br />
							<div class="input-group">
								<span class="input-group-addon">1er Parcial</span>
								<input type="number" name="p1" id="p1m" placeholder="Ingrese el primero parcial" class="form-control" value="<?php echo$fila['p1']; ?>" />
							</div>
							<br />
							<div class="input-group">
								<span class="input-group-addon">2do Parcial</span>
								<input type="number" name="p2" id="p2m" placeholder="Ingrese el segundo parcial" class="form-control" value="<?php echo$fila['p2']; ?>" />
							</div>
							<br />
							<div class="input-group">
								<span class="input-group-addon">Promedio</span>
								<input type="number" name="promedio" id="promediom" placeholder="Promedio" class="form-control" disabled="disabled" value="<?php echo$fila['promedio']; ?>" />
								<div class="input-group-btn">
									<a href="javascript:promediarmodificar();" class="btn btn-default"><span class="glyphicon glyphicon-time"></span></a>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" name="btnGuardarUsuario" class="btn btn-danger"><span class="glyphicon glyphicon-floppy-disk"></span> Modificar</button>
							<button class"button" type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar
						</div>
					</form>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$("#frmModificar").modal("show");
		</script>
		<?php
				}
			}
		?>
	</body>
</html>