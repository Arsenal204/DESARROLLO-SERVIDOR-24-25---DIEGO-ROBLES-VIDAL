<?php

declare(strict_types=1);
include "./lib/funciones.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    function maximo()
    {   //Con get arg podemos recuperar todos los argumentos con los que se ha llamado la función
        $parametros = func_get_args();


        //Usamos la funcion max para devolver el maximo de los números
        return max($parametros);
    }



    //Escribir una funcion que se llame potencia 

    //La funcion recibe un número y una potencia y devuelve el número elevado a esa potencia 
    /**
     * @param int $numero
     * @param int $potencia
     * @return void
     * 
     */


    //Al pasar por valor variable a una funcion hay que poner delante el &
    //Esto hace que yo pueda modificar el valor de la variable y se queda modificado
    //despues de la ejecuación de la función
    function potencia_ref(&$numero, $potencia)
    {
        $numero = $numero ** $potencia;
        echo $numero . "<br>";
    }

    $valor = 3;
    echo potencia($valor, 3);
    echo $valor . "<br>";

    echo potencia_ref($valor, 3);
    echo $valor . "<br>";

    echo maximo(23, 25, 48, 96, 852, 123) . "<br>";
    ?>
</body>

</html>