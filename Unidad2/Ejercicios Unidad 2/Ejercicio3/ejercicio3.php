<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinar el Número</title>
</head>
<body>
    <h1>¡Adivina el Número!</h1>
    <p>Adivina un número entre 1 y 100. Tienes 6 intentos.</p>
    
    <?php 

    /**
     * Crea un programa que genere un número aleatorio y haga que el usuario lo intente acertar en menos de 6 intentos. 
     * Si está muy cerca , a menos de 5 posiciones, dirá (calentito totalis!), 
     * si está más lejos dirá que el número es mayor o menor.
     *
     */
    
    $numaleatorio=rand(1,100);
    $numdado=0;
    echo '<form method="post"><label type="number" class="form-label">Elige un número entre 1 y 100</label> <input type="name" class="form-control input-small" id="numdado" name="numdado" aria-describedby="Numero dado"</form>';
    echo '<form method="post"><button type="submit">¿He ganado?</button></form>';
   
    for ($i=0; $i < 6; $i++) { 
        
        if ($numaleatorio==$numdado){
            echo "Has ganado";
        }elseif (abs($numdado - $numaleatorio) < 5|| abs($numdado - $numaleatorio) > -5){
            echo "Calentito totalis!";
        }elseif ($numdado>$numaleatorio){
            echo "El número es menor";
        }else {
            echo "El número es mayor";
        }
        echo '<form method="post"><label type="name" class="form-label">Elige un número entre 1 y 100</label> <input type="name" class="form-control input-small" id="numdado" name="numdado" aria-describedby="Numero dado"</form>';
        echo '<form method="post"><button type="submit">¿He ganado?</button></form>';
    }
        
        




    ?>
    

</body>


      
    
    
  

</html>