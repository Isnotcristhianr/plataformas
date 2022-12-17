<?php
    //conexion php
    include "../modelo/coneccion.php";
    $conexion = conectar();

    //toma de datos
    $sql = "SELECT * FROM estudiantes;";
    $query = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($query);

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
    <link rel="stylesheet" href="../vista/source/estilos/styles.css">
    <!--IconWeb-->
    <link rel="stylesheet" href="../vista/source/icons/course-certificate.png">
</head>

<body>
    <div class="text-center mt-4 text-secondary">

        <div class="text-right m-5">
            <!--Sesion Bienvenida php + img perfil-->
            <?php
                
                include "../controlador/controladorLogin.php";

                if(isset($_SESSION["user"])){
                    echo "<h5>Bienvenido: ".$_SESSION["user"]."</h5>";
                }else{
                    header("location: login.php");
                }
                
                
              

                
            ?>

            <form method="POST" action="index.php">
                <input type="submit" class="btn-info" id="cerrar" name="cerrar" value="Cerrar Sesion">

            </form>

            <?php
                if(isset($_POST["cerrar"])){
                    session_destroy();
                  //  die();
                    header("location: login.php");
                }
            ?>

        </div>

        <h2>Directorio de Estudiantes</h2>
        <p>Cristhian Recalde | Orlidan Montesdeoca</p>
    </div>
    <section class="d-flex">

        <article>
            <div class="d-inline-block border card border-primary p-4 m-5" id="contenedor">
                <h3 class="text-center text-primary">Datos</h3>
                <!-- Formulario -->
                <form method="POST" action="../controlador/controladorInsertar.php" enctype="multipart/form-data">
                    <input type="text" name="metodo" value="1" hidden>
                    <div class="mb-3 ">
                        <label class="form-label">Nombre y Apellido</label>
                        <input type="text" class="form-control" name="namefull" placeholder="ingrese el nombre"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cedula (nit)</label>
                        <input type="number" name="cedula" class="form-control" placeholder="ingrese la cedula"
                            required>
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
                        <label class="form-label">Edad (int)</label>
                        <input type="number" name="edad" class="form-control" placeholder="ingrese la edad" required>
                    </div>


                    <!--subir png-->

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto del Alumno</label>
                        <input class="form-control" type="file" name="foto" accept="image/png,image/jpeg" required>
                    </div>


                    <div class="d-grid gap-2 col-12 mx-auto">
                        <button type="submit" class="btn  btn btn-primary mt-3 mb-2" name="enviar">
                            Registrar nuevo Alumno
                        </button>
                    </div>

                </form>
            </div>
        </article>
        <!--VISTA DE LOS ESTUDIANTES-->

        <div class="d-inline-block border card border-primary p-4 m-5 text-primary" id="contenedor">
            <h3>Listado</h3>
            <table class="table responsive" id="tb">
                <thead>
                    <tr>
                        <th id="cedula">Cedula</th>
                        <th id="nombre">Nombre</th>
                        <th id="edad">Edad</th>
                        <th id="genero">Genero</th>
                        <th id="img">Imagen</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        while($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['cedula'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['edad'] ?></td>
                        <td><?php echo $row['genero'] ?></td>
                        <td><img src="../imgs/Almacenados/<?php echo $row['Ruta'] ?>" width="50px"></td>
                        <td>
                            <a href="../controlador/controladorEliminar.php?id=<?php echo $row['idEstudiantes']?>">
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </a>
                        </td>
                        <td>
                            <a href="actualizar.php?id=<?php echo $row['idEstudiantes']?>">
                                <button type="button" class="btn btn-warning">Editar</button>
                            </a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>

                </tbody>
            </table>

        </div>
        </article>
    </section>
                        


   
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!--Bootstrap JS-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!--DataTables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#tb').DataTable();
        $('#tblApi').DataTable();
    });
    </script>


</body>

</html>