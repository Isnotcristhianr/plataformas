<?php

    $url ="http://salazar2022.orgfree.com/servicios/api.php";
    $json = file_get_contents($url);

    $datos = json_decode($json, true);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naty php</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="../vista/source/estilos/styles.css">
</head>
<body>

<h3> Reporte de Informacion</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Cedula</th>
                <th>Edad</th>
                <th>Genero</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datos as $dato): ?>
            <tr>
                <td><?php echo $dato['idEstudiante']; ?></td>
                <td><?php echo $dato['nombre']; ?></td>
                <td><?php echo $dato['cedula']; ?></td>
                <td><?php echo $dato['edad']; ?></td>
                <td><?php echo $dato['genero']; ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
    
</body>
</html>