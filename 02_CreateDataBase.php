<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CrearBaseDeDatos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
    <body>

    <?php 

        require ('00_Configuracion.php');

        $sql= 'CREATE DATABASE bdunad2023_25';
       
         if (mysqli_query($conn, $sql))
         {
    ?> 
           <!-- Window Modal -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- head modal -->
                    <div class="modal-header">
                        <h4 class="modal-title">Proceso Ejecutado</h4>
                        <button class="close" onclick="location.href='../administradorAlt.html'">&times;</button>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                        La Base De Datos Fue Creada En El Server.
                    </div>    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-danger" onclick = "location.href='../administradorAlt.html'">Cerrar</button>
                    </div>    
                </div>
            </div>

    <?php
        } else {
    ?> 

            <!-- Window Modal -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- head modal -->
                    <div class = "modal-header">
                        <h4 class = "modal-title">Proceso Terminado</h4>
                        <button class="close" onclick = "location.href='../administradorAlt.html'">&times;</button>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                        La Base De Datos Ya Existe En El Server.
                    </div>    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-danger" onclick="location.href='../administradorAlt.html'">Cerrar</button>
                    </div>    
                </div>
            </div>

    <?php
        } mysqli_close($conn);
    ?>
</body>
</html>











