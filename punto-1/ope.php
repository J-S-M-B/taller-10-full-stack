<?php
$operar = $_POST['op'];
switch ($operar){
    case "s":
        echo $_POST['n1'] + $_POST['n2'];
    break;
    case "r":
        echo $_POST['n1'] - $_POST['n2'];
    break;
    case "m":
        echo $_POST['n1'] * $_POST['n2'];
    break;
    case "d":
        echo $_POST['n1'] / $_POST['n2'];
    break;
}
?>
