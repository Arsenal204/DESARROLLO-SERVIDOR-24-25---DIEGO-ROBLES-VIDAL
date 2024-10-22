<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
<?php 

/**
 * Escriba un programa que cada vez que se ejecute saque dos cartas de baraja de poker al azar
 * y diga si ha salido una pareja de valores iguales y el mayor de los valores obtenidos. 
 * Mostrar las cartas con imágenes
 */

   //Creo las variables
   $palos = array("spades", "hearts", "diamonds", "clubs", "spades", "hearts", "diamonds", "clubs");
   //Hago que me pille valores aleatorios del array 5 veces y las guarde
   $palos_aleatorios = array_rand($palos, 5);

   // Creo un bucle que me genera numeros aleatorios

       $numeros = rand(2, 14);

       $numeros2 = rand(2, 14);
       
       
       if ($numeros == $numeros2) {
        echo "Ha salido una pareja de valores iguales </br>";
    }else{
        echo "No ha salido una pareja de valores iguales </br>";
     if ($numeros > $numeros2) {
        echo "El mayor valor es ".$numeros ." </br>";
    }else{
        echo "El mayor valor es ".$numeros2 ." </br>";
    }
}


       switch ($numeros) {
           case 14:
               $numeros = "ace";
               break;
           case 11:
               $numeros = "jack";
               break;
           case 12:
               $numeros = "queen";
               break;
           case 13:
               $numeros = "king";
               break;
       }
    
    

   // Creo un bucle que me genera numeros aleatorios
  
    
    switch ($numeros2) {
        case 14:
            $numeros2 = "ace";
            break;
        case 11:
            $numeros2 = "jack";
            break;
        case 12:
            $numeros2 = "queen";
            break;
        case 13:
            $numeros2 = "king";
            break;
        }
  

        
    


?>
</div>
<div>
<img src="img/<?=$numeros ?>_of_<?= $palos[$palos_aleatorios[0]] ?>.png" alt="No hay imagen disponible">
<img src="img/<?=$numeros2 ?>_of_<?= $palos[$palos_aleatorios[1]] ?>.png" alt="No hay imagen disponible">
</div>
</body>
</html>