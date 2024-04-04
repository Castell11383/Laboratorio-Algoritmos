<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <style>
        h1 {
            font-family: "Dancing Script", cursive;
            font-size: 250%;
            color: green;
            text-align: center;
            text-shadow: 2px 2px 45px rgb(0, 0, 255);
        }

        h3 {
            font-family: "Dancing Script", cursive;
            text-align: center;
            color: white;
        }

        body {
            background-color: black;
            background-image: url(../Images/fondo.jpg);
            background-size: cover;
            background-position: right top;
        }

        .table1 {

            border: 5px;
            border-radius: 5px;
            border-collapse: collapse;
            border-style: inherit;
            width: 50%;
            margin-left: 23.5%;
            padding: 1%;
        }

        .table {
            box-shadow: 2px 2px 45px rgb(251, 251, 251);
            border: 8px;
            border-collapse: collapse;
            border-color: red;
            border-style: inset;
            margin: 20px auto;
        }

        td {
            width: 85px;
            height: 73px;
            border: 2px;
        }

        .blanco {
            background-color: #333;
        }

        .negro {
            background-color: #eee;
        }

        .ficha {
            border-radius: 50%;
            width: 80%;
            height: 80%;
            margin: auto;
        }

        .ficha-roja {
            background-color: yellow;
            border-style: inset;
        }

        .ficha-negra {
            background-color: blue;
            border-style: inset;
        }

        .contenedor {
            display: flex;
            justify-content: space-between;
        }

        .jugador1,
        .jugador2 {
            flex: 1;

        }

        .titulo{
            font-family: "Dancing Script", cursive;
            font-size: 250%;
            color: purple;
            text-align: center;
            text-shadow: 2px 2px 45px rgb(251, 251, 251);
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['nombre1'])) {
        $jugador1 = $_POST['nombre1'];
        $jugador2 = $_POST['nombre2'];
    }
    ?>

<div class="contenedor">
    <div class="jugador1">
        <?php
        echo '<h3> Jugador No. 1 </h3>';
        echo '<h1>' . $jugador1 . '</h1>';
        ?>
    </div>
    <h1 class="titulo">Tablero de Damas</h1>

    <div class="jugador2">
        <?php
        echo '<h3> Jugador No. 2 </h3>';
        echo '<h1>' . $jugador2 . '</h1>';
        ?>
    </div>
</div>


    <div class="table1">
        <table class="table" id="table">
            <?php

            $filas = 8;
            $columnas = 8;

            for ($fila = 0; $fila < $filas; $fila++) {
                echo "<tr>";

                for ($columna = 0; $columna < $columnas; $columna++) {

                    $claseColor = (($fila + $columna) % 2 == 0) ? 'blanco' : 'negro';
                    echo "<td class='$claseColor'>";

                    if (($fila + $columna) % 2 == 0) {

                        if ($fila <= 2) {
                            echo "<div class='ficha ficha-negra'></div>";
                        }

                        elseif ($fila <= 5) {
                            echo "<div class='ficha ficha-roja'></div>";
                        }
                    }

                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>

</body>

</html>