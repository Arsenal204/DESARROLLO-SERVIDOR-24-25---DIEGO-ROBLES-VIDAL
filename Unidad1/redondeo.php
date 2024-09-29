<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redondeo</title>
</head>
<body>
<?php
    print("Esto es lo que me llega por Get <br/>");
    
    print round("$_GET[numero1]"). "<br/>". round("$_GET[numero2]",1, PHP_ROUND_HALF_UP);
    ?>
</body>
</html>