<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general-styles.css">
    <title>Punto 1</title>
</head>
<h1>Punto 1</h1>
<body> 
    <?php
    echo "Bienvenido a la calculadora PHP ";
    echo "<br>";
    ?>
<form action= "ope.php" method="post" name="index">
<?php echo "Ingrese el valor del primer numero: "; ?>
 <input type="text" name="n1" /><br /><br />
 <?php echo "Ingrese el valor del segundo numero: "; ?>
 <input type="text" name="n2" /><br /><br />
 <label>Selecciona la operación: <br /><br />
    <select name="op">
 <option value="s">Sumar</option>
 <option value="r">Restar</option>
 <option value="m">Multiplicar</option>
 <option value="d">Dividir</option>
</select>
</label>
<br />
 <input type="submit" value="Calcular" />
</form>
</body>
</html>