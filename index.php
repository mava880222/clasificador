<?php
    $usuario = $_POST['usuario'];
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Clasificador de contactos</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos.css">

    <title>Formulario Login y Registro de Usuarios</title>
</head>
<body>

   <!-- Formularios -->
    <div class="contenedor-formularios">
        <!-- Links de los formularios -->
        <ul class="contenedor-tabs">
            <li class="tab tab-segunda active"><a href="#iniciar-sesion">Tienda en línea</a></li>
            <li class="tab tab-primera"><a href="#registrarse">Tienda física</a></li>
        </ul>

        <!-- Contenido de los Formularios -->
        <div class="contenido-tab">
            <!-- Iniciar Sesion -->
            <div id="iniciar-sesion">
                <!--<h1>Iniciar Sesión</h1> -->
                <form action="tienda_online.php" method="post">
                   <div class="contenedor-input">
                            <label>
                                Usuario
                            </label>
                            <br>
                            <br>
                            <input type="text" value = "<?php echo $usuario;?>" name="usu">
                        </div> 
                    <div class="contenedor-input">
                        <label>
                            Tienda <span class="req">*</span>
                        </label>
                        <br>
                        <br>
                        <select name="tienda">
                        <!--      <option value="eBay">eBay</option>  -->
                              <option value="La Parisina">La Parisina</option>
                              <option value="Lovable">Lovable</option>
                              <option value="Martha Sophia">Martha Sophia</option>
                              <option value="Muebles Pergo">Muebles Pergo</option>
                              <option value="Nap Baby">Nap Baby</option>
                              <option value="Prive Revaux">Prive Revaux</option>
                              <option value="Salomundo">Salumondo</option>
                              <option value="Swarovski">Swarovski</option>
                              <option value="Tanya Moss">Tanya Moss</option>
                              <option value="Triumph">Triumph</option>
                              <option value="Vicky Form">Vicky Form</option>
                        </select>
                    </div>

                    <div class="contenedor-input">
                        <label>
                            Motivo <span class="req">*</span>
                        </label>
                        <br>
                        <br>
                        <select name="motivo">
                              <option value="Cambio de metodo de pago o aviso de confirmacion de pago">Cambio de método de pago o aviso de confirmación de pago</option>
                              <option value="Cambios y devoluciones (Preguntas y solicutudes)">Cambios y devoluciones (Preguntas y solicutudes)</option>
                              <option value="Cliente abandona">Cliente abandona</option>
                              <option value="Duda para hacer pagos">Duda para hacer pagos</option>
                              <option value="Estatus de Pedido">Estatus de Pedido</option>
                              <option value="Falla de la plataforma">Falla de la plataforma</option>
                              <option value="Informacion sobre producto no disponible">Información sobre producto NO disponible</option>
                              <option value="Informacion sobre producto disponible">Información sobre producto disponible</option>
                              <option value="Preguntas de envíos (tiempo de entrega, condiciones de cambios y dev.)">Preguntas de envíos (tiempo de entrega, condiciones de cambios y dev.)</option>
                              <option value="Preguntas sobre precios y promociones">Preguntas sobre precios y promociones</option>
                              <option value="Recuperacion carrito abandonado">Recuperacion carrito abandonado</option>
                              <option value="Ventas">Ventas</option>
                              <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <!--<p class="forgot"><a href="#">Se te olvidó la contraseña?</a></p>-->
                    <input type="submit" class="button button-block" value="Guardar">
                </form>
            </div>

            <!-- Registrarse -->
            <div id="registrarse">
               <!-- <h1>Registrarse</h1> -->
                <form action="tienda_fisica.php" method="POST">
                    <div class="contenedor-input">
                            <label>
                                Usuario
                            </label>
                            <br>
                            <br>
                            <input type="text" value = "<?php echo $usuario;?>" name="usu">
                        </div>        
                            
                            

                        <div class="contenedor-input">
                            <label>
                                Tienda <span class="req">*</span>
                            </label>
                            <br>
                            <br>
                            <select name="tienda">
                             <!--      <option value="eBay">eBay</option>  -->
                              <option value="La Parisina">La Parisina</option>
                              <option value="Lovable">Lovable</option>
                              <option value="Martha Sophia">Martha Sophia</option>
                              <option value="Muebles Pergo">Muebles Pergo</option>
                              <option value="Nap Baby">Nap Baby</option>
                              <option value="Prive Revaux">Prive Revaux</option>
                              <option value="Salomundo">Salumondo</option>
                              <option value="Swarovski">Swarovski</option>
                              <option value="Tanya Moss">Tanya Moss</option>
                              <option value="Triumph">Triumph</option>
                              <option value="Vicky Form">Vicky Form</option>
                        </select>
                        </div>

                        <div class="contenedor-input">
                            <label>
                                Motivo <span class="req">*</span>
                            </label>
                            <br>
                            <br>
                            <select name="motivo">
                              <option value="Facturacion">Facturación</option>
                              <option value="Información sobre producto">Información sobre producto</option>
                              <option value="Ubicacion u horario de tiendas">Ubicación u horario de tiendas</option>
                              <option value="Otro">Otro</option>
                        </select>
                        </div>
                    <input type="submit" class="button button-block" value="Guardar">
                </form>
            </div>
        </div>
    </div>

   <script src="js/jquery.js"></script>
   <script src="js/main.js"></script>

</body>
</html>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>
<footer>
    <input type='button' value='Salir' onClick="location.href='inicio.php'" style="background:red; width:100px;
height:40px;">
</footer>
</html>
