<?php
include("../conexion.php");

$nombre=$_POST['nombre'];

$sql = "SELECT * FROM ejemplo WHERE nombre = '$nombre'";
$resultado = mysqli_query($connection, $sql);

while($consulta = mysqli_fetch_array($resultado)){

    //echo $consulta['nombre'];
    $name = $consulta['nombre'];
    //echo '<br>';
    //echo $consulta['apellido'];
    $apellido = $consulta['apellido'];
    //echo '<br>';
    //echo $consulta['cedula'];
    $cedula = $consulta['cedula']; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Practica de modificar</title>
</head>
<body>
    <h1 style="text-align: center;">Formulario para Modificar</h1><br>
    <h2 style="text-align: center;">A que usuario desea modifica</h2>
    <form action="cambio.php" method="POST" style="text-align: center;"><br>
        <label for="">Nombre:</label>
        <input type="text" id="" name="nombre" placeholder="" value="<?php echo $name ?>"> <br><br>
        <label for="">Apellido:</label>
        <input type="text" id="" name="apellido" placeholder="" value="<?php echo $apellido ?>"> <br><br>
        <label for="">Cedula:</label>
        <input type="text" id="" name="cedula" placeholder="<?php echo $cedula ?>" value="<?php echo $cedula ?>"> <br><br>
        <button class="btn btn-primary">Enviar</button>
    </form>    

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>