<?php
require_once('conexion.php');


@$estado_caso=$_POST['estado_caso'];
@$identificacion_cliente=$_POST['identificacion_cliente'];
@$nombre_cliente =$_POST['nombre_cliente'];
@$telefono_cliente=$_POST['telefono_cliente'];
@$email_cliente =$_POST['email_cliente'];
@$situacion_juridica =$_POST['situacion_juridica'];
@$ultima_actualizacion =$_POST['ultima_actualizacion'];
@$pendientes =$_POST['pendientes'];
@$num_documento =$_GET['numd_abogado'];

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
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/formulario.css">
    <title>Registrar caso</title>
  </head>

  <body>
    <div class="contenedor">
     <h1 class='titulo'>Registro caso</h1>
     <hr class='border'>
      <fieldset>

       <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login" >
         <img src="../img/Lcara.png" alt="">

           <div class="form-group">
           <i class= "icono izquierda fas fa-folder-open"></i><textarea name="estado_caso" rows="7" cols="60" placeholder="Estado del caso"></textarea>
           </div>

           <div class="form-group">
           <i class= "icono izquierda fa fa-credit-card"></i><input type="text" name="identificacion_cliente" class="usuario" placeholder="documento cliente" value="">
           </div>

           <div class="form-group">
           <i class= "icono izquierda fa fa-user"></i><input type="text" name="nombre_cliente" class="usuario" placeholder="Nombre cliente" value="">
           </div>

           <div class="form-group">
           <i class= "icono izquierda material-icons">&#xe0b0;</i><input type="text" name="telefono_cliente" class="usuario" placeholder="Telefono cliente" value="">
           </div>

           <div class="form-group">
           <i class= "icono izquierda material-icons">&#xe0be;</i><input type="text" name="email_cliente" class="usuario" placeholder="Email cliente" value="">
           </div>

           <div class="form-group">
           <i class= "icono izquierda fas fa-folder-open"></i><textarea name="situacion_juridica" rows="7" cols="60"  placeholder="Situacion juridica"></textarea>
           </div>

           <div class="form-group">
           <i class= "icono izquierda fas fa-folder-open"></i><textarea name="ultima_actualizacion" rows="7" cols="60" placeholder="Ultima actuacion"></textarea>
           </div>

           <div class="form-group">
           <i class= "icono izquierda fas fa-folder-open"></i><textarea name="pendientes" rows="7" cols="60" placeholder="Pendientes"></textarea>
           </div>

           <div class="form-group">
           <i class= "icono izquierda fa fa-credit-card"></i><input type="text" name="numd_abogado" class="usuario" placeholder="Documento abogado" value="">
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


if (isset($_POST['Enviar'])) {
  $SQL="INSERT INTO casos(estado_caso,identificacion_cliente,nombre_cliente,telefono_cliente,email_cliente,situacion_juridica,
  ultima_actualizacion,pendientes,numd_abogado)
  VALUES(:estado_caso,:identificacion_cliente,:nombre_cliente,:telefono_cliente,:email_cliente,:situacion_juridica,:ultima_actualizacion,
  :pendientes,:numd_abogado)";
  $resultado=$conn->prepare($SQL);
  $exec=$resultado->execute(array(":estado_caso"=>$estado_caso,":identificacion_cliente"=>$identificacion_cliente,
 ":nombre_cliente"=>$nombre_cliente,":telefono_cliente"=>$telefono_cliente,":email_cliente"=>$email_cliente,":situacion_juridica"=>$situacion_juridica,
  ":ultima_actualizacion"=>$ultima_actualizacion,":pendientes"=>$pendientes,":numd_abogado"=>$num_documento));
  if($exec){
    echo'<script language="javascript">alert("Datos Registrados");</script>';

    header("Refresh:0; url=modificar_caso.php");
  }else{
    echo '<script language="javascript">alert("Error al registrar la informacion");</script>';
     }
  }
  # code...


 ?>
