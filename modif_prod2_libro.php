<?php
	
    ModificarLibro($_POST['Titulo'], $_POST['Autor'], $_POST['Año'], $_POST['URL'], $_POST['Especialidad'], $_POST['Editorial'], $_POST['id']);

	function ModificarLibro($Titulo, $Autor, $Año, $URL, $Especialidad, $Editorial, $id)
	{
        include("con_db.php");
		$sentencia="UPDATE biblioteca SET Titulo='".$Titulo."', Autor= '".$Autor."', Año='".$Año."', URL='".$URL."', Especialidad= '".$Especialidad."', Editorial='".$Editorial."' WHERE Id='".$id."' ";
		
        $resultado=$conex->query($sentencia);
	}
?>

<script type="text/javascript">
	alert("¡Libro modificado exitosamente!");
	window.location.href='index.php';
</script>