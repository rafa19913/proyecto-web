<?php
# @uthor armando_rdz, at 08/04/20

    // Se reciben los datos desde js/functions.js para agregar una nueva consola
    require '../db/Database.php';
    $db = new Database;
    $connection = $db -> connect(); # funcion para conectarse a la BD

    $pl = $_POST['plataforma'];
    $num = $_POST['numero'];
    $se = $_POST['serial'];

    $sql = "INSERT INTO consolas(numero, serial, id_plataforma) 
            VALUES('$num', '$se','$pl')";
    echo $result = mysqli_query($connection, $sql);