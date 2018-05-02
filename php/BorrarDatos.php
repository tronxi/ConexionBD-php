<?php
  $con = mysqli_connect("192.168.0.5:3306", "tronxi", "tronxi97");
  mysqli_select_db($con, "pruebaBaseDatos");
  $query = "delete from tablaPrueba where id = ".$_POST['id']."";
  mysqli_query($con, $query);
  mysqli_close($con);
  header("Location: ../index.html");
?>
