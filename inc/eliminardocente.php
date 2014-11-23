<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Eliminar Nota</title>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		<link href="../css/jquery-ui.css" rel="stylesheet">
	</head>
	<body>
		<?php
			require("conexion.php");
			if(isset($_GET["id_docente"]))
			{
				$id = $_GET["id_docente"];
				if(trim($id) != "")
				{
					$consulta = "DELETE FROM DOCENTES WHERE ID = $id";

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
					echo"<h3>!Error¡ Elegir la nota a eliminar. <a href='../Docentes.php' class='.alert-link'>Regresar</a></h3>";
				}
			}
			else
			{
				echo"<h3>!Error¡ No se enviaron los datos. <a href='../Docentes.php' class='.alert-link'>Regresar</a></h3>";
			}
		?>
	</body>
</html>