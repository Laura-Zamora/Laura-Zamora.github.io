<?php
require_once("conexion.php");

$estado_caso='';
$cod_caso='';
$identificacion_cliente='';
$nombre_cliente='';
$telefono_cliente='';
$email_cliente='';
$situacion_juridica='';
$ultima_actualizacion='';
$pendientes='';
$nom_abogado='';
$num_documento='';


if  (isset($_GET['cod_caso'])) {
  $cod_caso = $_GET['cod_caso'];
  $SQL = $conn->query("SELECT * FROM casos WHERE cod_caso=$cod_caso");




  if ($SQL == true) {
    $row=$SQL->fetch();


    $estado_caso=$row['estado_caso'];
    $cod_caso=$row['cod_caso'];
    $identificacion_cliente=$row['identificacion_cliente'];
    $nombre_cliente=$row['nombre_cliente'];
    $telefono_cliente=$row['telefono_cliente'];
    $email_cliente=$row['email_cliente'];
    $situacion_juridica=$row['situacion_juridica'];
    $ultima_actualizacion=$row['ultima_actualizacion'];
    $pendientes=$row['pendientes'];
    $numd_abogado=$row['numd_abogado'];



  }
}
if (isset($_POST['actualizar'])) {


  $estado_caso=$_POST['estado_caso'];
  $cod_caso=$_GET['cod_caso'];
  $identificacion_cliente=$_POST['identificacion_cliente'];
  $nombre_cliente=$_POST['nombre_cliente'];
  $telefono_cliente=$_POST['telefono_cliente'];
  $email_cliente=$_POST['email_cliente'];
  $situacion_juridica=$_POST['situacion_juridica'];
  $ultima_actualizacion=$_POST['ultima_actualizacion'];
  $pendientes=$_POST['pendientes'];
  $numd_abogado=$_POST['numd_abogado'];
  $num_documento=$_GET['nom_abogado'];



  $SQL = $conn->query("update abogados,casos set estado_caso = '$estado_caso', identificacion_cliente= '$identificacion_cliente',
 nombre_cliente = '$nombre_cliente', telefono_cliente = '$telefono_cliente',email_cliente = '$email_cliente', situacion_juridica = '$situacion_juridica',
ultima_actualizacion = '$ultima_actualizacion', pendientes = '$pendientes', numd_abogado = '$num_documento', nom_abogado = '$nom_abogado'
   WHERE cod_caso=$cod_caso");


  header('Location: modificar_caso.php');
}
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
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="../css/formulario.css">
    <title>Editar caso</title>
  </head>

  <body>
    <div class="contenedor">
     <h1 class='titulo'>Editar caso</h1>
     <hr class='border'>
      <fieldset>

      <form action="editar_caso.php?cod_caso=<?php echo $_GET['cod_caso']; ?>" method="POST" class="formulario" name="login">

        <div class="form-group">
        <i class= "icono izquierda fas fa-folder-open"></i><textarea name="estado_caso" value="<?php echo $estado_caso ; ?>" rows="7" cols="60" placeholder="Estado del caso"></textarea>
        </div>

        <div class="form-group">
        <i class= "icono izquierda fa fa-credit-card"></i><input type="text" name="identificacion_cliente" value="<?php echo $identificacion_cliente; ?>" class="usuario" placeholder="Documento cliente" value="">
        </div>

        <div class="form-group">
        <i class= "icono izquierda fa fa-user"></i><input type="text" name="nombre_cliente" value="<?php echo $nombre_cliente; ?>" class="usuario" placeholder="Nombre cliente" value="">
        </div>

        <div class="form-group">
        <i class= "icono izquierda material-icons">&#xe0b0;</i><input type="text" name="telefono_cliente" value="<?php echo $telefono_cliente; ?>" class="usuario" placeholder="Telefono cliente" value="">
        </div>

        <div class="form-group">
        <i class= "icono izquierda material-icons">&#xe0be;</i><input type="text" name="email_cliente" value="<?php echo $email_cliente; ?>" class="usuario"  placeholder="Email cliente" value="">
        </div>

        <div class="form-group">
        <i class= "icono izquierda fas fa-folder-open"></i><textarea name="situacion_juridica" value="<?php echo $situacion_juridica; ?>" rows="7" cols="60"  placeholder="Situacion juridica" value=""></textarea>
        </div>

        <div class="form-group">
        <i class= "icono izquierda fas fa-folder-open"></i><textarea name="ultima_actualizacion" value="<?php echo $ultima_actualizacion; ?>" rows="7" cols="60"  placeholder="Ultima actuacion" value=""></textarea>
        </div>

        <div class="form-group">
        <i class= "icono izquierda fas fa-folder-open"></i><textarea name="pendientes"   value="<?php echo $pendientes; ?>"rows="7" cols="60" placeholder="Pendientes" value=""></textarea>
        </div>

       <div class="form-group">
       <i class= "icono izquierda fa fa-credit-card"></i><input type="text" name="numd_abogado"  value="<?php echo $num_documento; ?>"class="usuario" placeholder="Documento abogado" value="">
       </div>


       <input type="submit" name="actualizar" value="actualizar">
      </form>
       </fieldset>
     <a href="modificar_caso.php" class="btn">REGRESAR</a>
     </div>
     </body>
     </html>
