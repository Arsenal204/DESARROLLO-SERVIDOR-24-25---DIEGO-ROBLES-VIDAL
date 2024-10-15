<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php


    for ($i = 0; $i < 20; $i++) {
        $numeros[] = rand(1, 100);
    }

    print "El valor maximo es " . max($numeros) . "</br>";
    print "El valor minimo es " . min($numeros) . "</br>";
    print "La media es: " . array_sum($numeros) / count($numeros) . "</br>";

    print_r($numeros);

    $min = PHP_INT_MAX;
    $max = PHP_INT_MIN;
    $avg = 0;

    for ($i = 0; $i < count($numeros); $i++) {

        //Vamos sumando en avg todos los numeros
        $avg = $avg + $numeros[$i];

        //El mínimo se hace comprobando el numero en la posición i si es menor que nuestro mínimo temporal
        if ($numeros[$i] < $min) {
            $min = $numeros[$i];
        };

        //El mínimo se hace comprobando el numero en la posición i si es mayor que nuestro máximo temporal        
        if ($numeros[$i] > $max) {
            $max = $numeros[$i];
        };
    }

    //Calculamos la media

    $avg = $avg / count($numeros);


    echo "</br>" . "El valor maximo es " . $max . "</br>";
    echo "El valor minimo es " . $min . "</br>";
    echo "La media es: " . $avg . "</br>";

    ?>


</body>

</html>