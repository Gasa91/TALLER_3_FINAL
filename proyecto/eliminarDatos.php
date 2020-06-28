<?php

include('baseDatos.php');

if(isset($_POST["btnEliminar"])){

    $Cedula=$_POST["cedulaBorrar"];


    $operacionEnBaseDeDatos= new BaseDatos();


    $consulta="DELETE FROM usuario WHERE  cedula='$Cedula'";

    $resultado=$operacionEnBaseDeDatos->alterarBaseDatos($consulta);
    print_r($resultado);
}
else{
    echo("no se presiono");
}
?>