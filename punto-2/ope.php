<?php
if ($_POST['e'] < 18){
    echo "El usuario no es mayor de edad";
}
elseif ($_POST['e'] >= 18){
    echo "El usuario es mayor de edad";
}
?>