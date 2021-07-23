<?php session_start();
if(isset($_SESSION['usuario'])){
  require 'views/boton_modificar.view.php';
}else{
  header('Location:index.php');
}
 ?>
