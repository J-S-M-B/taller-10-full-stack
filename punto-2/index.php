<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general-styles.css">
    <title>Punto 2</title>
</head>
<h1>Punto 2</h1>
<body>
<?php
    echo "Bienvenido a la calculadora de mayoria de edad PHP ";
    echo "<br>";
    ?>
<form action= "ope.php" method="post" name="index">
<?php echo "Ingrese la edad del usuario: "; ?>
 <input type="text" name="e" /><br /><br />
 <input type="submit" value="Enviar" />
</body>
</html>