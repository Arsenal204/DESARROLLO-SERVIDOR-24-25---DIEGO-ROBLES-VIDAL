<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //en php los arrays tienen un tamaño diminuto, le podemos añadir elementos sin problemas 
    //Tambien puede combinar datos de distinto tipo, incluso arrays dentro de otros

    $alumno = ["jose", 23, false, 6.78, ["pepito", 23, 112]];

    //Para acceder a los elementos de un array utilizamos el operador []
    //Si dentro de un array hay otro array y queremos acceder a algún elemento del array interno 
    //Utilizamos dos veces [] el primero es la posición del array principal y el segundo para el array interno
    print $alumno[4][2] . "</br>";


    //$alumno = "final";
    $alumno[] = "final";


    print_r($alumno);

    $lista_letras = ['a', 'e', 'z'];

    print "</br>";
    print_r($lista_letras);
    print "</br>";
    unset($lista_letras[1]);
    print "</br>";
    print_r($lista_letras);

    if (isset($lista_letras[2])) {
        print "Existe la segunda posición del array";
        if (isset($lista_letras[4])) {
            print "Existe la cuarta posición del array";
        }
    }

    ?>
</body>

</html>