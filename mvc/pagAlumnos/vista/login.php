<?php
    session_start();
    //conexion
    include "../modelo/coneccion.php";
    $conexion = conectar();

    //<!--PHP inicio sesion y enviar index-->
    if(isset($_POST["iniciar"])){
        $usuario = $_POST['usuario'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM tblLogin WHERE user = '".$usuario."' AND pass = '".$pass."';";
        if($query){
            $row = mysqli_fetch_array($query);
            if($row['email'] == $email && $row['password'] == $password){
                $_SESSION['active'] = true;
                $_SESSION['iduser'] = $row['id'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['telefono'] = $row['telefono'];
                $_SESSION['direccion'] = $row['direccion'];
                header('location: sistema/');
            }else{
                $alert = 'El correo o la contraseña son incorrectos';
                session_destroy();
            }
        }
        $row = mysqli_fetch_array($query);
        
        if($row['user'] == $usuario && $row['pass'] == $pass){
            $_SESSION['user'] = $usuario;
            echo "<script> alert('Bienvenido'); </script>";
            header("location: ../vista/index.php");
        }else{
            echo "<script> alert('Usuario o contraseña incorrectos'); </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="../vista/source/estilos/loginStyle.css">
    <!--Bootstrap-->

    <title>Login</title>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Iniciar Sesión </h2>

            <!-- Icon -->
            <div class="fadeIn first">
            </div>

            <!-- Login Form -->
            <form method="POST" action="login.php">
                <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Usuario" required>
                <input type="password" id="pass" class="fadeIn third " name="pass" placeholder="Contraseña" required
                    style="width: 380px; border-style: none; padding: 10px 0 10px 0 ; align-items: center; text-align: center;">
                <input type="submit" class="fadeIn fourth" id="iniciar" name="iniciar" value="Iniciar">
            </form>

            <div id="formFooter">

            </div>

        </div>
    </div>

</body>

</html>