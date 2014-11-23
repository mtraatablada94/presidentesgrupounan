<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Guardar Notas</title>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		<link href="../css/jquery-ui.css" rel="stylesheet">
	</head>
	<body>
		<?php
			require("conexion.php");
			if(isset($_POST["nombre"]) and isset($_POST["cedula"]) and isset($_POST["tipo"]) and isset($_POST["grado"]))
			{
				$nombre = $_POST["nombre"];
				$cedula = $_POST["cedula"];
				$tipo = $_POST["tipo"];
				$grado = $_POST["grado"];
				if(trim($nombre) != "" and trim($cedula) != "" and trim($tipo) != "" and trim($grado) != "")
				{
					$consulta = "INSERT INTO DOCENTES (nombre, cedula, tipo, grado) VALUES ('$nombre','$cedula','$tipo','$grado')";

					$resultado = $mysqli->query($consulta);

					if($resultado > 0)
					{
						header("Location: ../Docentes.php");
					}
					else
					{
						echo"<h3>!Lo sentimos¡ se ha producido un error. <a href='../Docentes.php' class='.alert-link'>Regresar</a></h3>";
					}
				}
				else
				{
					echo"<h3>!Error¡ Todos los datos son requeridos. <a href='../Docentes.php' class='.alert-link'>Regresar</a></h3>";
				}
			}
			else
			{
				echo"<h3>!Error¡ No se enviaron los datos. <a href='../Docentes.php' class='.alert-link'>Regresar</a></h3>";
			}
		?>
	</body>
</html>