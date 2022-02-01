<?php include("template/cabecera.php"); ?>
<?php

session_start();
if ((!isset($_SESSION['txtNombre1'])) || (!isset($_SESSION['txtNombre2']))) {
    header("Location:nuevaPartida.php");
} else {
    if (($_SESSION['txtNombre1'] != "") && ($_SESSION['txtNombre2'] != "")) {
        $nombreUsuario1 = $_SESSION['txtNombre1'];
        $nombreUsuario2 = $_SESSION['txtNombre2'];
        $timeEntrada = $_SESSION['tiempoActual'];
        $marcador1 = 0;
        $marcador2 = 0;
        $actualizar = 1;
    }
}

?>

<head>
    <link rel="stylesheet" type="text/css" href="./css/leds.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/marcador.css" media="all">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="1">
</head>

<div class="container2">
    <h1>Marcador</h1>
    <!-- Leds -->
    <!-- Fila 1 -->
    <!-- Columna Rojos -->
    <div class="led-box_Extremo">
        <div class="led-black"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <!-- Columna Blancos -->
    <div class="led-box-center">
        <div class="led-white"></div>
    </div>
    <div class="led-box-center">
        <div class="led-white"></div>
    </div>
    <!-- Columna Verde -->
    <div class="led-box-right_Extremos">
        <div class="led-black"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <!-- Fila 2 -->
    <!-- Columna Rojos -->
    <div class="led-box_Extremo">
        <div class="led-black"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <!-- Columna Blancos -->
    <div class="led-box-center">
        <div class="led-white"></div>
    </div>
    <div class="led-box-center">
        <div class="led-white"></div>
    </div>
    <!-- Columna Verde -->
    <div class="led-box-right_Extremos">
        <div class="led-black"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <!-- Fila 3 -->
    <!-- Columna Rojos -->
    <div class="led-box_Extremo">
        <div class="led-black"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <!-- Columna Blancos -->
    <div class="led-box-center">
        <div class="led-white"></div>
    </div>
    <div class="led-box-center">
        <div class="led-white"></div>
    </div>
    <!-- Columna Verde -->
    <div class="led-box-right_Extremos">
        <div class="led-black"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <!-- Fila 4 -->
    <!-- Columna Rojos -->
    <div class="led-box_Extremo">
        <div class="led-black"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <!-- Columna Blancos -->
    <div class="led-box-center">
        <div class="led-white"></div>
    </div>
    <div class="led-box-center">
        <div class="led-white"></div>
    </div>
    <!-- Columna Verde -->
    <div class="led-box-right_Extremos">
        <div class="led-black"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <!-- Fila 5 -->
    <!-- Columna Rojos -->
    <div class="led-box_Extremo">
        <div class="led-black"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <!-- Columna Blancos -->
    <div class="led-box-center">
        <div class="led-white"></div>
    </div>
    <div class="led-box-center">
        <div class="led-white"></div>
    </div>
    <!-- Columna Verde -->
    <div class="led-box-right_Extremos">
        <div class="led-black"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <!-- Fila 6 -->
    <!-- Columna Rojos -->
    <div class="led-box_Extremo">
        <div class="led-black"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <div class="led-box_Centrales">
        <div class="led-red"></div>
    </div>
    <!-- Columna Blancos -->
    <div class="led-box-center">
        <div class="led-white"></div>
    </div>
    <div class="led-box-center">
        <div class="led-white"></div>
    </div>
    <!-- Columna Verde -->
    <div class="led-box-right_Extremos">
        <div class="led-black"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <div class="led-box-right_Centrales">
        <div class="led-green"></div>
    </div>
    <br />
    <!-- Cronometro -->
    &nbsp;
    <div id="scoreBoard">
        <?php
        date_default_timezone_set('Europe/Madrid');
        $time_now = time();
        $timeLeft = $time_now - $timeEntrada;
        if ($timeLeft == 540) {
            echo '<script> alert("Partido Finalizado")</script>';
        }
        ?>

        <div id="scoreTime"><?php echo gmdate("i:s", $timeLeft); ?></div>
    </div>

    <!-- Descripcion tabla-->

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

    $sql = "SELECT id, resultado1, resultado2, reading_time FROM sensordata ORDER BY id DESC";

    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $row_id = $row["id"];
            $row_value1 = $row["resultado1"];
            $row_value2 = $row["resultado2"];
            if (($row_value1 == "1") && ($row_value2 == "1")) {
                $marcador1 = $marcador1 + 1;
                $actualizar = 1;
            } else if (($row_value1 = "2") && ($row_value2 == "1")) {
                $marcador2 = $marcador2 + 1;
            }
        }
        $result->free();
    }
    $conn->close();

    ?>

    <div id="scoreBoard">
        <div id="scoreHome"> <?php echo $marcador1; ?> </div>
        <div id="scoreAway"> <?php echo $marcador2; ?> </div>
        <div id="nameHome"> <?php echo $nombreUsuario1; ?> </div>
        <div id="nameAway"> <?php echo $nombreUsuario2; ?> </div>
    </div>
    &nbsp;


    <!--Introducir los botones-->
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-primary" href="nuevaPartida.php" role="button">Nuevos jugadores</a>
    </div>
</div>


<?php include("template/pie.php"); ?>