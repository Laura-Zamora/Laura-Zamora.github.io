<?php session_start();
if(isset($_SESSION['usuario'])){
  require 'views/boton_eliminar.view.php';
}else{
  header('Location:index.php');
}
 ?>
