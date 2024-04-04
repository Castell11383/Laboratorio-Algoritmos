<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .box {
        text-align: center;
        box-shadow: 2px 2px 45px rgb(0, 0, 125);
        font-family: 'Courier New', Courier, monospace;
        color: white;
        border: 5px;
        border-radius: 3px;
        border-color: black;
        background-color: hsla(255, 25%, 50%, 0.5);
        border-style: inset;
        border-radius: 10px;
        width: 350px;
        height: 300px;
        margin-left: 40%;
        margin-top: 5%;

    }

    form {
        padding: 5px;
    }

    h1 {
        text-align: center;
        font-family: "Dancing Script", cursive;
    }

    button {
        background-color: red;
        border-radius: 5px;
        color: white;
        align-items: center;
        width: 20%;
        height: 20%;
    }

    body {
        background-image: url(../Images/fon.jpg);
        background-color: black;
        background-repeat: no-repeat;
    }

    .saludo {
        text-align: center;
        text-shadow: 2px 2px 45px rgb(0, 0, 255);
        font-family: "Dancing Script", cursive;
        font-size: 300%;
        color: aliceblue;

    }
</style>

<body>
    <h1 class="saludo">
        <p>¡Haciendo Matrices!</p>
    </h1>
    <div class="box"><br>
        <form action="./Matriz.php" id="form1" method="GET">
            <h2>Ingrese el número de filas</h2>
            <p><label for="filas"></label></p>
            <p><input type="number" name="filas" placeholder="x"></p>
            <h2>Ingrese el número de columnas</h2>
            <p><label for="columnas"></label></p>
            <p><input type="number" name="columnas" placeholder="x"></p>
            <p><button type="submit">Enviar</button></p>
        </form>
    </div>

</body>

</html>