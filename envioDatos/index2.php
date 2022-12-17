<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>Hola index</h1>
    <div style="width:300px;">
        <table border="2" class="table table-dark table-striped-columns">
            <tr>
                <td>Num</td>
                <td>Valor</td>
            </tr>
            <?php
                for($i=0; $i<=10;$i++){
                    echo "<tr>";
                    echo "<td>num</td>";
                    echo "<td> : $i</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
    <h3>Envio de Informacion + Capturar</h3>
    <div style="width: 150px; margin:20px;" class="bg-primary rounded">
        <!--Calculadora-->
        <form class="p-3 border" action="index2.php" method="POST">
            <div class="form-group">
                <label for="num1">Numero 1</label>
                <input required type="text" class="form-control" id="num1" name="txtNum1" placeholder="Ingrese Numero 1" >
            </div>
            <div class="form-group">
                <label for="num2">Numero 2</label>
                <input required type="text" class="form-control" id="num2" name="txtNum2" placeholder="Ingrese Numero 2" >
            </div>
            <input type="submit" class="btn btn-ligth" value="enviar" name="btnEnviar">
        </form> 
       </div>

       <!--PHP CAPTURAR-->
       <?php

       //invlocar clase
       //include-> si no encuentra el archivo, sigue ejecutando el codigo
        //require-> si no encuentra el archivo, no ejecuta el codigo
        include_once("operaciones.php");

        //control notice
        if(isset($_POST['btnEnviar'])){

            if(isset($_POST['txtNum1']) && isset($_POST['txtNum2'])){
                //operacion sumar
                $num1 = $_POST['txtNum1'];
                $num2 = $_POST['txtNum2'];
                $objOperacion = new operaciones($num1, $num2);
                echo "La suma es: ".$objOperacion->suma();

            }else{
                echo "No se ha enviado informacion";
            }
        }
           
        
       ?>
</body>
</html>