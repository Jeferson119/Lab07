<?php
        include("registrar_libro.php")
?>

<?php
        include("regresar_reg_libro.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Libro</title>
    <link rel="stylesheet" type = "text/css" href="css/estilo.css">
</head>
<body>

    <form action="reg_libro.php" method="post">

        <h1>Registra un Libro</h1>
        <input type="text" name = "Titulo" placeholder = "Titulo">
        <input type="text" name = "Autor" placeholder = "Autor">
        <input type="number" name = "Año" placeholder = "Año">
        <input type="text" name = "URL" placeholder = "URL">
        <input type="text" name = "Especialidad" placeholder = "Especialidad">
        <input type="text" name = "Editorial" placeholder = "Editorial">
        <input type="submit" name = "register">
        <br><br>
        <button name = "regresar">Regresar</button>
        
    </form>
    
</body>
</html>