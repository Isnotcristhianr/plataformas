<?php
    /*
    //conexion.php
   // include "../modelo/coneccion.php";

    //insertar estudiante
    include "../modelo/estudiante.php";
    $est = new estudiante("1002003002", "test", 20, "Masculino");

    $est->insertarEst();
    */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="stylesIndex.css">
</head>

<body>

    <section class="d-flex">
        <article>
            <div class="d-inline-block border card border-primary p-4 m-5">
                <h3 class="text-center">Datos del Alumno</h3>
                <form method="GET" action="../controlador/controlador.php" enctype="multipart/form-data">
                    <input type="text" name="metodo" value="1" hidden>
                    <div class="mb-3 ">
                        <label class="form-label">Nombre y Apellido</label>
                        <input type="text" class="form-control" name="namefull" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cedula (nit)</label>
                        <input type="number" name="cedula" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="Sexo">Sexo del Alumno</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" value="M" checked>
                            <label class="form-check-label" for="sexoM">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" value="F">
                            <label class="form-check-label" for="sexoF">
                                Fememino
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad (nit)</label>
                        <input type="number" name="edad" class="form-control" required>
                    </div>


                    <!--subir png-->

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto del Alumno</label>
                        <input class="form-control" type="file" name="foto" accept="image/png,image/jpeg">
                    </div>


                    <div class="d-grid gap-2 col-12 mx-auto">
                        <button type="submit" class="btn  btn btn-primary mt-3 mb-2" name="enviar">
                            Registrar nuevo Alumno
                            <i class="bi bi-arrow-right-circle"></i>
                        </button>
                    </div>

                </form>
            </div>
        </article>
        <article>
            <!--VISTA DE LOS ESTUDIANTES-->

            <div class="d-inline-block border card border-primary p-4 m-5">
                <h3>Lista de Alumnos</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th id="cedula">Cedula</th>
                            <th id="nombre">Nombre</th>
                            <th id="edad">Edad</th>
                            <th id="genero">Genero</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../controlador/controlador.php";
                        $objControlador = new controller();
                        $objControlador->accionselectAll();

                        $datos = $objControlador->accionselectAll();

                        if($datos.rowCount>0){
                            $estudiantes = array();
                            while($row = $datos->fetch(PDO::FETCH_ASSOC)){
                          	
                            }
                        }


                        ?>

                    </tbody>
                </table>

            </div>
        </article>
    </section>

</body>

</html>