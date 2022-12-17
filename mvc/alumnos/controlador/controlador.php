<?php

    include '../modelo/estudiante.php';
    class controller{

       // $objEstudiante;

        public function __construct(){
            $this->objEstudiante = new estudiante();
        }

        public function accionInsertar(){
            $nombre = $_GET["namefull"];
            $cedula = $_GET["cedula"];
            $edad = $_GET["edad"];
            $sexo = $_GET["sexo"];
            $foto = "../rutasImgs/".$_GET["foto"];
            $id;

            //importar modelo
            include "../modelo/estudiante.php";
            
            $objEstudiante = new estudiante();
            $objEstudiante->insertarEst($nombre, $cedula, $edad, $sexo, $foto);

            //redireccionar
            header("location:../vista/insertar.php");
        }

        public function accionselectAll(){
            $datos = $this->objEstudiante -> accionselectAll2();
            $numFilas = $datos -> rowCount();

            echo($numFilas);
        }

        public function accionselectAll2(){
            $query = $this->con->query('SELECT * FROM `estudiantes`;');
            $res = $this-> con -> prepare ($query);
            $res -> execute();
            return $resultado;
        }

    //redirecionar
    //header("Location: ../vistas/index.php");
    }
?>