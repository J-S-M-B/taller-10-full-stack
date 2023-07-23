<?php
include "connection.php";
function getAllUsers(){
     return mysqli_query(CONNECTION,"SELECT * FROM usuarios");
}

function getUserByIdNumber($idNumber){
    return mysqli_query(CONENCTION,"SELECT * FROM usuarios WHERE cedula = $idNumber");
}
// SELECT --> GET -- TRAER DATOS
// INSERT --> POST -- ENCIAR DATOS
// UPDATE --> PUT -- ACTUALIZAR DATOS
// DELETE --> DELETE -- ELIMINAR DATOS 
 // print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>