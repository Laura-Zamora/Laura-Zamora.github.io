<?php session_start();
if(isset($_SESSION['usuario'])){
  require 'views/agregar_caso.view.php';
}else{
  header('Location:index.php');
}
 ?>
