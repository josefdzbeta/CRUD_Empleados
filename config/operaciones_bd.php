<?php

    require_once('./config/dbconfig.php');

    $db = new dbconfig();

    class operaciones extends dbconfig{

        public function guardarDatos(){

            //Para hacer referencia a variable de ámbito global
            global $db;
            if(isset($_POST['guardar'])){

                $DNI = $db->comprobar($_POST['DNI']);
                $Nombre = $db->comprobar($_POST['Nombre']);
                $Correo = $db->comprobar($_POST['Correo']);
                $Telefono = $db->comprobar($_POST['Telefono']);

                if($this->introducirDatos($DNI, $Nombre, $Correo, $Telefono)){
                    echo '<div class="alert alert-success">Los datos han sido guardados </div>';
                }else{
                    echo '<div class="alert alert-danger">Error al guardar los datos </div>';
                }
            }    
        }
        //Insertar datos en la base de datos utilizando Query
        function introducirDatos($a,$b,$c,$d){
            global $db;
            $query = "INSERT INTO empleados (DNI, Nombre, Correo, Telefono) VALUES ('$a','$b','$c','$d')";
            $resultado = mysqli_query($db->connection,$query);

            if($resultado){
                return true;
            }else{
                return false;
        }
    }
}