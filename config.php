<?php

$host = 'http://localhost/aulas/crud_php;'

$db_name = 'crud';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

try {
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
    throw $th;
    

}




?>