<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Básico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-lg">
        <!-- Para enviar u¡los datos de un formulario hay que definirlo el modo de envio, get mete las variables en la url, post
         las lleva invisibles, con action marcamos la pagina de destino de los datos-->
        <form method="get" action="redondeo.php">
            <div class="mb-3 mt-4 col-sm-5">
                <label for="numero1" class="form-label">Primer número</label>
                <input type="float" class="form-control input-small" id="numero1" name="numero1" aria-describedby="Primer número">

            </div>
            <div class="mb-3 mt-4 col-sm-5">
                <label for="numero2" class="form-label">Segundo número</label>
                <input type="float" class="form-control input-small" id="numero2" name="numero2" aria-describedby="Segundo número">

            </div>
            <button type="submit" class="btn btn-primary">Redondear</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>