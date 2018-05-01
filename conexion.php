<html>
  <head>
    <title>Conexion BD</title>
  </head>
  <body>
    <h1>Conexion BD</h1>
    <form method="POST" action="conexion.php">
      nombre<br />
      <input type="TEXT" NAME="nombre" />
      <input type="SUBMIT" />
    </form>
    <?php
      $con = mysqli_connect("192.168.0.5:3306", "tronxi", "tronxi97");
      mysqli_select_db($con, "pruebaBaseDatos");
      $query = "insert into tablaPrueba (nombre) values ('$nombre')";
      mysqli_query($con, $query);
      $query = "select * from tablaPrueba";
      $resul = mysqli_query($con, $query);
      while($fila = mysqli_fetch_array($resul))
      {
        echo $fila['id']."nombre: ".$fila['nombre'];
        echo "<br />";
      }
      mysqli_close($con);
    ?>
  </body>
</html>
