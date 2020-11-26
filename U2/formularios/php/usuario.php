<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
echo "Los datos capturados son:";
// echo "Id: ".$_POST['id'];
// echo "Nombre: ".$_POST['nombre'];
?>
    <table border="1">
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
