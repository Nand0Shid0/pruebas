<link rel="stylesheet" href="./styles/styleinve.css">
<?php

require "config.php";
# SE EJECUTA LA CONSULTA DE BUSQUEDA
if (isset($_POST['submit'])) { 
  
  $sql = "SELECT * FROM inventario WHERE tipo = :tipo";
  $location = $_POST['tipo'];
  $statement = $conn->prepare($sql);
  $statement->bindParam(':tipo', $location);
  $statement->execute();
  $result = $statement->fetchAll();

}



if (isset($_POST['submit'])) {
  if ($result  && $statement->rowCount() > 0) { ?>
    <h2>Resultados</h2>

    <table>
      <thead>
<tr>
  <th>#</th>
  <th>Tipo&nbsp;&nbsp;&nbsp;</th>
  <th>Marca&nbsp;&nbsp;&nbsp;</th>
  <th>Cantidad &nbsp;&nbsp;</th>
  <th>Precio &nbsp;&nbsp;</th>
  
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo ($row["id"]); ?></td>
<td><?php echo ($row["tipo"]); ?></td>
<td><?php echo ($row["marca"]); ?></td>
<td><?php echo ($row["cantidad"]); ?></td>
<td><?php echo ($row["precio"]); ?></td>

      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No hay resultados para <?php echo ($_POST['tipo']); ?>.
  <?php }
} ?>



    <h2>Buscar usuario por Producto</h2> <!INTERFACE PARA BUSCAR POR UBICACIÓN––>

    <form method="post">
    	<label for="location">Nombre del Producto</label>
    	<input type="text" id="tipo" name="tipo">
    	<input type="submit" name="submit" value="Ver Resultados">
    </form>

    <a href="index.php">Regresar</a>

