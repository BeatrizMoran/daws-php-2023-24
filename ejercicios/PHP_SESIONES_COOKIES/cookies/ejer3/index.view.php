<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer02</title>
</head>
<body>
    <h1>Ejercicio 02</h1>
    <p><b>Enunciado: </b><br> Crea una página que tenga un select con dos opciones: “Euskera” y “Castellano”. La
aplicación guardará el valor indicado en una cookie de nombre “idioma” (tendrá 1 minuto de
duración) y mostrará el último valor almacenado siempre que la cookie contenga algún valor
 </p>
   


<h2><?=
     "IDIOMA: " . $ultimo_idioma; 
?>
</h2>
<form action="index.php" method="post">
   <label>Elige tu idioma:</label>
    <select name="idioma">
        <option value="Castellano">Castellano</option>
        <option value="Euskera">Euskera</option>
    </select><br>
    <input type="submit" value="Guardar">
</form>

</body>
</html>