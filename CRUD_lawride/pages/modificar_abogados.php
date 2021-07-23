<?php session_start();
if(isset($_SESSION['usuario'])){
  require 'views/modificar_abogados.view.php';
}else{
  header('Location:index.php');
}
 ?>
