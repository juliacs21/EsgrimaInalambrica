<?php
//Verificación usuario de acceso
session_start();
if ($_POST) {
    if (($_POST['usuario'] == "esgrima") && ($_POST['contrasenia'] == "sistema")){

        $_SESSION['usuario'] = "ok";
        $_SESSION['nombreUsuario'] = "Administrador";

        header('Location:inicio.php');
    } else {
        $mensaje = "Error: El usuario y/o contraseña son incorrectos";
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <br />
                <div class="card">
                    <div class="card-header">
                        Acceso administración
                    </div>
                    <div class="card-body">

                        <?php if (isset($mensaje)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $mensaje; ?>
                            </div>
                        <?php } ?>

                        <form method="POST">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Usuario:</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                                <br />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña:</label>
                                <input type="password" class="form-control" name="contrasenia" placeholder="Contraseña">
                                <br />
                            </div>

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>
</body>

</html>