<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosregistros.css">
    <title>Formulario Registro</title>
</head>

<body>

    <form method="post">
        <h1>Suscribete<br> para recibir las ultimas noticias en tu correo</h1>
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="register">
    </form>
     <nav> 
        <a href="index.php"> Volver al inicio </a>
     </nav>
    <?php 
        include("registrar.php");
        ?>

</body>

</html>