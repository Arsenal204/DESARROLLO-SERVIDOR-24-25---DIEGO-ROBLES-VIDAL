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
        <form method="get" action="formulario_select_radio.php">
            <div class="mb-3 mt-4 col-sm-5">
                <label for="nif" class="form-label">NIF</label>
                <input type="text" class="form-control input-small" id="nif" name="nif" aria-describedby="Primer número">

            </div>
            <div class="mb-3 mt-4 col-sm-5">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="number" class="form-control input-small" id="telefono" name="telefono" aria-describedby="Segundo número">

            </div>




            <div class="mb-3 col-sm-5">
                <label class="form-check-label" for="estado_social">Estado social</label>
                <select class="form-select" aria-label="Default select example" id="estado_social" name="estado_social">
                    <option selected>Abrir menú de selección</option>
                    <?php

                    print "<option>Soltero</option>";
                    print "<option>Casado</option>";
                    print "<option>Divorciado</option>";
                    print "<option>Viudo</option>";



                    ?>
                </select>
            </div>
            <div class="form-check-inline">
                <label class="from-check-label" for="vehiculo">Vehículo</label>
                <input class="form-check-input" type="radio" name="vehiculo" id="barco">
                <label class="form-check-label" for="barco">
                    Barco
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="vehiculo" id="coche" checked>
                <label class="form-check-label" for="coche">
                    Coche
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="vehiculo" id="moto" checked>
                <label class="form-check-label" for="moto">
                    Moto
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="vehiculo" id="avion" checked>
                <label class="form-check-label" for="avion">
                    Avión
                </label>
            </div>
            </br>
            </br>
            <button type="submit" class="btn btn-primary">Aceptar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>