<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/operaciones.css">
    <title>Mayor o menor de edad</title>
</head>

<body>
    <a href="index.html#section-respuestas">
        <!--se agrega descripcion del alt-->
        <img class="home" src="img/hogar.png" alt="botonhome">
    </a>
    <div class="main-frame-cal">

        <form action="mayor_menor.php" method="POST">

            <div class="form-group">
                <label for="exampleFormControlInput1">Edad</label>
                <input type="number" name="edad" class="form-control" id="exampleFormControlInput1" placeholder="Digite su edad">
            </div>
            <button type="submit" name="verificar" class="btn btn-outline-info">Operar</button>

            <?php

            // definir si una persona es menor o mayor de edad

            $edad = 0;

            // logica

            if (isset($_POST['verificar'])) {
                $edad = $_POST['edad'];

                // comprobar si es mayor de edad

                if ($edad >= 18) {
                    echo "Es mayor de edad";
                }
                // comprobar si es menor de edad
                else if (18 > $edad && 0 < $edad) {
                    echo "Es menor de edad";
                }

                // edad no valida
                else {
                    echo "No valido";
                }
            }

            ?>
        </form>
    </div>
</body>

</html>



