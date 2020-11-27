<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <title>Usuario</title>
    <?php
            // elementos comunes del cuerpo 
            include('../head-interno.html');
        ?>
    </head>
    <body>        
        <?php
            // elementos comunes del cuerpo 
            include('../header.html');
            include('../menu.php');
        ?>
        <section>
            <h3>Usuario</h3>
            <div class="container">
                <div class="table-wrapper">
                    <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Listado de <b>Usuarios</b></h2></div>
                        <div class="col-sm-4">
                        <a href="crear.php" class="btn btn-info add-new"><i class="fas fa-user-plus"></i> Agregar usuario</a>
                        </div>
                    </div>
                    </div>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>
                    </table>
                </div>
            </div>
       </section>
        <?php
            // elementos comunes del cuerpo 
            include('../footer.html');
        ?>
    </body>
</html>