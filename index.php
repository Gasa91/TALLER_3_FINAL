<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NEGOCIO_GIOVANNY</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-transparent text-dark">

    <header>
        <h1 class="text-center mt-4">REGISTRESE </h1>
    </header>
    <main>

       
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
            
                    <form action="agregarDatos.php" method="POST">

                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required> 
                        </div>

                        <div class="form-group">
                            <label for="cedulaUsuario">Cedula</label>
                            <input type="text" class="form-control" id="cedulaUsuario" name="cedulaUsuario" placeholder="Cedula" required > 
                        </div>

                        <div class="form-group">
                            <label for="nombreUsuario">Nombre</label>
                            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Nombre "  required>
                        </div>

                        <div class="form-group">
                            <label for="apellidoUsuario">Apellido</label>
                            <input type="text" class="form-control" id="apellidoUsuario" name="apellidoUsuario" placeholder="Apellido "  required>
                        </div>

                        <div class="form-group">
                            <label for="emailUsuario">Correo</label>
                            <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="Email"  required >
                        </div>

                        <div class="form-group">
                            <label for="telefonoUsuario">Telefono</label>
                            <input type="text" class="form-control" id="telefonoUsuario" name="telefonoUsuario" placeholder="Telefono"  required> 
                        </div>

                        <div class="form-group">
                            <label for="passUsuario">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword2" name="passUsuario" placeholder="Contraseña"  required>
                        </div>
                        <button type="submit" class="btn btn-success btn-block" id="btnAgregar" name="btnAgregar">Guardar</button>
                    </form>
            </div>
            
             <div class="col-12 col-md-4">
       
                        <form action="consultarDatos.php" method="POST" class="mt-6 mb-7">
                            <div class="form-group">
                                <label for="cedulaBuscar">Cedula a Consultar:</label>
                                <input type="text" class="form-control" id="cedulaBuscar" name="cedulaBuscar" placeholder="Cedula" required>
                            </div>
                                <button type="submit" class="btn btn-info btn-block" id="btnBuscar" name="btnBuscar" placeholder="Cedula">Consultar</button>
                        </form>
                        <br>
                        <br>
                       <form action="eliminarDatos.php" method="POST" class="mt-6 mb-7">
                            <div class="form-group">
                                <label for="cedulaBorrar">Cedula A Borrar:</label>
                                <input type="text" class="form-control" id="cedulaBorrar" name="cedulaBorrar"  placeholder="Cedula"required>
                             </div>
                            <button type="submit" class="btn btn-danger btn-block" id="btnEliminar" name="btnEliminar">Borrar</button>
                        </form>
            </div>

            <div class="col-12 col-md-4">
                        <form action="actualizarDatos.php" method="POST" class="mt-6 mb-7">
                            <div class="form-group">
                                <label for="cedula"> Digite la Cedula</label>
                                <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula" required >
                                <br>
                                <label for="correo">correo A Actualizar:</label>
                                <input type="email" class="form-control" id="correo" name="correo"  placeholder="Email">
                                <label for="telefono">Numero de Telefono A Actualizar:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" >
                            </div>
                                <button type="submit" class="btn btn-warning btn-block" id="btnactualizar" name="btnactualizar">Actualizar</button>
                        </form>
            </div>
        </div>
    </div>
    </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  
</body>
</html>
