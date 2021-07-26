
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,
    initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet'type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <title>Iniciar Sesion</title>
  </head>

  <body>
    <div class="contenedor">
     <h1 class='titulo'>Iniciar Sesion</h1>
     <hr class='border'>
      <fieldset>
       <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login" >
         <img src="../img/Lcara.png" alt="">
         <div class="form-group">
           <i class= "icono izquierda fa fa-user"></i><input type="text" name="usu" class="usuario" placeholder="usuario" value="">
         </div>

         <div class="from-group">
           <i class="icono izquierda fa fa-lock"></i><input type="password" name="clav" class="password_btn" placeholder="Contraseña" value="">
         </div>
         <input type="submit" name="ingresar" value="Ingresar">

         <?php if(!empty($errores)):?>
           <div class="error">
             <ul>
             <?php echo "$errores"; ?>
             </ul>
           </div>
          <?php endif; ?>

          <div class="botn">
            <a href="funcionesadm.php">Regresar</a>
          </div>
          </form>
       </fieldset>
    </div>
  </body>
</html>
