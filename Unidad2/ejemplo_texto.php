<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    function inverso($cadena)
    {
        $cad_inversa = "";

        //Recorremos la cadena desde el final hasta el principio
        //con $i y vamos asignando cada carácter a la cadena inversa
        for ($i = strlen($cadena) - 1; $i >= 0; $i--) {
            $cad_inversa = $cadena[$i] . $cad_inversa;
        }

        //Devolvemos la inversa
        return $cad_inversa;
    }


    function esPalindromo($palabra)
    {
        //Comprobamos si es par o impar
        $mitad = (int)strlen($palabra) / 2;

        $esPal = true;
        //Recorremos todas las letras y comprobamos si son iguales a sus simetricas 
        for ($i = 0; $i < $mitad; $i++) {
            if ($palabra[$i] != $palabra[strlen($palabra) - 1 - $i]) {
                $esPal = false;
            }
            // 
        }
    }
    //Este fichero recibe de un formulario html dos datos, una palabra con un type text
    //y un texto de varias lineas con un type textarea y un checkbox que diga si ignora o no mayusculas
    //El programa contara la cantidad de palabras totales, la cantidad de palasbras que sean palindromos 
    //la cantidad de veces que esta la palabra que se recibe, la cantidad de lineas y la cantidad de frases(Cada frase tiene un punto y final)
    //se devolvera en un array asociativo con todos los valores resultados


    if (isset($_POST["palabra"])) $palabra_buscada = $_POST["palabra"];
    if (isset($_POST["txtobservaciones"])) $texto = $_POST["txtobservaciones"];
    if (isset($_POST["IngorarMayusculas"])) $ignorarMayusculas = $_POST["IngorarMayusculas"];


    //Separamos en lineas

    $lineas = explode("\n", $texto);


    //Asignamos la cantidad de lineas del texto a la clave numLineas
    $resultado["numLineas"] = count($lineas);


    $num_Palabras = 0;
    $num_frases = 0;
    $num_palabra_buscar = 0;
    $num_palindromos = 0;
    $num_palindromosV2 = 0;

    //Recorremos todas las líneas (PARA EL EXAMEN)
    foreach ($lineas as $linea) {
        //Separamos en palabras cada linea
        $palabras = explode(" ", $linea);

        //Guardamos la cantidad de palabras
        $num_Palabras = $num_Palabras + count($palabras);


        //Para  contar la cantidad de puntos 
        //hago un explode de cada linea, separando por . 
        //si el array resultante solo tiene un elemento implica que no hay ningun . 
        //Si hay por ejemplo 3 puntos, el array  tendra 4 elementos
        //Implica que restando el 1 al count del explode me dará la cantidad de . 
        //que hay en esta linea;
        $num_frases = $num_Palabras + count(explode(".", $linea)) - 1;

        foreach ($palabras as $palabra) {
            if ($palabra == $palabra_buscada) {
                $num_palabra_buscar++;

                //Es un palindromo 
                if (inverso($palabra) == $palabra) {
                    $num_palindromos++;
                }
            }
        }
    }




    //Guardamos la cantidad de palabras
    $resultado["numPalabras"] = count($palabras) + 1;
    $resultado["numFrases"] = $num_frases;




    //var_dump($lineas);




    ?>




</body>

</html>