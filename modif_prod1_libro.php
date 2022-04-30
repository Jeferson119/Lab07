<?php
  
  $consulta=ConsultarLibro($_GET['id']);

  function ConsultarLibro($id_prod)
  {

    include("con_db.php");
    include("regresar_reg_libro.php");
    $sentencia="SELECT * FROM biblioteca WHERE Id='".$id_prod."' ";
    $resultado=$conex->query($sentencia);
    $filas = $resultado->fetch_assoc();

    return [
      $filas['Titulo'],
      $filas['Autor'],
      $filas['Año'],
      $filas['URL'],
      $filas['Especialidad'],
      $filas['Editorial']
    ];

  }


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Libro</title>
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

  <div id="contenido">
    
    <h1 class="text-center">Modificar Libro</h1>

  	<div id="contenido">
  		
  		<br>
      <form action="modif_prod2_libro.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
        <input type="hidden" name="id" value="<?php echo $_GET['id']?> ">

        <table style="margin: auto; width: 800px; border-collapse;" class = "table table-striped">
          
          <tr>
            <td><h3>Titulo: </h3></td>
            <td><input type="text" id="Titulo" name="Titulo"; value="<?php echo $consulta[0] ?>" ></td>
            <td class="text-center" rowspan = "6"><button name="guardar" class="btn btn-success">Guardar</button></td>
          </tr>
          
          <tr>
            <td><h3>Autor: </h3></td>
            <td><input type="text" id="Autor" name="Autor" value="<?php echo $consulta[1] ?>"></td>
          </tr>

          <tr>
            <td><h3>Año: </h3></td>
            <td><input type="text" id="Año" name="Año" value="<?php echo $consulta[2] ?>"></td>
          </tr>

          <tr>
            <td><h3>URL: </h3></td>
            <td><input type="text" id="URL" name="URL" value="<?php echo $consulta[3] ?>"></td>
          </tr>

          <tr>
            <td><h3>Especialidad: </h3></td>
            <td><input type="text" id="Especialidad" name="Especialidad" value="<?php echo $consulta[4] ?>"></td>
          </tr>

          <tr>
            <td><h3>Editorial: </h3></td>
            <td><input type="text" id="Editorial" name="Editorial" value="<?php echo $consulta[5] ?>"></td>
          </tr>
          
        </table>
      </form>
  	</div>
  	
  </div>

</div>


</body>
</html>