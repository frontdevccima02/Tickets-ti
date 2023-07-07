<?php
require_once 'connect.php';
$usuario = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="1.css">
    <title>Tickets</title>
</head>
<body>


    <center>
    <div class="table_res">
    <div class="table-responsive">
        <table class="table">
            <thead class="table">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Area</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Evidencia</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Subcategoria</th>
                    <th scope="col">Registro</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Sucursal</th>
                    <th scope="col">F de cierre</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>

                <?php
                        $sel="SELECT * FROM tickets WHERE agente = '$usuario' OR usuario = '$usuario'";
                        $res=mysqli_query($conexion,$sel);
                        while($mos=mysqli_fetch_row($res)){?>
                    <tr class=""></tr>
                    <td><?php echo $mos[0]; ?></td>
                    <td><?php echo $mos[1]; ?></td>
                    <td><?php echo $mos[2]; ?></td>
                    <td><?php echo $mos[3]; ?></td>
                    <td><?php echo $mos[4]; ?></td>
                    <td><?php echo $mos[5]; ?></td>
                    <td> <a href="<?php echo $mos[6]; ?>" download class="file">  File</td>
                    <td><?php echo $mos[9]; ?></td>
                    <td><?php echo $mos[10]; ?></td>
                    <td><?php echo $mos[11]; ?></td>
                    <td><?php echo $mos[12]; ?></td>
                    <td><?php echo $mos[13]; ?></td>
                    <td><?php echo $mos[14]; ?></td>
                    <td>
                    <button type="button" class="btn btn-primary btn-lg deletedbt" data-bs-toggle="modal" data-bs-target="#del">
                    <?php echo "<a href='modif.php?id=".$mos[0]."'>Modificar</a>";  ?>
                    </button>
                    </td>
                    </td>
                    <td>
                    <button type="button" class="btn btn-danger btn-lg editbtn">
                        <?php echo "<a href='elim.php?id=".$mos[0]."'>Eliminar</a>";  ?>
                    </button>
                    </td>
                    </tr>
                    <?php
                        }
                    ?>
            </tbody>
        </table>
    </div>
    </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    

</body>
</html>
