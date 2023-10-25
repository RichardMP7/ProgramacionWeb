<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CrearTabla</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
    <body>

    <?php 
            require ('01_Configuracion.php');    

            $sql = "CREATE TABLE tabla25(
                Cod_Prod int PRIMARY KEY,
                Nombre_Prod varchar(60),
                Marca_Prod varchar(30),
                Precio_Compra Decimal (10,3),
                Cantidad_Prod int
            )";

         if (mysqli_query($conn, $sql))
         {
    ?> 
           <!-- Window Modal -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- head modal -->
                    <div class="modal-header">
                        <h4 class="modal-title">Crear Tabla</h4>
                        <button class="close" onclick="location.href='../administradorAlt.html'">&times;</button>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                         La Tabla Fue Creada En La BBDD.
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
                        <h4 class = "modal-title">Crear Tabla</h4>
                        <button class="close" onclick = "location.href='../administradorAlt.html'">&times;</button>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                          La Tabla Ya Existe En La BBDD.
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
