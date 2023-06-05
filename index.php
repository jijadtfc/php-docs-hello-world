<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Formulario en la misma página</title>
</head>
<body>
    <?php
          if(!isset($_POST["nombre"]) && !isset($_POST["contra"])){
    ?>
          <form action="ejemplo.php" method="post">
            <label for="nombre">Escribe tu nombre</label>
            <input type="text" name="nombre" maxlength="20"/><br/>
            <label for="contra">Escribe tu contraseña</label>
            <input type="password" name="contra" maxlength="10"/><br/>
            <input type="submit" value="enviar"/><br/>
            </form>
          <?php
           }else{
                  $nombre=$_POST["nombre"];
                  $contra=$_POST["contra"];
                  if($nombre!="Adrian"||$contra!="123456"){
                    echo "El usuario y contraseña no son válidos \n";
                    echo "<a href="ejemplo.php>Volver al formulario</a>";
            }else{
                    echo "Entrada correcta";
            }
    }
    ?>
</body>
</html>