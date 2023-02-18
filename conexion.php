<?php
function conectar()
{
    $host = "localhost:33065";
    $user = "root";
    $pass = "";

    $bd = "crud1_php";
    $con = mysqli_connect($host, $user, $pass);
    mysqli_select_db($con, $bd);

    return $con;
}
