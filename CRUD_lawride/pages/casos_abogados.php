<?php session_start();
if(isset($_SESSION['abogado'])){
  require 'views/casos_abogados.view.php';
}else{
  header('Location:index.php');
}
 ?>
