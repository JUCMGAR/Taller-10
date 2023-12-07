<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--style de la caja de operaciones-->
    <link rel="stylesheet" href="css/operaciones.css">
    <title>Calculadora</title>
</head>

<body>
    <a href="index.html#section-respuestas">
        <img class="home" src="img/hogar.png" alt="botonhome">
    </a>
    <div class="main-frame-cal">
        <form action="calculadora.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Número 1:</label>
                <input type="number" name="n1" class="form-control" id="exampleFormControlInput1"
                    placeholder="Digite número 1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Número 2:</label>
                <input type="number" name="n2" class="form-control" id="exampleFormControlInput2"
                    placeholder="Digite número 2">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Seleccione la operación:</label>
                <select class="form-control" name="tipo" id="exampleFormControlSelect1">
                    <option value="1">Suma</option>
                    <option value="2">Resta</option>
                    <option value="3">Multiplicación</option>
                    <option value="4">División</option>
                </select>
            </div> 
            <?php echo"<h1>".$result."</h1>"; ?>
            <button type="submit" name="operar" class="btn btn-outline-info">Operar</button>
        </form>
    </div>
</body>

</html>







