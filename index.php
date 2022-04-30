<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inventario de Libros</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
  <div class="todo">



          <br><br><br>

    <h1 class="text-center">Lista De Libros</h1>
    <br>
    
    <div id="contenido">
      <table style="margin: auto; width: 800px; border-collapse;" class = "table table-striped">
        <thead>
          <th><center>Titulo</center></th>
          <th><center>Autor</center></th>
          <th><center>Año</center></th>
          <th><center>URL</center></th>
          <th><center>Especialidad</center></th>
          <th><center>Editorial</center></th>
          <th colspan="3" class="text-center"> <a href="reg_libro.php"> <button type="button" >Registrar Libro</button> </a> </th>
        </thead>
        <tbody>
          <?php
          include("con_db.php");
          $sentencia="SELECT * FROM biblioteca";
          $resultado=$conex->query($sentencia);
          while($filas = $resultado->fetch_assoc())
          {
            
            echo "<tr>";
              echo "<td>"; echo $filas['Titulo']; echo "</td>";
              echo "<td>"; echo $filas['Autor']; echo "</td>";
              echo "<td>"; echo $filas['Año']; echo "</td>";
              echo "<td><a href='"; echo $filas['URL']; echo "'><button type='submit'>Leer Libro</button></a></td>";
              echo "<td>"; echo $filas['Especialidad']; echo "</td>";
              echo "<td>"; echo $filas['Editorial']; echo "</td>";
              echo "<td>  <a href='modif_prod1_libro.php?id=".$filas['Id']."'> <button type='button'>Modificar</button> </a> </td>";
              echo "<td> <a href='eliminar_libro.php?id=".$filas["Id"]."''><button type='button' >Eliminar</button></a> </td>";
            echo "</tr>";
          }

          ?>
        </tbody>
      </table>

      <br>
      <div class="text text-center">

        <a href="index.html"><button class="btn btn-outline-dark" type="button">  Exit</button></a>

      </div>

    </div>

  </div>

</body>
</html>