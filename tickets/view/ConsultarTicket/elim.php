<?php
session_start();
require_once 'connect.php';
$usuario = $_SESSION['username'];

$id = $_GET['id'];

$sel="SELECT * FROM tickets WHERE id_ticket = '$id'";
$res=mysqli_query($conexion,$sel);
$mos = mysqli_fetch_row($res);


$insert = "INSERT INTO trash (id_ticket, usuario, email, telefono, area, descripcion, url, agente, mesa, categoria, subcategoria, t_registro, estado, sucursal, f_cierre) 
VALUES ('$mos[0]','$mos[1]','$mos[2]','$mos[3]','$mos[4]','$mos[5]','$mos[6]','$mos[7]','$mos[8]','$mos[9]','$mos[10]','$mos[11]','$mos[12]','$mos[13]','$mos[14]')";

$query = mysqli_query($conexion,$insert);

$delete = "DELETE FROM tickets WHERE id_ticket = '$id'";

$query1 = mysqli_query($conexion,$delete);

if ($query && $query1) 
{
    echo '<script language="javascript">alert("Los datos han sido eliminados");</script>';
    echo "<script>
    window.location.href = 'http://localhost/proyecto/tickets/view/ConsultarTicket/'; </script>"; 
} else {
    echo '<script language="javascript">alert("Algo Salio mal");</script>';
    echo "<script>
    window.location.href = 'http://localhost/proyecto/tickets/view/ConsultarTicket/'; </script>";
}
?>