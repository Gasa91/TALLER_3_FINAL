<?php

include('baseDatos.php');

if(isset($_POST["btnBuscar"])){

    $Cedula=$_POST["cedulaBuscar"];


    $operacionEnBaseDeDatos= new BaseDatos();


    $consulta="SELECT usuario, nombre, apellido, correo, telefono, contraseña  FROM usuario where cedula='$Cedula'";

    $resultado=$operacionEnBaseDeDatos->consultarEnBaseDatos($consulta);
    print_r($resultado);
}
else{
    echo("no se presiono");
}


?>











