<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        define("VIDA_MAXIMA",100);
        // Al declarar variables no se puede empezar con un número ni con algún caracter especial
        $num1 = 23  . "40";
        $num2 = "23";
        $num3=$num1+$num2;
        $array_numeros=array(12,45,92,27,9,2,7);
        $num4=23;


        print "<br/>La suma de 23 y 23 es $num3";

        $texto="<br/> estamos en segundo de daw";

        echo "</br>";

        print PHP_INT_MAX . "</br>";

        if (is_int($num2)."</br>"){
            print"es entero";
        }else{
               print "no es entero";
            }
        ;

        print $num1;

        if (2>=2){
            //Nombre esta decalrada dentro del if, no es solo accesible dentro de if, se puede usar fuera de este
            $nombre="pepe";
            print "<br/> Entra";
        }
        //Si utilizamos la comillas simples para las cadenas de texto 
        //no se pueden meter variables dentro 
        print '<br/> Mi nombre el $nombre';
        echo "<br/> Mi nombre el $nombre <br/>";
        
        //strlen nos dice cuentos caracteres tiene un string
        print "El nombre tiene".strlen($nombre)." caracteres<br/>";

        var_dump($nombre);
        echo "<br/>";
        $empleado= array("pedro", 34 , 2345.4,"soltero");

        //count nos cuenta la cantidad de elementos de un array
        print("<br/>El array empleado tiene " . count($empleado)." elementos");

        var_dump($empleado);

        //str_replace ("palabra a buscar", "palabra sustituta", Cadena de donde se va a cambiar)
        echo $texto;
        echo str_replace("daw","smr",$texto);

        //strpos() Te da la posición de la palabra que tu le diga, aunque solo te da la posición de la primera vez que aparezca

        //strtok Te separa un texto según el elemento que le hayas dicho

        //strcom(); La mayor es segun el codigo ASCII

        //trim para quitar espacios de delante y detras

        //explode corta una cadena y devuelve un array de secciones de dicha cadena
        echo "<br/>";
        var_dump( explode(" ",$texto));

        //Las variables creadas dentro de funtion solo se pueden utilizar dentro de funtion


        print "</br>".min($array_numeros);

        print "</br>". round(4.5);

        //No pilla los numeros decimales al utilizar la función rand

        print "<br/> Numero aleatorio ".rand(-0.0,3.50); 

        print"<br/> La vida maxima es: ". VIDA_MAXIMA;

        if($num2==$num4){
            print"</br> Son iguales";
        };
        if($num4===$num2){
            print"</br> Son identicos";
        }else print "</br> No son identicos";
        
        //print_r Saca los valores de un array (como el var_bump pero más bonito)

        $valor=($num2+$num2)/2;
    ?>
</body>
</html>