<?php
require_once('conexion.php');
@$documento=$_POST['numd_abogado'];
@$nombre=$_POST['nom_abogado'];
@$apelldio=$_POST['ape_abogado'];
@$genero=$_POST['genero_abogado'];
@$telefono=$_POST['tel_abogado'];
@$direccion=$_POST['direccion_abogado'];
@$email=$_POST['email_abogado'];
@$clave=$_POST['clave_abogado'];

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,
    initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet'type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/formulario.css">
    <title>Registrar abogado</title>
  </head>

  <body>
    <div class="contenedor">
     <h1 class='titulo'>Registro</h1>
     <hr class='border'>
      <fieldset>

       <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login" >
         <img src="../img/Lcara.png" alt="">
         <div class="form-group">
           <i class= "icono izquierda fa fa-credit-card"></i><input type="text" name="numd_abogado" class="usuario" placeholder="Numero de documento" value="">
         </div>

         <div class="form-group">
           <i class= "icono izquierda fa fa-user"></i><input type="text" name="nom_abogado" class="usuario" placeholder="Nombres" value="">
         </div>

         <div class="form-group">
           <i class= "icono izquierda fa fa-user"></i><input type="text" name="ape_abogado" class="usuario" placeholder="Apellidos" value="">
         </div>

         <div class="form-group">

           <i class= "icono izquierda fa fa-venus-mars"></i><input type="text" name="genero_abogado" class="usuario" placeholder="Genero" value="">

         </div>

         <div class="form-group">
           <i class= "icono izquierda material-icons">&#xe0b0;</i><input type="text" name="tel_abogado" class="usuario" placeholder="Telefono" value="">
         </div>
         <div class="form-group">
           <i class= "icono izquierda material-icons">&#xe7f1;</i><input type="text" name="direccion_abogado" class="usuario" placeholder="Direccion" value="">
         </div>

         <div class="form-group">
           <i class= "icono izquierda material-icons">&#xe0be;</i><input type="text" name="email_abogado" class="usuario" placeholder="Email" value="">
         </div>

         <div class="from-group">
           <i class="icono izquierda fa fa-lock"></i><input type="password" name="clave_abogado" class="password_btn" placeholder="Contraseña asiganda" value="">
         </div>
         <input type="submit" name="Enviar" value="Enviar">
         <div class="botn">
            <a href="funcionesadm.php">Regresar</a>
        </div>

       </fieldset>
        </form>
    </div>
  </body>
</html>

<?php

if(isset($_POST['Enviar'])){
  $SQL="INSERT INTO abogados(numd_abogado,nom_abogado,ape_abogado,genero_abogado,tel_abogado,direccion_abogado,email_abogado,clave_abogado)
  VALUES(:numd_abogado,:nom_abogado,:ape_abogado,:genero_abogado,:tel_abogado,:direccion_abogado,:email_abogado,:clave_abogado)";
  $resultado=$conn->prepare($SQL);
  $exec=$resultado->execute(array(":numd_abogado"=>$documento,":nom_abogado"=>$nombre,":ape_abogado"=>$apelldio,":genero_abogado"=>$genero,":tel_abogado"=>$telefono,":direccion_abogado"=>$direccion,":email_abogado"=>$email,"clave_abogado"=>$clave));
  if($exec){
    echo'<script language="javascript">alert("Datos Registrados");</script>';
    echo "Datos registrador".$e->getMessage();
    header("Refresh:0; url=modificar_abogados.php");
  }else{
    echo '<script language="javascript">alert("Error al registrar la informacion");</script>';
     }
  }

 ?>
