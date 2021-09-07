<?php
    //incluimos las consultas
    require_once ("query/ClienteQuery.php");
    class ClienteController {
        //Constructor
        private $query;

        public function ClienteController() {
            $this->query = new ClienteQuery(); //Intanciamos un objeto de la clase ClienteQuery
        }

        //esta funcion nos permite enviar informacion sobre la 
        //pagina actual y el numero de paginas de la paginacion de regitros
        private function PaginationPages($paginas, $pagina){
            $_REQUEST["paginas"] = $paginas;
            $_REQUEST["pagina"] = $pagina;
        }

        public function ShowCliente() {
            $clientePorPagina = 7;
            $pagina = 1;

            if (isset($_GET["pagina"])) {
                $pagina = $_GET["pagina"];
            }

            $limit = $clientePorPagina; //limine de clientes por pagina
            $offset = ($pagina - 1) * $clientePorPagina; //numero de saltos de registros
            $conteo = $this->query->CountCliente(); //numero de registro de la tabla cliente
            $paginas = ceil($conteo/$clientePorPagina); //numero de paginas

            $clientes = $this->query->ViewCliente($limit, $offset);
            $this->MostrarFilasClientes($clientes);
            $this->PaginationPages($paginas, $pagina);
        }

        private function MostrarFilasClientes($clientes)
        {
            foreach($clientes as $cliente){
                echo "<tr>\n";
                echo "<th>$cliente->id_cliente</th>\n";
                echo "<td>$cliente->nombre</td>\n";
                echo "<td>$cliente->apellido</td>\n";
                echo "<td>$cliente->direccion</td>\n";
                echo "<td>$cliente->telefono</td>\n";
                echo "</tr>\n";
            }
        }

        public function SaveCliente(){
            //Recibimos los datos del formulario y guardamos en array
            $cliente = array(
                "nombre" => $_POST["nombre"],
                "apellido" => $_POST["apellido"],
                "direccion" => $_POST["direccion"],
                "telefono" => $_POST["telefono"] 
            );
            
            if ($this->query->CreateCliente($cliente) == true) {
                echo "<script>alert('El registro se realizo exitosamente')</script>";
            }else {
                echo "<script>alert('Error al registrar')</script>";
            }
            header("Location: index.htm");
        }
    }
?>