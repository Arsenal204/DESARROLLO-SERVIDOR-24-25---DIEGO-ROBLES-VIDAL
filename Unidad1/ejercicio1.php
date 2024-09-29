<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //7. Crea un programa php que realice una simulación mano de cartas de poker. (Pantallazo funcionando)
    $palos = array("picas", "corazones", "diamantes", "treboles","picas", "corazones", "diamantes", "treboles");
    $palos_aleatorios = array_rand($palos, 4);
    $numeros = rand(1,13);

    for ($x=0; $x<4;$x++){
        $numeros = rand(1,13);
        switch ($numeros) {
            case 1:
                $numeros="As";
                break;
            case 11:
                $numeros="J";
                break;
            case 12:
                $numeros="Q";
                break;
            case 13:
                $numeros="K";
                break;
            default:
                # code...
                break;
        }
        
        echo "</br>".  $numeros. " de " . $palos[$palos_aleatorios[$x]];
    }
    
    ?>
</body>
</html>