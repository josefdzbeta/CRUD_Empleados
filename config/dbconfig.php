<?php 

    class dbconfig{
        
        public $connection;
        public function db_conexion(){
            $this->connection = mysqli_connect('localhost', 'root', '', 'empresa');
            if(mysqli_connect_error()){
                //Die es una función incluida en Php. Es usada para imprimir un mensaje y salir del script actual de php.
                die("Ha fallado la conexión");
            }
        }
    }

    $db = new dbconfig();
    echo $db->db_conexion()
?>