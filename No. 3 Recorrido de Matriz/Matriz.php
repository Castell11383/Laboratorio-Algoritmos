<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Generada</title>
    <style>
        body{
            background-color: black;
            background-image: url(../Images/cool.jpg);
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            color: black;
            background-color: white;
            border: 3px;
            border-style: inset;
            border-bottom: solid black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            box-shadow: 2px 2px 45px rgb(251, 251, 251);
            margin-top: 5%;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        .primo {
            background-color: yellow; 
        }

        h1{
            text-align: center;
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-top: 3%;
            text-shadow: 2px 2px 45px rgb(255, 255, 255);
        }
    </style>
</head>
<body>
    <?php

    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $numero; $i++) {
            if ($numero % $i === 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["filas"]) && isset($_GET["columnas"])) {
        $filas = $_GET["filas"];
        $columnas = $_GET["columnas"];

        echo "<h1>Matriz de $filas filas y $columnas columnas:</h1>";
        echo "<table>";
        for ($i = 1; $i <= $filas; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $columnas; $j++) {
                $numero = $i * $columnas - $columnas + $j;
                $esPrimo = esPrimo($numero);
                $clase = $esPrimo ? 'primo' : '';
                echo "<td class='$clase'>$numero</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<h1>Error: No se han proporcionado filas y columnas.</h1>";
    }
    ?>
</body>
</html>

