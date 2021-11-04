<?php 

    require_once('./config/operaciones_bd.php');

    class dbconfig{

        public $conexion;

        public function __construct()
        {
            //El constructor será automáticamente cargado y la base de datos estará cargada.
            $this->db_conexion();
        }
        public $connection;
        public function db_conexion(){
            $this->connection = mysqli_connect('localhost', 'root', '', 'empresa');
            if(mysqli_connect_error()){
                //Die es una función incluida en Php. Es usada para imprimir un mensaje y salir del script actual de php.
                die("Ha fallado la conexión");
            }
        }
        //Escapa los caracteres especiales de una cadena para usarla en una sentencia SQL, tomando en cuenta el conjunto de caracteres actual de la conexión
        public function comprobar($a){
            $devolver = mysqli_real_escape_string($this ->connection,$a);
            return $devolver;
        }
    }

    
    
?>