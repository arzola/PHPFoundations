<!doctype html>
<?php
/**
 * 1.- Crear un array multidimensional de 5 personas [nombre,apellido,telefono,twitter]
 * 2.- Recorrerlo para imprimirlo en una tabla
 * 3.- Agregar un formulario para buscar en la misma pagina dentro del array en cualquiera  de los campos del array
 * 4.- Convertir a un usuario en admin agregando el indice rol con valor "admin" y filtrarlo si en la URL viene &admin=true
 * 
 */
?>
<html> 
    <head>
        <title>Embed code Style Contacts</title> 
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </head>
    <body> 
        <div class="container">
            <p class="well">
                Contactos <?php echo 'Cool'; ?>
            </p> 
            <table class="table">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Twitter</th>
                </tr>
            </table>
        </div>
    </body>
</html>