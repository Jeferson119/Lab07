<?php
	
	EliminarLibro($_GET['id']);

	function EliminarLibro($id)
	{
		include('con_db.php');
		$sentencia="DELETE FROM biblioteca WHERE Id='".$id."' ";
		$resultado=$conex->query($sentencia);
	}
?>

<script type="text/javascript">
	alert("¡Libro eliminado exitosamente!");
	window.location.href='index.php';
</script>