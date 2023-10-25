<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>createdatabase</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    </head>
<body>
    <?php 

            require('01_Configuracion.php');

        $CodProd = $_POST['CodProd'];
        $NomProd = $_POST['NomProd'];
        $MarcaProd = $_POST['MarcaProd'];
        $PrecioProd = $_POST['PrecioProd'];
        $CantidadProd = $_POST['CantidadProd'];

            $sqlinsert = "INSERT INTO tabla25 (Cod_Prod,Nombre_Prod,Marca_Prod,Precio_Compra,Cantidad_Prod)
                        Values('$CodProd','$NomProd','$MarcaProd','$PrecioProd','$CantidadProd')";

            if (mysqli_query($conn, $sqlinsert)) {

    ?> 
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- head modal -->
                        <div class = "modal-header">
                            <h4 class = "modal-title">Inserción Completada</h4>
                            <button class="close" onclick = "location.href='../ingresoAlt.html'">&times;</button>
                        </div>
                        <!-- body modal -->
                        <div class="modal-body">
                            Los Datos Fueron Almacenados Correctamente
                        </div>    
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button class="btn btn-danger" onclick="location.href='../ingresoAlt.html'">Cerrar</button>
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
                        <h4 class = "modal-title">Inserción Terminada</h4>
                        <button class="close" onclick = "location.href='../ingresoAlt.html'">&times;</button>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                        La Datos Del Producto Ya Existen!...
                    </div>    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-danger" onclick="location.href='../ingresoAlt.html'">Cerrar</button>
                    </div>    
                </div>
            </div>
    <?php
        } mysqli_close($conn);
    ?>
</body>
</html>











