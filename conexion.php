<html>
  <head>
    <title>Conexion BD</title>
  </head>
  <body>
    <h1>Conexion BD</h1>
    <?php
      echo "<p>hola mundo</p>";
      $con = mysqli_connect("192.168.0.5:3306", "tronxi", "tronxi97");
      mysqli_select_db($con, "pruebaBaseDatos");
      $query = "insert into tablaPrueba (nombre) values ('pedro')";
      mysqli_query($con, $query);
      mysqli_close($con);
    ?>
  </body>
</html>
