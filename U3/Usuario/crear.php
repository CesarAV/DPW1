<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <title>Usuario</title>
    <?php
            // elementos comunes del cuerpo 
            include('../head-interno.html');
        ?>
        <script>
            function validar(){
                // Nombre debe ser texto
                let ctrlNombre = document.getElementById('nombre');
                if(!validarTexto(ctrlNombre)){
                    return false;
                }
                // Telefono debe ser numerico
                let ctrlTel = document.getElementById('tel');
                if(!validarEntero(ctrlTel)){
                    return false;
                }
            }

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
        ?>
        <section>
            <h3>Usuario</h3>
            <div class="container">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                        <div class="col-sm-8"><h2>Agregar <b>Usuario</b></h2></div>
                        <div class="col-sm-4">
                            <a href="/index.php" class="btn btn-info add-new"><i class="fas fa-arrow-left"></i> Regresar</a>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <form method="post" onsubmit="return validar();">
                        <div class="col-md-12">
                            <label onclick="mostrarAyuda('nombre');">Nombre completo:</label>
                            <input type="text" name="nombre" id="nombre"
                                class='form-control' maxlength="100" required>
                        </div>

                        <div class="col-md-12">
                            <label onclick="mostrarAyuda('contra');">Contraseña:</label>
                            <input type="password" name="contra" id="contra"
                                class='form-control' maxlength="100" required 
                                placeholder="contraseña">
                        </div>

                        <div class="col-md-12">
                            <label onclick="mostrarAyuda('tel');">Teléfono:</label>
                            <input type="text" name="tel" id="tel"
                                class='form-control' maxlength="10" required>
                                <!-- placeholder="###-###-####" -->
                        </div>

                        <div class="col-md-12">
                            <label>Correo electrónico:</label>
                             <input type="email" name="email" id="email"
                              class='form-control' maxlength="30" >
                        </div>
            
                        <div class="col-md-12">
                            <label>Notas:</label><br/>
                            <textarea name="notas" id="notas" class='formcontrol' maxlength="255" cols="40" rows="5">                                
                            </textarea>
                        </div>

                        <div class="col-md-12 pull-right">
                            <button type="submit" class="btn btn-success">
                                Guardar datos
                            </button>
                        </div>
                        </form>
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