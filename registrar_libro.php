<?php

    include('con_db.php');

    if (isset($_POST['register'])){

        if 
            (strlen($_POST['Titulo']) >= 1 &&
            strlen($_POST['Autor']) >= 1 &&
            strlen($_POST['Año']) >= 1 &&
            strlen($_POST['URL']) >= 1 &&
            strlen($_POST['Especialidad']) >= 1 &&
            strlen($_POST['Editorial']) >= 1){

                $Titulo = trim($_POST['Titulo']);
                $Autor = trim($_POST['Autor']);
                $Año = trim($_POST['Año']);
                $URL = ($_POST['URL']);
                $Especialidad = trim($_POST['Especialidad']);
                $Editorial = trim($_POST['Editorial']);
                $consulta = "INSERT INTO biblioteca(Titulo, Autor, Año, URL, Especialidad, Editorial) VALUES ('$Titulo','$Autor','$Año','$URL','$Especialidad','$Editorial')";
                $resultado = mysqli_query($conex, $consulta);
                if ($resultado){

                    ?>

                        <script type="text/javascript">
	                        alert("¡Libro añadido exitosamente!");
	                        window.location.href='index.php';
                        </script>

                    <?php

                } else{

                    ?>

                        <h2 class = "bad">¡Ha ocurrido un error!</h2>

                    <?php

                }

        } else {

            ?>

                <h2 class = "bad">Por favor, complete los campos correctamente.</h2>

            <?php

        }

    }

?>