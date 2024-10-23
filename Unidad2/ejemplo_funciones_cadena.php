<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    function posicion_x_ocurrencias($texto, $palabra, $numero_ocurrencia)
    {
        $contador = 0;
        //Ponemos a -1 la primera posicion para que pueda encontrar en la que 
        //empiece al principio, ya que la primera ocurrencia empieza en 0 
        //Si no encuentra la palabra indicada que no hay hasta esa ocurrencia/repeticion 
        $pos = -1;
        while ($contador < $numero_ocurrencia) {
            $pos = strpos($texto, $palabra, $pos + 1) . "</br>";
            //Si no encuentra la palabra indicada que no hay hasta esa ocurrencia/repeticion
            if ($pos === false) return -1;

            //Incrementamos la cantidad de palabras que hemos encontrado
            $contador++;
        }
        //Devolvemos la posición de la última piña
        return $pos;
    };


    $nombre = "Diego";
    $nota = 8.5984647;
    $texto = sprintf("%s tiene una nota jamon y 2 jamon de %.2f .</br>", $nombre, $nota);


    //substr me duelve una porcion de la cadena original 
    //introduciendo la posicion inicial y la cantidad de caracteres de la cadena original
    //$texto = substr($texto, 20, 10);

    $cantidad = 0;

    $texto2 = str_replace("jamon", "pavo", $texto, $cantidad);

    echo $texto;
    echo $texto2;
    echo $cantidad . "</br>";

    $texto3 = "piña tenia yo una piña muy amarilla y otro una piña muy piña, que resulto una piña verde";
    print "La posicion de la x piña es: " . posicion_x_ocurrencias($texto3, "piña", 3) . "</br>";

    $letra = chr(145);
    print str_pad($letra, 8, "#");







    ?>


</body>

</html>