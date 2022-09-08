<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:index.php");
    exit;
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OLIMPO</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="shortcut icon" href="./imgs/icon.jpeg">

</head>
<body>



    <div>
        <a href="welcome.php"><img src="./imgs/icon.jpeg" alt="" class="icono"></a>
    </div>

    <div class="page-header">
        <h1>Hola, <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>, Bienvenid@ al OLIMPO.</h1>
        
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a>
        <a href="logout.php" class="btn btn-danger">Cierra la sesión</a>
    </div><br><br>
    <div class="navegation-bar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="./productos/creatina.php">Sobre Nosotros</a></li>
            <li><a href="./productos/contactanos.php">Contactanos</a></li>
          </ul>

    </div><br>

    
    <div>
    <h3 >Productos a la Venta</h3>
        <img src="./imgs/metacre.png" class="ofertaCre" alt="">
        <div class="creatina">
            <p class="metanutrition">Creatina Monohidratada Meta-Nutrition</p>
            <p>$600.00</p>
            <button  class="comprar"> <a class="comprarboton" href="#">Comprar</a></button>
        </div>

    </div>

    <div>
        <img src="./imgs/proteina.png" class="ofertaProte" alt="">
        <div class="wheyparrafo">
            <p >Proteina Whey <br> de Sabores</p>
            <p >$500.00 <br> </p>
            <button class="comprar"><a class="comprarboton" href="">Comprar</a></button>
        </div>
    </div>

    <div>
        <img src="./imgs/prework.png" class="ofertapre">
        <div class="preparrafo">
            <p >PreWork <br> Psycothic</p>
            <p >$500.00 <br> </p>
            <button class="comprar"><a class="comprarboton" href="">Comprar</a></button>
        </div>
    </div>

    <div>
        <img src="./imgs/metaprote.png" class="ofertapre">
        <div class="preparrafo">
            <p >Proteina <br>Meta</p>
            <p >$500.00 <br> </p>
            <button class="comprar"><a class="comprarboton" href="">Comprar</a></button>
        </div>
    </div>

    <div>
        <img src="./imgs/birdcre.png" class="ofertacre">
        <div class="birdparrafo">
            <p >Proteina <br>Meta</p>
            <p >$500.00 <br> </p>
            <button class="comprar"><a class="comprarboton" href="">Comprar</a></button>
        </div>
    </div>

    <div class="video">
        <h2>MOTIVATE HERMANO</h2>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/yPjJA9VKX_Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
    </div><br>


    <div>

    <h2>¿Quienes Somos?</h2>
    <p> Zyzzplement´s es un negocio que te llevará de la mano al olimpo, donde llasen todos aquellos que dieron todo 
        en el gimanasio, en la calistenia e cualquier disciplina que forje mas que solo el cuerpo que forja constacia
        sangre, sudor y lagrimas, eso que te lleva a descubri un nuevo tu aquel que te ayuda a salir del cascaron que retiene todo tu poder
        contamos con el suplemento imdicado para ti y al mejor precio.</p> <br>


    </div>
    
    <img src="./imgs/icon.jpeg" alt=""><br>

    

<br><section>Encuentranos</section>

<footer class="footer-distributed">


  <div class="footer-left">

    <p class="footer-links">
      <a class="link-1" href="welcome.php">Home</a>

      <a href="#">Blog</a>

      <a href="#">Pricing</a>

      <a href="admin.php">Admin</a>

      <a href="#">Contact</a>
    </p>

    <p>Zyzzplements &copy; 2022</p>
  </div>

</footer>




</body>
</html>