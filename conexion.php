<?php
function conexion() {
    $host = "dpg-cr6g03bv2p9s7392u6s0-a";
    $port = "5432"; // No es necesario poner "port=" dentro de la variable
    $dbname = "dbprueba_hydx"; // Similarmente, sólo el nombre de la base de datos
    $user = "dbprueba_hydx_user"; // Solo el usuario
    $password = "sXiVp5XxNE8xMMKvqg7THkLpun3gD5v4"; // Solo la contraseña

    // Crear la cadena de conexión correcta
    $connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password";
    
    $db = pg_connect($connection_string);

    if (!$db) {
        echo "Error: No se pudo conectar a la base de datos.\n";
    } else {
        echo "Conexión exitosa.\n";
    }

    return $db;
}
?>
