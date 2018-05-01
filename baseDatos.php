<?php
  $con = mysqli_connect("192.168.0.5:3306", "tronxi", "tronxi97");
  mysqli_select_db($con, "pruebaBaseDatos");
  /*$query = "insert into tablaPrueba (nombre) values ('.$_POST['$nombre'].')";
  mysqli_query($con, $query);*/
  echo "nombre de variable". $_POST['$nombre'] ."texto";
  echo "<br />";
  $query = "select * from tablaPrueba";
  $resul = mysqli_query($con, $query);
  while($fila = mysqli_fetch_array($resul))
  {
    echo "id: ".$fila['id']."nombre: ".$fila['nombre'];
    echo "<br />";
  }
  mysqli_close($con);
?>
