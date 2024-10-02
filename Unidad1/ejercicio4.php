<!--Realiza un programa que lea las alturas de 5 personas y sus  nombres, en decimal con 3 decimales y
 muestre la altura media media con un decimal redondeando, tambien mostrará el nombre del más alto y 
 su altura sin decimales (nota:Hay que convertir de string a float ya que el formulario sólo recoge string)-->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alturas</title>
 </head>
 <body>
 <form method="get" action="calculadora_de_altura.php">
            <div class="mb-3 mt-4 col-sm-5">
                <label for="persona1" class="form-label">Nombre</label>
                <input type="text" class="form-control input-small" id="persona1" name="persona1" aria-describedby="persona1">

            </div>
</br>
            <div class="mb-3 mt-4 col-sm-5">
                <label for="altura1" class="form-label">Altura</label>
                <input type="text" class="form-control input-small" id="altura1" name="altura1" aria-describedby="altura1">

            </div>
            </br>
            </br>
            </br>
            <div class="mb-3 mt-4 col-sm-5">
                <label for="persona2" class="form-label">Nombre</label>
                <input type="text" class="form-control input-small" id="persona2" name="persona2" aria-describedby="persona2">

            </div>
            </br>
            <div class="mb-3 mt-4 col-sm-5">
                <label for="altura2" class="form-label">Altura</label>
                <input type="text" class="form-control input-small" id="altura2" name="altura2" aria-describedby="altura2">

            </div>
            </br>
            </br>
            </br>

            <div class="mb-3 mt-4 col-sm-5">
                <label for="persona3" class="form-label">Nombre</label>
                <input type="text" class="form-control input-small" id="persona3" name="persona3" aria-describedby="persona3">

            </div>
            </br>
            <div class="mb-3 mt-4 col-sm-5">
                <label for="altura3" class="form-label">Altura</label>
                <input type="text" class="form-control input-small" id="altura3" name="altura3" aria-describedby="altura3">

            </div>
            </br>
            </br>
            </br>

            <div class="mb-3 mt-4 col-sm-5">
                <label for="persona4" class="form-label">Nombre</label>
                <input type="text" class="form-control input-small" id="persona4" name="persona4" aria-describedby="persona4">

            </div>
            </br>
            <div class="mb-3 mt-4 col-sm-5">
                <label for="altura4" class="form-label">Altura</label>
                <input type="text" class="form-control input-small" id="altura4" name="altura4" aria-describedby="altura4">

            </div>
            </br>
            </br>
            </br>

            <div class="mb-3 mt-4 col-sm-5">
                <label for="persona5" class="form-label">Nombre</label>
                <input type="text" class="form-control input-small" id="persona5" name="persona5" aria-describedby="persona5">

            </div>
            </br>

            <div class="mb-3 mt-4 col-sm-5">
                <label for="altura5" class="form-label">Altura</label>
                <input type="text" class="form-control input-small" id="altura5" name="altura5" aria-describedby="altura5">

            </div>
</br>
</br>
</br>
            <button type="submit" class="btn btn-primary">Calcular</button>
</form>           
    
 </body>
 </html>