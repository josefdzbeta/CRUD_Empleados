<?php
    require_once('./config/dbconfig.php');
    $db = new operaciones();
    $db->actualizar();
    $id = $_GET['U_IdEmpleado'];
    $resultado = $db->editarDatos($id);
    $datos = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>Operaciones CRUD Orientado a Objetos</title>
    </head>
    <body class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2>Actualizar Datos</h2>
                        </div>
                            <?php $db->guardarDatos(); ?>
                            <div class="card-body">
                                <form method="POST">
                                    <input type="hidden" name="id" value="<?php $datos['id']; ?>" >
                                    <input type="text" name="DNI" placeholder="DNI" pattern="[0-9]{8}[A-Za-z]{1}" class="form-control mb-2" required value="<?php echo $datos['DNI']; ?>">
                                    <input type="text" name="Nombre" placeholder="Nombre" class="form-control mb-2" required value="<?php echo $datos['Nombre']; ?>">
                                    <input type="email" name="Correo" placeholder="Correo" class="form-control mb-2" required value="<?php echo $datos['Correo']; ?>">
                                    <input type="tel" name="Telefono" placeholder="Telefono"  pattern="[0-9]{9}" class="form-control mb-2" required value="<?php echo $datos['Telefono']; ?>">
                            </div>
                        <div class="card-footer">
                            <button class="btn btn-success" name="actualizar">Actualizar</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>

