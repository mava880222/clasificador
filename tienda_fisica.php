<?php

/*conexion*/
    $conexion = mysqli_connect ("54.214.107.137:3306","alfredo","Yatien3sacces0","alfredo");
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

/******/
/*variables a guardar*/
    
    $tipo = 'Tienda fisica';
    $usuario = $_POST['usu'];
    $tienda = $_POST ['tienda'];
    $motivo = $_POST['motivo'];

/*****/



/*guarda las variables*/
  $sql = "insert into clasificador (tienda,motivo,tipo,usuario) values ('".$tienda."','".$motivo."','".$tipo."','".$usuario."')";
 
            if (mysqli_query($conexion, $sql)) {
               echo "<input type='button' value='Nuevo' onClick='history.go(-1);'>";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            mysqli_close($conexion);


?>