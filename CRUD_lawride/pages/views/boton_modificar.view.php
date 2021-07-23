
<?php
require_once("conexion.php");
$nom_abogado='';
$ape_abogado='';
$genero='';
$genero_abogado='';
$tel_abogado='';
$direccion_abogado='';
$email_abogado='';
$clave_abogado='';


if  (isset($_GET['numd_abogado'])) {
  $numd_abogado = $_GET['numd_abogado'];
  $SQL = $conn->query("SELECT * FROM abogados WHERE numd_abogado=$numd_abogado");




  if ($SQL == true) {
    $row=$SQL->fetch();


    $numd_abogado=$row['numd_abogado'];
    $nom_abogado=$row['nom_abogado'];
    $ape_abogado=$row['ape_abogado'];
    $genero_abogado=$row['genero_abogado'];
    $tel_abogado=$row['tel_abogado'];
    $direccion_abogado=$row['direccion_abogado'];
    $email_abogado=$row['email_abogado'];
    $clave_abogado=$row['clave_abogado'];

  }
}
if (isset($_POST['actualizar'])) {
  $numd_abogado = $_GET['numd_abogado'];
  $nom_abogado=$_POST['nom_abogado'];
  $ape_abogado=$_POST['ape_abogado'];
  $genero_abogado=$_POST['genero_abogado'];
  $tel_abogado=$_POST['tel_abogado'];
  $direccion_abogado=$_POST['direccion_abogado'];
  $email_abogado=$_POST['email_abogado'];
  $clave_abogado=$_POST['clave_abogado'];

  $SQL = $conn->query("actualizar abogados set nom_abogado = '$nom_abogado', ape_abogado = '$ape_abogado', genero_abogado = '$genero_abogado',
  tel_abogado = '$tel_abogado', direccion_abogado = '$direccion_abogado', email_abogado = '$email_abogado', clave_abogado = '$clave_abogado'
   WHERE numd_abogado=$numd_abogado");


  header('Location: modificar_abogados.php');
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
    <link rel="stylesheet" href="../css/formulario.css">
    <title>Registrar abogado</title>
  </head>

  <body>
    <div class="contenedor">
     <h1 class='titulo'>Registro</h1>
     <hr class='border'>
      <fieldset>

      <form action="boton_modificar.php?numd_abogado=<?php echo $_GET['numd_abogado']; ?>" method="POST" class="formulario" name="login">


        <div class="form-group">
          <i class= "icono izquierda fa fa-user"></i><input name="nom_abogado" type="text" class="usuario" value="<?php echo $nom_abogado; ?>" placeholder="Nombres">
        </div>
        <div class="form-group">
          <i class= "icono izquierda fa fa-user"></i><input name="ape_abogado" type="text" class="usuario" value="<?php echo $ape_abogado; ?>" placeholder="Apellidos">
        </div>
        <div class="form-group">
          <i class= "icono izquierda fa fa-venus-mars"></i><input name="genero_abogado" type="text" class="usuario" value="<?php echo $genero_abogado; ?>" placeholder="Genero">
        </div>
        <div class="form-group">
          <i class= "icono izquierda material-icons">&#xe0b0;</i><input name="tel_abogado" type="text" class="usuario" value="<?php echo $tel_abogado; ?>" placeholder="telefono">
        </div>
        <div class="form-group">
          <i class= "icono izquierda material-icons">&#xe7f1;</i><input name="direccion_abogado" type="text" class="usuario" value="<?php echo $direccion_abogado; ?>" placeholder="Direccion">
        </div>
        <div class="form-group">
          <i class= "icono izquierda material-icons">&#xe0be;</i><input name="email_abogado" type="text" class="usuario" value="<?php echo $email_abogado; ?>" placeholder="Email">
        </div>
        <div class="form-group">
          <i class="icono izquierda fa fa-lock"></i><input name="clave_abogado" type="password" class="password" value="<?php echo $clave_abogado ; ?>" placeholder="Password">
        </div>

        <input type="submit" name="actualizar" value="actualizar">
       </form>
         </fieldset>
      <a href="modificar_abogados.php" class="btn">REGRESAR</a>
      </div>
      </body>
      </html>
