<?php session_start();
if(isset($_SESSION['usuario'])){
  header('Location:funcionesadm.php');

}else if (isset($_SESSION['abogado'])) {
  header('Location:funcionesabo.php');

}else{
  header('Location:login.php');
}


 ?>
