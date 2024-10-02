<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta Formulario</title>
</head>

<body>
    <?php
    //“_El usuario con {dni} responde al {telefono}es {estado_social} y viaja en {vehiculo}”.
    print("Esto es lo que me llega por Get <br/>");

    print ("_El usuario con $_GET[nif] responde al $_GET[telefono] es $_GET[estado_social] y viaja en $_GET[vehiculo]");


    ?>
</body>

</html>