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
    <!--  crea tabla    -->
    <?php 

            require ('01_configuracion.php');

            $CodProd = $_POST['CodProd']; 

            $sqlread  = "Select * From tabla25 where Cod_Prod = $CodProd";
            $resultado = mysqli_query($conn, $sqlread);

            if (mysqli_num_rows($resultado) > 0) {
                 while ($row = mysqli_fetch_assoc($resultado)) {
    ?> 
|           <!-- Window Modal -->
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- head modal -->
                        <div class = "modal-header">
                            <h4 class = "modal-title">Información Producto</h4>
                            <button class="close" onclick = "location.href='../consultaAlt.html'">&times;</button>
                        </div>
                        <!-- body modal -->
                        <div class="modal-body">
                            <?php
                                echo "Código =" . $row["Cod_Prod"]  
                                . "<br> Nombre Producto =" . $row["Nombre_Prod"]   
                                . "<br> Marca =" . $row["Marca_Prod"]   
                                . "<br> Precio =" . $row["Precio_Compra"]   
                                . "<br> Cantidad Producto =" . $row["Cantidad_Prod"] 
                                . "". "<br>";
                           ?>
                        </div>    
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button class="btn btn-danger" onclick="location.href='../consultaAlt.html'">Cerrar</button>
                        </div>    
                    </div>
                </div>
    <?php
                                                                }                                                           
        } else {
    ?> 

            <!-- Window Modal -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- head modal -->
                    <div class = "modal-header">
                        <h4 class = "modal-title">Información Producto</h4>
                        <button class="close" onclick = "location.href='../consultaAlt.html'">&times;</button>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                        El Producto No Existe.
                    </div>    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-danger" onclick="location.href='../consultaAlt.html'">Cerrar</button>
                    </div>    
                </div>
            </div>

    <?php
        } mysqli_close($conn);
    ?>
    </body>
</html>











