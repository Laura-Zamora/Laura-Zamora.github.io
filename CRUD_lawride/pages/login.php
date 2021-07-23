
<?php session_start();

 if(isset($_SESSION['usuario'])){
   header('Location:index.php');
 }



 $errores='';

 if ($_SERVER['REQUEST_METHOD']=='POST') {
   $usu=$_POST['usu'];
   $clav= $_POST['clav'];


   try {
     require_once('conexion.php');
   } catch (PDOException $e) {
     echo "Error".$e->getMessage();
   }
     $statement=$conn->prepare('SELECT email_administrador,clave_administrador FROM administrador WHERE email_administrador=:usu AND clave_administrador =:clav');
     $statement->execute(array(':usu'=>$usu,':clav'=>$clav));
     $resultado=$statement->fetch();

     if ($resultado !== false) {
       $_SESSION['usuario']=$usu;
       header('Location:index.php');

     }else if ($resultado==false) {
       $statement=$conn->prepare('SELECT email_abogado,clave_abogado FROM abogados WHERE email_abogado=:usu AND clave_abogado =:clav');
       $statement->execute(array(':usu'=>$usu,':clav'=>$clav));
       $resultado=$statement->fetch();
        if ($resultado !== false) {
          $_SESSION['abogado']=$usu;
          header('Location:index.php');
        }else {
          $errores.='<li> Datos incorrectos</li>';
        }

     }else{
       $errores.='<li> Datos incorrectos</li>';
     }
   }


 require 'views/login.view.php';

?>
