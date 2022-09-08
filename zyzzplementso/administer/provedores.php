<link rel="stylesheet" href="./styles/styleprove.css">
<?php

require 'config.php';
$message = '';

if (!empty($_POST['tienda']) && !empty($_POST['tipo']) && !empty($_POST['marca']) ) {
    $sql = "INSERT INTO provedores (tienda, tipo, marca, cantidad, fecha) VALUES (:tienda, :tipo, :marca, :cantidad, :fecha)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':tienda', $_POST['tienda']);
    $stmt->bindParam(':tipo', $_POST['tipo']);
    $stmt->bindParam(':marca', $_POST['marca']);
    $stmt->bindParam(':cantidad', $_POST['cantidad']);
    $stmt->bindParam(':fecha', $_POST['fecha']);
    
 
    if ($stmt->execute()) {
      $message = 'Successfully new proo';
    } else {
      $message = 'Error';
    }
  }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SignUp</title>
</head>
<body>

<?php if(!empty($message)): ?>
  <p> <?= $message ?></p>
<?php endif; ?>

<h1>Registra un Provedor</h1>

<div>

<form action="provedores.php" method="POST">
  <input name="tienda" type="text" placeholder="Nombre de la tienda"><br>
  <input name="tipo" type="text" placeholder="Tipo de Suplemento"><br>
  <input name="marca" type="text" placeholder="Marca"><br>
  <input name="cantidad" type="text" placeholder="Cantidad"><br>
  <input name="fecha" type="text" placeholder="Fecha"><br>
  <input type="submit" value="Submit"><br>
</form>

</div>

<a href="./index.php">Regresar</a>


</body>
</html>