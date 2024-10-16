<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container-lg">
        <form method="POST" action="ejemplo_texto.php">
            <div class="mb-3 mt-4 col-sm-5">
                <label for="palabra" class="form-label">Escriba la palabra a buscar</label>
                <input type="name" class="form-control input-small" id="palabra" name="palabra" aria-describedby="Palabra a buscar">
                </br>
                </br>
                </br>
                </br>

            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="IngorarMayusculas" name="IngorarMayusculas">
                <label class="form-check-label" for="IngorarMayusculas">Ignorar Mayúsculas</label>
                </br>
                </br>
                </br>
            </div>
            <div class="mb-3 col-sm-10">
                <label for="txtobservaciones" class="form-label">Texto a Tratar</label>
                <textarea class="form-control" id="txtobservaciones" name="txtobservaciones" rows="3"></textarea>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>