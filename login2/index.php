<?php
  session_start();

  require 'config.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    
    <title>Login</title>
</head>
<body>
      <div class="login-container">
          <div class="login-info-container">
            <h1 class="title">Log in with</h1>
            <form class="inputs-container">
                <input class="input" type="text" placeholder="Username" name="correo_electronico">
                <input class="input" type="text" placeholder="Password" name="contraseña" >
                <p>Forgot password? <span class="span">Click here</span></p>
                <input type="submit" value="Submit" placeholder="Login">
                <p>Don't have an account? <span class="span" > <a href="signup.html">Sign Up</a> </span></p>
            </form>
          </div>
            <img class="image-container" src="images/login.svg" alt="">
      </div>

</body>
</html>