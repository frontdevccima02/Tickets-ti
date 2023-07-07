<?php
require_once("./../../config/conexion.php");
$usuario = $_SESSION['username'];
require_once './../../../php/connect.php';
$consul = "SELECT * FROM `usuarios` WHERE usuario = '$usuario'";
$query = mysqli_query($conexion,$consul);
$mostrar=mysqli_fetch_row($query);
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
    <title>Consultar Ticket</title>
	<link rel="stylesheet" href="1.css">
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>
	
    <?php 
	require_once("../MainNav/nav.php");
	?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">

		<?php
		switch($mostrar[1]){
			case'Jimena Alarcon':
				case'Yaressi Rodriguez':
			require_once("./../Home/ticketsmaster.php");
			break;
            case'Jose Renovato':
				case'Juan Pablo':
					case'Isai Garcia':
						case'Jackelin Yañez':
			require_once("./../Home/ticketssuper.php");
            break;
		}
		?>

		</div>
	</div>
	<!-- Contenido -->
	<?php require_once("../MainJs/js.php"); ?>
	<!--<script type="text/javascript" src="consultarticket.js"></script>-->
</body>
</html>
