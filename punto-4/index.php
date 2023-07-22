<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general-styles.css">
    <title>Punto 4</title>
</head>
<h1>Punto 4</h1>
<body>
<?php
    echo "Bienvenido a la calculadora de mayoria de edad con obtención de fecha PHP";
    echo "<br>";
    ?>
<form action= "ope.php" method="post" name="index">
<?php echo "Ingrese la fecha de nacimiento del usuario: (DD-MM-AAAA) "; ?>
 <input type="text" name="d" /><br /><br />
 <input type="submit" value="Enviar" />
</form>
</body>
</html>