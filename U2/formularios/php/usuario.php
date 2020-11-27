<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Usuario</title>
        <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/fontawesome.min.css">
        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
echo "Los datos capturados son:";
// echo "Id: ".$_POST['id'];
// echo "Nombre: ".$_POST['nombre'];
?>
    <table class="table table-bordered table-striped" border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">id</td>
                <td><?php echo $_POST['id']; ?></td>
            </tr>
            <tr>
                <td scope="row">Contraseña</td>
                <td><?php echo $_POST['contra']; ?></td>
            </tr>
            <tr>
                <td scope="row">Teléfono</td>
                <td><?php echo $_POST['tel']; ?></td>
            </tr>
            <tr>
                <td scope="row">Correo</td>
                <td><?php echo $_POST['email']; ?></td>
            </tr>
            <tr>
                <td scope="row">notas
                </td>
                <td><?php echo $_POST['notas']; ?></td>
            </tr>
        </tbody>
    </table>
|   </body>
</html>
