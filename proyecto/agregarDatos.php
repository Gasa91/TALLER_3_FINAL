<?php

include('baseDatos.php');

//Validar que se hizo clic en el boton de enviar datos
if(isset($_POST["btnAgregar"])){
    
    //recibir los datos a enviar
    $usuario=$_POST["usuario"];
    $cedula=$_POST["cedulaUsuario"];
    $nombre=$_POST["nombreUsuario"];
    $apellido=$_POST["apellidoUsuario"];
    $correo=$_POST["emailUsuario"];
    $telefono=$_POST["telefonoUsuario"];
    $contraseña=$_POST["passUsuario"];
   
    //1. crear un objeto del tipo BaseDatos (debemos cerar una variable)
    $operacionEnBaseDeDatos= new BaseDatos();
   
    //2. Creemos una consulta para agregar datos
     $consulta="INSERT INTO usuario (usuario, cedula, nombre, apellido, correo, telefono, contraseña) VALUES ('$usuario','$cedula','$nombre','$apellido','$correo','$telefono','$contraseña')";
    
   
   //3. utilizar el metodo alterarBaseDatos para poder ejecutar la consulta para ello utilizamos el objeto del paso 1 
  $resultado=$operacionEnBaseDeDatos->alterarBaseDatos($consulta);
   //4. verificar que si se escribieron los datos
     if($resultado){
         echo("<br>");
         echo("Se han agregado con exito los datos a la base de datos");
         echo("<br>");
     }else{
         die("error en la transacción");
     }





}





?>