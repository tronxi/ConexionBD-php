<?php
  $con = mysqli_connect("192.168.0.5:3306", "tronxi", "tronxi97");
  mysqli_select_db($con, "pruebaBaseDatos");
  $query = "select * from tablaPrueba";
  $resul = mysqli_query($con, $query);
  $json = array();
  while($fila = mysqli_fetch_array($resul))
  {
    echo "id: ".$fila['id']." nombre: ".$fila['nombre'];
    echo "<br />";
    //$json[] = $fila;
  }
  //echo json_encode($json);
  mysqli_close($con);
?>
