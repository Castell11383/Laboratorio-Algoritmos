<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            font-size: 25px;
            padding: 3%;
            border: 3px;
            border-color: silver;
            border-style: inset;
            width: 340px;
            margin-left: 35%;
            margin-top: 5%;
            background-color: hsla(225, 50%, 50%, 0.5);
            box-shadow: 2px 2px 45px rgb(0, 0, 125);
        }

        .numero,
        .bloque {
            width: 30px;
            /* Establece un ancho fijo para los números y bloques */
            height: 30px;
            /* Establece una altura fija para los números y bloques */
            display: inline-block;
            /* Permite que el ancho y el alto funcionen correctamente */
            text-align: center;
            /* Centra el contenido horizontalmente dentro del bloque */
            line-height: 30px;
            /* Centra verticalmente el contenido dentro del bloque */
            border-style: inset;
            border: 2px solid black;
            /* Agrega un borde de 1px de ancho y color negro */
            margin-right: px;
            /* Agrega un margen a la derecha para separar los números */
            background-color: yellow;
            background-clip: initial;
        }

        body {
            background-image: url(../Images/fondo\ 5.jpg);
            background-color: black;
        }

        h3 {
            text-align: center;
            font-family: "Dancing Script", cursive;
            color: white;
        }

        p {
            color: white;
            background-color: red;
            text-align: center;
        }

        button {
            background-color: red;
            border-radius: 5px;
            color: white;
            align-items: center;
            width: 30%;
            height: 20%;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["pisos"])) {

            $pisos = $_GET["pisos"];

            echo '<h3>Escalera de ' . $pisos . ' pisos</h3>';

            if ($pisos > 10) {
                echo "<p>La cantidad de pisos no puede ser mayor a 10.</p>";
            } else {

                $contador = 1;
                $suma = 0;
                $multiplicacion = 1;

                for ($i = 1; $i <= $pisos; $i++) {

                    for ($j = 1; $j <= $i; $j++) {

                        echo '<span class="numero">' . $contador . '</span>';
                        $suma += $contador;
                        $multiplicacion *= $contador;

                        $contador++;
                    }
                    echo "<br>";
                }
                echo '<form method="GET" action="#">
                        <h3>Seleccione una operación</h3>
                        <label for="operation"></label>
                        <select name="operation" >
                            <option value="1">Suma</option>
                            <option value="2">Multiplicación</option>
                        </select><br>
                        <button type="submit">Resultado</button>
                        <input type="hidden" value='.$suma.' name="suma" >
                        <input type="hidden" value='.$multiplicacion.' name="multiplicacion" >
                    </form>';

                }
            }

            if (isset($_GET["operation"])) {
                $operacion = $_GET["operation"];
                $suma = $_GET["suma"];
                $multiplicacion = $_GET["multiplicacion"];

                switch ($operacion) {

                    case "1":
                        echo "<p>LA SUMA DE LOS NUMEROS ES: ".$suma."</p>";
                        break;
                        
                    case "2":
                        echo "<p>LA MULTIPLICACION DE LOS NUMEROS ES: ".$multiplicacion."</p>";
                        break;
                }
            }
            ?>
    </div>
</body>

</html>
