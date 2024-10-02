<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de alturas</title>
</head>
<body>
<?php
//Recibo los datos del formulario

print("Esto es lo que me llega por Get <br/>");

$nombres = [
    $_GET['persona1'],
    $_GET['persona2'],
    $_GET['persona3'],
    $_GET['persona4'],
    $_GET['persona5']
];
//Convierto los valores que recogí antes en floats
$alturas = [
    floatval($_GET['altura1']),
    floatval($_GET['altura2']),
    floatval($_GET['altura3']),
    floatval($_GET['altura4']),
    floatval($_GET['altura5'])
];

// Calculo la altura media
$altura_media = array_sum($alturas) / count($alturas);
$altura_media_redondeada = round($altura_media, 1);

// Encuentro al más alto
$indice_mas_alto = array_search(max($alturas), $alturas);
$nombre_mas_alto = $nombres[$indice_mas_alto];
$altura_mas_alta = (int)($alturas[$indice_mas_alto]);

// Muestro los resultados
echo "<h1>Resultados</h1>";
echo "<p>La altura media es: " . $altura_media_redondeada . " metros.</p>";
echo "<p>La persona más alta es " . $nombre_mas_alto . " con una altura de " . $altura_mas_alta . " metros.</p>";
?>

</body>
</html>