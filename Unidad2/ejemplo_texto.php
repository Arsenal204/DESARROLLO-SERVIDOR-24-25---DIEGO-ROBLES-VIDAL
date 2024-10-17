<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    /**
     * Reverses a given string.
     */
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



    /**
     * Comprueba si una palabra es palindromo
     *
     * @param string $palabra La palabra a comprobar
     * @return boolean True si es palindromo, false en caso contrario
     */
    function esPalindromo($palabra)
    {
        //Comprobamos si es par o impar
        //Tendremos que recorrer la cadena hasta la mistad solo, si es impar , hasta la mitad -1
        //Al conventir a  entero hacemos que siendo impar sea uno menos 
        //es decir si tiene 5 caracteres la mitad es 2.5 al truncar convirtiendolo a entero
        //se queda en 2
        $mitad = (int)strlen($palabra) / 2;

        //Por defecto 
        $esPal = true;
        //Recorremos todas las letras y comprobamos si son iguales a sus simetricas 
        for ($i = 0; $i <= $mitad; $i++) {
            //Comparamos letra a letra la posicion actual del indice i con
            //su inversa, que sera la última posición de la cadena (strlen -1) menos la i
            if ($palabra[$i] != $palabra[strlen($palabra) - 1 - $i]) {
                $esPal = false;
                return $esPal;
            }
        }
        //Si llega al final del bucle sin salir implica que todas las letras son iguales
        return $esPal;
    }
    //Este fichero recibe de un formulario html dos datos, una palabra con un type text
    //y un texto de varias lineas con un type textarea y un checkbox que diga si ignora o no mayusculas
    //El programa contara la cantidad de palabras totales, la cantidad de palasbras que sean palindromos 
    //la cantidad de veces que esta la palabra que se recibe, la cantidad de lineas y la cantidad de frases(Cada frase tiene un punto y final)
    //se devolvera en un array asociativo con todos los valores resultados


    if (isset($_POST["palabra"])) $palabra_buscada = $_POST["palabra"];
    if (isset($_POST["txtobservaciones"])) $texto = $_POST["txtobservaciones"];
    //Diferencias mayusculas es un checkbox, si no lo marco llega como null
    //Por lo cual isset da false
    if (isset($_POST["IngorarMayusculas"])) $ignorarMayusculas = true;
    else $ignorarMayusculas = false;


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

            $palabra = trim($palabra);
            echo "-" . $palabra . "</br>";

            //Si el checkbox de ignorar mayusculas esta marcado lo pasamos todo a minisculas
            if ($ignorarMayusculas) {

                $palabra = strtolower($palabra);
                $palabra_buscada = strtolower($palabra_buscada);
            }
            if ($palabra == $palabra_buscada) {
                $num_palabra_buscar++;
            }

            //Es un palindromo 
            if (inverso($palabra) == $palabra) {
                $num_palindromos++;
                echo $palabra . "Es palindromo </br>";
            }

            //Comprobamos con nuestra funcion si la palabra actual es un palindromo
            if (esPalindromo($palabra)) {
                $num_palindromos++;
            }
        }
    }




    //Guardamos la cantidad de palabras
    $resultado["numPalabras"] = count($palabras) + 1;
    $resultado["numFrases"] = $num_frases;
    $resultado["numPalabraBuscada"] = $num_palabra_buscar;
    $resultado["numPalindromos"] = $num_palindromos;
    $resultado["numPalindromosV2"] = $num_palindromosV2;




    //var_dump($lineas);




    ?>




</body>

</html>