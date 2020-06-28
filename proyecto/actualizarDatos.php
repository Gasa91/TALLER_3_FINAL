<?php

include('baseDatos.php');

if(isset($_POST["btnactualizar"])){


    $Cedula=$_POST["cedula"];
    $Correo=$_POST["correo"];
    $telefono=$_POST["telefono"];
   
    


    $operacionEnBaseDeDatos= new BaseDatos();


    $consulta="UPDATE usuario SET correo='$Correo', telefono='$telefono' where cedula='$Cedula'";

    $resultado=$operacionEnBaseDeDatos->alterarBaseDatos($consulta);
    print_r($resultado);
}
else{
    echo("no se presiono");
}

?>