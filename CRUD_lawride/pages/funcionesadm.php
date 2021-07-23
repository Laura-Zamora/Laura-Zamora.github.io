<?php session_start();
if(isset($_SESSION['usuario'])){
  require 'views/funcionesadm.view.php';
}else{
  header('Location:index.php');
}
 ?>
