<?php
$host = "localhost";
$user = "root";
$password = "";
$bd = "JNMOURA";
$connection = mysqli_connect($host, $user, $password, $bd);
if (!$connection) {
    echo "Não foi possível estabelecer uma conexão!" . mysqli_connect_error();
}
