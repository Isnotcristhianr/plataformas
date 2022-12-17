<?php

session_start();

include_once "../modelo/coneccion.php";
$conexion = conectar();
    
        if(isset($_POST["iniciar"])){
            
            
            $usuario = $_POST['usuario'];
            $pass = $_POST['pass'];
            


            $sql = "SELECT * FROM tblLogin WHERE user = '".$usuario."' AND pass = '".$pass."'";


            $query = mysqli_query($conexion, $sql);
            $row = mysqli_fetch_array($query);

            
            if($row['user'] == $usuario && $row['pass'] == $pass){
                $_SESSION['user'] = $usuario;
                header("location: ../vista/index.php");
                
            }else{
                
                header("location: ../vista/login.php");
                echo "<script>alert('Error al iniciar sesion');</script>";
            }
            
            
            
        }

    ?>