<?php
    require_once('./config/dbconfig.php');
    $db = new operaciones();
    
    if(isset($_GET['D_ID'])){
        
        global $db;
        $ID = $_GET['D_ID'];

        if($db->borrarDatos($ID)){
            
            header("location:mostrar.php");

        }else{
            echo 'Ha habido un error al borrar los datos';
        
        }
       

    }

?>