<?php

    class connection{
        private $server;
        private $database;
        private $user;
        private $password;
        private $connection;

        public function __construct(){
            $this->server = "localhost";
            $this->database = "alumnis";
            $this->user = "root";
            $this->password = "";
            $this->connection =null;
        }

        public function getConeccion(){
            try{
            //pdo
            $this->connection = new PDO("mysql:host=$this->server;dbname=$this->database",$this->user,$this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->connection;
            
            }catch (PDOException $ex){
                echo "Error en la conexion: " . $ex->getMessage();
            }
        }

    }

?>