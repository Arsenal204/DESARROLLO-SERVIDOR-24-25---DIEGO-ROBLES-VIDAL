<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
/**Escriba un programa que cada vez que se ejecute muestre
 *  la tirada de dos jugadores que tiran dos monedas al azar cada uno. Gana el que saque dos caras.
 *   Si no ha ganado nadie debe de mostrar un botón que vuelva a ejecutar el programa. 
 */


 $moneda1=0;
 $moneda2=0;
 $carasmoneda1=0;
 $carasmoneda2=0;

for ($i=0; $i < 2; $i++) { 
    $moneda1 = rand(0,1);
    $moneda2 = rand(0,1);
    echo "Moneda 1: " . $moneda1 . "<br>";
    echo "Moneda 2: " . $moneda2 . "<br>";

 
    if ($moneda1 == 1) {
        $carasmoneda1++;
    }
    if ($moneda2 == 1) {
        $carasmoneda2++;
    }

  
};
if ($carasmoneda1 == 2 && $carasmoneda2 == 2) {
    echo "Empate";

}else{
    if ($carasmoneda1 != 2 && $carasmoneda2 != 2) {
     echo "No ha ganado nadie";

    }
    if ($carasmoneda1 == 2) {
     echo "Gana el jugador 1";
    
    }
    if ($carasmoneda2 == 2) {
     echo "Gana el jugador 2";
    
    }  


}
if ($carasmoneda1 < 2 && $carasmoneda2 < 2) {
    echo '<form method="post"><button type="submit">Volver a tirar</button></form>';
   }
?>


</body>
</html>