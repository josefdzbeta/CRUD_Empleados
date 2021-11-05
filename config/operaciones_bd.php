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
        //Insertar datos en la base de datos 
        function introducirDatos($a,$b,$c,$d){
            global $db;
            $consulta = "INSERT INTO empleados (DNI, Nombre, Correo, Telefono) VALUES ('$a','$b','$c','$d')";
            $resultado = mysqli_query($db->connection,$consulta);

            if($resultado){
                return true;
            }else{
                return false;
            }
        }
        //Ver Datos
        public function mostrarDatos(){

            global $db;
            $consulta = "SELECT * FROM empleados";
            $resultado =  mysqli_query($db->connection, $consulta);
            return $resultado;

        }

        //Conseguir dato específico para poder editar
        public function editarDatos($id){
            global $db;
            $consulta = "SELECT * FROM empleados WHERE ID ='$id' ";
            $resultado = mysqli_query($db->connection,$consulta);
            return $resultado;
        }

        //Actualizar datos
        public function actualizar(){
            global $db;

            if(isset($_POST['Editar'])){
                $ID = $_POST['ID'];
                $DNI = $_POST['dni'];
                $Nombre = $_POST['nombre'];
                $Correo = $_POST['email'];
                $Telefono = $_POST['telefono'];
                

                $consulta = "UPDATE empleados SET DNI = '$DNI', Nombre = '$Nombre', Correo = '$Correo', Telefono='$Telefono' WHERE ID ='$ID';";
                $resultado = mysqli_query($db->connection,$consulta);

                function mensaje(){
                    echo '<div class="alert alert-success">Los datos han sido modificados correctamente </div>';
                }
            }
           

        }
        //Borrar datos
        public function borrarDatos($id){
            global $db;
            $consulta = "DELETE FROM empleados WHERE ID ='$id'; "; 
            $resultado = mysqli_query($db->connection,$consulta);

            if($resultado){
                return true;
            }else{
                return false;
            }

        }
        

    }
?>