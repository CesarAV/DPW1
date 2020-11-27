<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">        
    </head>
    <body>
        <?php
echo "Los datos capturados para donación son:";
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
                <td scope="row">Alimento</td>
                <td><?php echo $_POST['alimento']; ?></td>
            </tr>
            <tr>
                <td scope="row">Cantidad</td>
                <td><?php echo $_POST['cant']; ?></td>
            </tr>
            <tr>
                <td scope="row">Fecha de caducidad</td>
                <td><?php echo $_POST['fecha-caducidad']; ?></td>
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