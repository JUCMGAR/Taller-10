<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--cambio de nombre hoja de style-->
    <link rel="stylesheet" href="css/operaciones.css">
    <title>Metodo Get</title>
</head>

<body>
    <a href="index.html#section-respuestas">
        <!--se agrega descripcion alt-->
        <img class="home" src="img/hogar.png" alt="botonhome">
    </a>
    <div class="main-frame-cal">
        <form action="method_get.php" method="GET">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Nombre">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Apellido">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Cédula</label>
                <input type="text" name="cc" class="form-control" id="exampleFormControlInput1" 
                placeholder="Digite su Cédula">
            </div>
            <button type="submit" name="verificar" class="btn btn-outline-info">Aplicar</button>
        </form>

        <?php

        // variables metodo get

        $edad = 0;

        // verificar atravez del metodo Get

        if (isset($_GET['verificar'])) {

            // obtener los valores de los parametro del formulario
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $cedula = $_GET['cc'];

            // imprime informacion en el formulario

            echo "Nombre : " . $nombre . "<br>";
            echo "Apellido : " . $apellido . "<br>";
            echo "Cédula : " . $cedula . "<br>";
        }

        ?>

    </div>
</body>

</html>

