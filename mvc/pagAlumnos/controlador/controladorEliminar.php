<?php
    
    //conexion
    include "../modelo/coneccion.php";
    $conexion = conectar();

    //tomar id
    $id = $_GET['id'];

    //eliminar
    $sql = "DELETE FROM tblestudiantes WHERE isEstudiante = $id;";
    $query = mysqli_query($conexion, $sql);

    if($query){
        header("location: ../vista/index.php");
    }else{
        echo "<script>alert('Error al eliminar');</script>";
    }
?>