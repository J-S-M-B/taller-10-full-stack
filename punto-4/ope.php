<?php
$dd =substr($_POST['d'], -10,2);
$dm =substr($_POST['d'], -7,2);
$dY =substr($_POST['d'], -4);

if ((date("Y")-$dY == 18) && (date("m") == $dm) &&  ($dd > date("d"))){
    echo "Su edad es 17 por lo tanto es menor de edad";
}
elseif ((date("Y")-$dY == 18) &&  ($dm > date("m"))){
    echo "Su edad es 17 por lo tanto es menor de edad";
}
elseif (date("Y")-$dY < 18 ){
    echo "Su edad es ".date("Y")-$dY." por lo tanto es menor de edad";
}
else{
    echo "Su edad es ".date("Y")-$dY." por lo tanto es mayor de edad";
}

?>