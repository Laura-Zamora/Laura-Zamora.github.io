<?php
if(isset($_GET['numd_abogado'])){

require_once("conexion.php");
if(isset($_GET['numd_abogado'])) {
  $numd_abogado = $_GET['numd_abogado'];
  $SQL = $conn->query("DELETE  FROM abogados WHERE numd_abogado = $numd_abogado");
 

  if($SQL==true) {
    echo '<script language="javascript">alert("Elimino correctamente el registro");</script>';
    header('Location: modificar_abogados.php');


  }else {
      echo '<script language="javascript">alert("Error al eliminar el registro");</script>';
  }


}

}

?>
