<link rel="stylesheet" href="./styles/styleuser.css">
<?php


require "config.php";
# SE EJECUTA LA CONSULTA DE BUSQUEDA
if (isset($_POST['submit'])) { 
  
  $sql = "SELECT * FROM users WHERE email = :email";
  $location = $_POST['email'];
  $statement = $conn->prepare($sql);
  $statement->bindParam(':email', $location);
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
  <th>Username&nbsp;&nbsp;&nbsp;</th>
  <th>Calle&nbsp;&nbsp;&nbsp;</th>
  <th>Colonia&nbsp;&nbsp;&nbsp;</th>
  <th>Codigo Postal &nbsp;&nbsp;</th>
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo ($row["id"]); ?></td>
<td><?php echo ($row["email"]); ?></td>
<td><?php echo ($row["calle"]); ?></td>
<td><?php echo ($row["colonia"]); ?></td>
<td><?php echo ($row["cp"]); ?></td>

      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No hay resultados para <?php echo ($_POST['email']); ?>.
  <?php }
} ?>



    <h2>Buscar usuario por Username</h2> <!INTERFACE PARA BUSCAR POR UBICACIÓN––>

    <form method="post">
    	<label for="location">Username</label>
    	<input type="text" id="location" name="email">
    	<input type="submit" name="submit" value="Ver Resultados">
    </form>

  

