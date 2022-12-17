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
                <form method="POST" action="../controlador/controladorLogin.php">
                    <input type="text" class="fadeIn second" name="usuario" placeholder="Usuario" required>
                    <input type="password" class="fadeIn third " name="pass" placeholder="Contraseña" required
                        style="background-color: #f6f6f6;
                                border: none;
                                color: #0d0d0d;
                                padding: 15px 32px;
                                text-align: center;
                                text-decoration: none;
                                display: inline-block;
                                font-size: 16px;
                                margin: 5px;
                                width: 85%;
                                border: 2px solid #f6f6f6;
                                -webkit-transition: all 0.5s ease-in-out;
                                -moz-transition: all 0.5s ease-in-out;
                                -ms-transition: all 0.5s ease-in-out;
                                -o-transition: all 0.5s ease-in-out;
                                transition: all 0.5s ease-in-out;
                                -webkit-border-radius: 5px 5px 5px 5px;
                                border-radius: 5px 5px 5px 5px;">
                    <input type="submit" class="fadeIn fourth" id="iniciar" name="iniciar" value="Iniciar">
                </form>


            </div>
        </div>

        <!--PHP-->
        

    </body>

    </html>