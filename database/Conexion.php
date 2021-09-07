<?php 
    //Creando clase para la conexión
    class Conexion {
        public static function ConectarDB(){
            $hostname = "localhost";
            $dataBase = "bd_comercial";
            $user = "root";
            $password = "";

            $pdo = new PDO("mysql:host=$hostname;dbname=$dataBase;", $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
    }
?>