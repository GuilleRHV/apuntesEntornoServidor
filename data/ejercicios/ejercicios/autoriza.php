<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de credenciales</h1>
    <?php

    if(isset($_GET['nombreusu']) && !empty($_GET['nombreusu'])){
        $usuario =$_GET['nombreusu'];
        echo "<br>Usuario introducido : " . $usuario;
    }else{
        echo'<br><h3>No has introducido ningun usuario</h3>';
    }

    echo "<br>El nombre del usuario es: " . $_GET['nombreusu'];
    echo "<br>La password es: " . $_GET['passwd'];

    ?>
</body>
</html>