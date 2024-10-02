<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baraja de poker</title>
</head>

<body>
    <?php
    //7. Crea un programa php que realice una simulación mano de cartas de poker. (Pantallazo funcionando)
    //Creo las variables
    $palos = array("picas", "corazones", "diamantes", "treboles", "picas", "corazones", "diamantes", "treboles");
    //Hago que me pille valores aleatorios del array 5 veces y las guarde
    $palos_aleatorios = array_rand($palos, 5);
    
    
    // Creo un bucle que me genera numeros aleatorios y luego hago que me muestre el número elegido y el palo elegido 
    for ($x = 0; $x < 5; $x++) {
        $numeros = rand(1, 13);
        switch ($numeros) {
            case 1:
                $numeros = "As";
                break;
            case 11:
                $numeros = "J";
                break;
            case 12:
                $numeros = "Q";
                break;
            case 13:
                $numeros = "K";
                break;
        }
        // Muestro los resultados
        echo "</br>" .  $numeros . " de " . $palos[$palos_aleatorios[$x]];
    }

    ?>
</body>

</html>