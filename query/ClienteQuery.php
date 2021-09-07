<?php
    //incluimos clase para la conexion a base  de datos
    require_once ("database/Conexion.php");

    class ClienteQuery {
        //Contamos el nuemro de registros
        public function CountCliente(){
            try {
                $db = Conexion::ConectarDB();
                $count = $db->prepare("SELECT COUNT(*) AS total FROM cliente");
                $count->execute();
                return $count->fetchObject()->total;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        
        //Obtener datos de la base de 
        public function ViewCliente($limit, $offset){
            try {
                $db = Conexion::ConectarDB(); //Objeto de conexion a base de datos
                $select = $db->prepare("SELECT * FROM cliente LIMIT ? OFFSET ?");
                $select->bindValue(1, $limit, PDO::PARAM_INT);
                $select->bindValue(2, $offset, PDO::PARAM_INT);
                $select->execute();
                return $select->fetchAll(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        //Insertar registros en la base de datos
        public function CreateCliente($cliente){
            try {
                $db = Conexion::ConectarDB(); //Objeto de conexion a base de datos
                $insert = $db->prepare("INSERT INTO cliente VALUES(null, ?, ?, ?, ?);");
                $insert->bindValue(1, $cliente["nombre"], PDO::PARAM_STR);
                $insert->bindValue(2, $cliente["apellido"], PDO::PARAM_STR);
                $insert->bindValue(3, $cliente["direccion"], PDO::PARAM_STR);
                $insert->bindValue(4, $cliente["telefono"], PDO::PARAM_STR);
                $insert->execute();
                return true;
            } catch (Exception $e) {
                die($e->getMessage());
                return false;
            }
            return false;
        }
    }
?>