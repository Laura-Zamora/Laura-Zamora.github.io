<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html>
<title>Casos abogado</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<body>

  <div class="w3-container">
    <h2>Casos </h2>

       <table class="w3-table-all w3-hoverable">

        <thead>
          <tr class="w3-light-grey">
            <th>ESTADO</th>
            <th>CODIGO CASO</th>
            <th>DCUMENTO CLIENTE</th>
            <th>NOMBRE CLIENTE</th>
						<th>TELEFONO CLIENTE </th>
						<th>EMAIL CLIENTE</th>
						<th>SITUACION JURIDICA</th>
						<th>ULTIMA ACTUACION</th>
            <th>PENDIENTES</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>

          </tr>
        </thead>
        <tbody>

          <?php

          $SQL = $conn->query("SELECT estado_caso,cod_caso,identificacion_cliente,nombre_cliente,telefono_cliente,
          email_cliente,situacion_juridica,ultima_actualizacion,pendientes FROM casos, abogados WHERE casos.numd_abogado=abogados.numd_abogado");
          while ($row=$SQL->fetch()) {?>

            <td><?php echo $row['estado_caso']; ?></td>
            <td><?php echo $row['cod_caso']; ?></td>
            <td><?php echo $row['identificacion_cliente']; ?></td>
						<td><?php echo $row['nombre_cliente']; ?></td>
						<td><?php echo $row['telefono_cliente']; ?></td>
						<td><?php echo $row['email_cliente']; ?></td>
						<td><?php echo $row['situacion_juridica']; ?></td>
						<td><?php echo $row['ultima_actualizacion']; ?></td>
            <td><?php echo $row['pendientes']; ?></td>
            <td>
              <a href="editar_caso.php?cod_caso=<?php echo $row['cod_caso']?>" class="btn btn-secondary">
              <i class="fas fa-marker" style='font-size:20px;color:#4fb560'></i>
              </a>
              </td>
              <td>
              <a href="eliminar_caso.php?cod_caso=<?php echo $row['cod_caso']?>" class="btn btn-danger">
                <i class="far fa-trash-alt" style='font-size:20px;color:red'></i>
              </a>
             </td>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <a href="funcionesabo.php" class="btn">REGRESAR</a>
    </body>
</html>
