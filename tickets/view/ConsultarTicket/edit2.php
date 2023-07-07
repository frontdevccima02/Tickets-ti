<?php

session_start();
require_once 'connect.php';
$usuario = $_SESSION['username'];

$id = $_POST['id'];
$reasignar = $_POST['reasignar'];
$estado = $_POST['estado'];
$fecha = $_POST['fecha'];



switch($reasignar){
    case "Jimena Alarcon":
        $mesa="manager";
        break;
    case "Jose Renovato":
    case "Juan Lira":
        $mesa = "desarrollo";
            break;
    case "Yaressi Rodriguez":
        $mesa = "soporte";
                break;
                case "Manuel Olvera":
                    case "Alejandro Cabello":
                        $mesa = "infraestructura"; 
                    break;
    default:
        $mesa = "soporte";
break;
}

$insert = "UPDATE tickets SET agente='$reasignar',estado='$estado',f_cierre='$fecha',mesa='$mesa' WHERE id_ticket = '$id'";

$query = mysqli_query($conexion,$insert);




if ($query) {

echo '<script language="javascript">alert("Los datos han sido registrados con exito");</script>';
echo "<script>
window.location.href = 'http://localhost/proyecto/tickets/view/ConsultarTicket/'; </script>";  
//header('Location: http://localhost/proyecto/tickets/view/ConsultarTicket/');
} else {
    
    echo '<script language="javascript">alert("Algo Salio mal");</script>';
    echo "<script>
window.location.href = 'http://localhost/proyecto/tickets/view/ConsultarTicket/'; </script>"; 

}
?>

