<?php include("template/cabecera.php"); ?>

<?php

session_start();
if ($_POST) {
    if (($_POST['txtNombre1'] != "") && ($_POST['txtNombre2'] != "")) {
        $_SESSION['txtNombre1'] = $_POST['txtNombre1'];
        $_SESSION['txtNombre2'] = $_POST['txtNombre2'];
        date_default_timezone_set('Europe/Madrid');
        time();
        $timeEntrada=time();
        $_SESSION['tiempoActual']=$timeEntrada;
        header('Location:marcador.php');
    }
}
?>

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                Registro jugadores
            </div>
            <div class="card-body">

                <?php if (isset($mensaje)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje; ?>
                    </div>
                <?php } ?>

                <form method="POST">
                    <h2>Jugador 1 </h2>
                    <div class="form-group">
                        <label for="txtNombre1">Nombre:</label>
                        <input type="txt" required class="form-control" name="txtNombre1" id="txtNombre1" placeholder="Nombre del Jugador 1">
                        <br />
                    </div>
                    <h2>Jugador 2</h2>
                    <div class="form-group">
                        <label for="txtNombre2">Nombre:</label>
                        <input type="txt" required class="form-control" name="txtNombre2" id="txtNombre2" placeholder="Nombre del jugador 2">
                    </div>
                    <br />
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
                <?php
                $servername = "localhost";

                // REPLACE with your Database name
                $dbname = "sensordata";
                // REPLACE with Database user
                $username = "root";
                // REPLACE with Database user password
                $password = "";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "TRUNCATE TABLE sensordata";
                $conn->query($sql);
                $conn->close();
                ?>
            </div>

        </div>

    </div>

    <?php include("template/pie.php"); ?>