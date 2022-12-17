<?php

    //importar bdd
    include "coneccion.php";

    class estudiante{
       // private $idEstudiante;
        private $cedula;
        private $nombre;
        private $edad;
        private $genero;
        private $destino;

        //obj conexion bdd
        private $con="";

        //costructor
        public function __construct(){

            //obj conexion bdd
            $obj = new connection();
            $this->con=$obj->getConeccion();
        }

        //insertar
        public function insertarEst( $nombre,$cedula, $edad, $genero, $foto){

            $this->nombre = $nombre;
            $this->cedula = $cedula;
            $this->edad = $edad;
            $this->genero = $genero;
            $this->foto = $foto;
            
            $sql="INSERT INTO estudiantes 
            (idEstudiante, nombre, cedula , edad, genero, img) 
            VALUES (null, '$this->nombre', '$this->cedula', '$this->edad', '$this->genero', '$foto')";
            
            //preparar sql
            $sql=$this->con->prepare($sql);
            //ejecutar sql
            $sql->execute();

            echo "Estudiante insertado";
        }

        //mostrar
        public function mostrarEst(){
            $sql="SELECT * FROM estudiantes";
            //preparar sql
            $sql=$this->con->prepare($sql);
            //ejecutar sql
            $sql->execute();

            echo ("vista generada");	
            //recorrer datos
            while($row=$sql->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>";
                echo "<td>".$row["cedula"]."</td>";
                echo "<td>".$row["nombre"]."</td>";
                echo "<td>".$row["edad"]."</td>";
                echo "<td>".$row["genero"]."</td>";
                //boton input
                echo "<td><input type='button' value='🖊' onclick='editarEst(".$row["idEstudiante"].")' class='btn btn-info'></td>";
                echo "<td><input type='button' value='✔' onclick='actualizarEstId(".$row["idEstudiante"].")' class='btn btn-success'></td>";
                echo "<td><input type='button' value='x' onclick='eliminarEst(".$row["idEstudiante"].")' class='btn btn-danger'></td>";
                echo "</tr>";
            }
        }

        //eliminar
        public function eliminarEst($id){
            $this->idEstudiante = $id;

            $sql="DELETE FROM estudiantes WHERE idEstudiante = '$this->idEstudiante'";
            //preparar sql
            $sql=$this->con->prepare($sql);
            //ejecutar sql
            $sql->execute();

            echo "Estudiante eliminado";
        }

        //editar
        public function editarEst($id){
            $this->idEstudiante = $id;

            $sql="SELECT * FROM estudiantes WHERE idEstudiante = '$this->idEstudiante'";
            //preparar sql
            $sql=$this->con->prepare($sql);
            //ejecutar sql
            $sql->execute();

            //recorrer datos
            while($row=$sql->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>";
                echo "<td><input type='text' value='".$row["cedula"]."' id='cedula'></td>";
                echo "<td><input type='text' value='".$row["nombre"]."' id='nombre'></td>";
                echo "<td><input type='text' value='".$row["edad"]."' id='edad'></td>";
                echo "<td><input type='text' value='".$row["genero"]."' id='genero'></td>";
                //boton input
                echo "<td><input type='button' value='🖊' onclick='editarEst(".$row["idEstudiante"].")' class='btn btn-info'></td>";
                echo "<td><input type='button' value='✔' onclick='actualizarEstId(".$row["idEstudiante"].")' class='btn btn-success'></td>";
                echo "<td><input type='button' value='x' onclick='eliminarEst(".$row["idEstudiante"].")' class='btn btn-danger'></td>";
                echo "</tr>";
            }
        }

        //actualizar
        public function actualizarEst($id){
            $this->idEstudiante = $id;
            $this->nombre = $nombre;
            $this->cedula = $cedula;
            $this->edad = $edad;
            $this->genero = $genero;

            $sql="UPDATE estudiantes SET
            nombre='$this->nombre', cedula='$this->cedula', edad='$this->edad', genero='$this->genero'
            WHERE idEstudiante = '$this->id;'";
            //preparar sql
            $sql=$this->con->prepare($sql);
            //ejecutar sql
            $sql->execute();
        }

        //select
        public function selectEstAll(){

            $query = $this->con->query('SELECT * FROM `estudiantes`;');
            $resultado = [];
            $i=0;
            while($fila = $query->fetchObject()){
                $resultado[$i] = $fila;
                $i++;
            }
            return $resultado;
            
        }

        public function selectEstAll2(){

            $query = $this->con->query("SELECT * FROM estudiantes ;");
            $res = $this-> con -> prepare ($query);
            $res = $query -> execute();
            return $resultado;
        }

    }
?>