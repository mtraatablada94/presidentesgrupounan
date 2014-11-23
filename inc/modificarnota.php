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
			if(isset($_POST["id_nota"]) and isset($_POST["nombre"]) and isset($_POST["p1"]) and isset($_POST["p2"]))
			{
				$id = $_POST["id_nota"];
				$nombre = $_POST["nombre"];
				$p1 = $_POST["p1"];
				$p2 = $_POST["p2"];
				$promedio = ($p1 + $p2) / 2;
				if(trim($id) != "" and trim($nombre) != "" and trim($p1) != "" and trim($p2) != "")
				{
					$consulta = "UPDATE NOTAS SET nombre = '$nombre', p1 = $p1, p2 = $p2, promedio = $promedio WHERE ID = $id";

					$resultado = $mysqli->query($consulta);

					if($resultado > 0)
					{
						header("Location: ../Notas.php");
					}
					else
					{
						echo"<h3>!Lo sentimos¡ se ha producido un error. <a href='../Notas.php' class='.alert-link'>Regresar</a></h3>";
					}
				}
				else
				{
					echo"<h3>!Error¡ Todos los datos son requeridos. <a href='../Notas.php' class='.alert-link'>Regresar</a></h3>";
				}
			}
			else
			{
				echo"<h3>!Error¡ No se enviaron los datos. <a href='../Notas.php' class='.alert-link'>Regresar</a></h3>";
			}
		?>
	</body>
</html>