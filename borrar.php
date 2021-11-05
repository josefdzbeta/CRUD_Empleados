<?php
    require_once('./config/dbconfig.php');
    $db = new operaciones();
    
    if(isset($_GET['D_ID'])){
        
        global $db;
        $ID = $_GET['D_ID'];

        if($db->borrarDatos($ID)){

            echo '<div class="alert alert-danger">Has borrado los datos del empleado</div>';
            header("location:mostrar.php");

        }else{
            echo '<div class="alert alert-danger">Ha habido un error al borrar los datos </div>';
        
        }
       

    }

?>