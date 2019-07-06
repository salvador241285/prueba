<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";

      try {
        $conn = new PDO("mysql:host=$servername;dbname=empleado", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "conexion Exitosa";
        }catch(PDOException $e)
        {
          echo "Fallo la Conexion: " . $e->getMessage();
        }
    ?>

  </body>
</html>
