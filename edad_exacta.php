<!DOCTYPE html>
<html lang="es>

<head>
    <meta charset= " UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--CND BOOTSTARP-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--cambio de nombre hoja de estilo-->
<link rel="stylesheet" href="css/operaciones.css">
<title>edad exacta</title>
</head>

<body>
    <a href="index.html#section-respuestas">
        <!--se agrega descripcion alt-->
        <img class="home" src="img/hogar.png" alt="botonhome">
    </a>

    <div class="main-frame-cal">
        <form action="edad_exacta.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Seleccione su fecha de nacimiento:</label>
                <input type="date" name="f_n" class="form-control" id="exampleFormControlInput1">
            </div>
            <!-- se corrige nombre de boton-->
            <button type="submit" name="verificar" class="btn btn-outline-info">Calcular</button>
        </form>

        <?php

        // asignar constantes

        const constante_18 = 18;
        const constante_0 = 0;

        // verificar parametro atraves de metodo post

        if (isset($_POST['verificar'])) {

            // crear un objeto datetime con la fecha de nacimiento proporcionada

            $f_n = new DateTime($_POST['f_n']);

            // crear un objeto datetime con fecha actual

            $date2 = new DateTime(date("y-m-d"));

            // calcular la diferencia entre las dos fechas

            $diff = $f_n->diff($date2);

            //obtener la edad en años meses y dias

            $edad_actual = $diff->y;
            $edad_meses = $diff->m;
            $edad_dias = $diff->d;

            // imprimir la información con base en la edad

            if ($edad_actual >= constante_18) {
                echo "Es mayor de edad dado que tiene: " . $edad_actual . " años. " . $edad_meses . " meses, " . $edad_dias . " dias.";
            } else if ($edad_actual < constante_18 && $edad_actual > constante_0) {
                echo "Es menor de edad, dado que tiene:" . $edad_actual . "años" . $edad_meses . " meses, " . $edad_dias . " dias.";
            } else {
                echo "No valido ";
            }
        }

        ?>

    </div>
</body>

</html>


