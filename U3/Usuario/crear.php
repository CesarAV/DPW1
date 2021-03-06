<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <title>Usuario</title>
        <?php
            // elementos comunes del cuerpo 
            include('../head-interno.html');
        ?>
        <script>
            function mostrarAyuda(campo){
                let texto;
                switch(campo){
                    case 'nombre':
                        texto = 'Campo para el nombre del usuario, puede ser una empresa';
                        break;
                    case 'tel':
                        texto = 'Campo para el teléfono de contacto, capture los 10 dígitos numéricos';
                        break;
                    default:
                        throw(`Incluir ayuda para el campo '${campo}'`);
                }
                if(texto){
                    alert(texto);
                }
            }
        </script>
    </head>
    <body>        
        <?php
            // elementos comunes del cuerpo 
            include('../header.html');
            include('../menu.php');
            include("../database.php");

            $usuario = new Database();
            if(isset($_POST) && !empty($_POST)){
                $nombre = $usuario->sanitize($_POST['nombre']);
                $contra = $_POST['contra'];
                $tel = $_POST['tel'];
                $email = $usuario->sanitize($_POST['email']);;
                $notas = $usuario->sanitize($_POST['notas']);;

                $res = $usuario->crearUsuario($nombre, 
                    $contra,
                    $tel,
                    $email,
                    $notas);

                    if($res){
                        $message= "Datos insertados con éxito";
                        $class="alert alert-success";
                    }else{
                        $message="No se pudieron insertar los datos";
                        $class="alert alert-danger";
                    }
            ?>
            <div class="<?php echo $class?>">
                <?php echo $message;?>
            </div>
            <?php
                }
            ?>
        <section>
            <div class="container">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                        <div class="col-sm-8"><h2>Nuevo <b>Usuario</b></h2></div>
                        <div class="col-sm-4">
                            <a href="usuario.php" class="btn btn-info add-new"><i class="fas fa-arrow-left"></i> Regresar</a>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                    <?php
                        $id = 0;
                        $nombre = "";
                        $contra = "";
                        $tel = "";
                        $email = "";
                        $notas = "";
                        // Forma común de edicion
                        include('form-usuario.php');
                    ?>
                    </div>
                </div>
            </div>
       </section>
        <?php
            // elementos comunes del cuerpo 
            include('../footer.html');
        ?>
    </body>
</html>