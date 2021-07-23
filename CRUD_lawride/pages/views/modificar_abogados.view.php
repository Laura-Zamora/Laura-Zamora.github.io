<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html>
<title>Modificar abogados</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<body>

  <div class="w3-container">
    <h2>REGISTRO ABOGADOS</h2>

       <table class="w3-table-all w3-hoverable">
        <thead>
          <tr class="w3-light-grey">
            <th>NUMERO DE DOCUMENTO</th>
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
            <th>GENERO</th>
						<th>TELEFONO</th>
						<th>DIRECCION</th>
						<th>EMAIL</th>
						<th>CLAVE ASIGNADA</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>

          </tr>
        </thead>
        <tbody>

          <?php

          $SQL = $conn->query("SELECT * FROM abogados");
          while ($row=$SQL->fetch()) {?>

            <td><?php echo $row['numd_abogado']; ?></td>
            <td><?php echo $row['nom_abogado']; ?></td>
            <td><?php echo $row['ape_abogado']; ?></td>
						<td><?php echo $row['genero_abogado']; ?></td>
						<td><?php echo $row['tel_abogado']; ?></td>
						<td><?php echo $row['direccion_abogado']; ?></td>
						<td><?php echo $row['email_abogado']; ?></td>
						<td><?php echo $row['clave_abogado']; ?></td>
            <td>
              <a href="boton_modificar.php?numd_abogado=<?php echo $row['numd_abogado']?>" class="btn btn-secondary">
              <i class="fas fa-marker" style='font-size:20px;color:#4fb560'></i>
              </a>
            </td>
            <td>
              <a href="boton_eliminar.php?numd_abogado=<?php echo $row['numd_abogado']?>" class="btn btn-danger">
                <i class="far fa-trash-alt" style='font-size:20px;color:red'></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
<a href="funcionesadm.php" class="btn">REGRESAR</a>
    </body>
    </html>
