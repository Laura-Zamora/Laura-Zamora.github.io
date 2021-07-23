<?php session_start();
if(isset($_SESSION['abogado'])){
  require 'views/funcionesabo.view.php';
}else{
  header('Location:index.php');
}
 ?>
