<?php

$dblocation = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "harsha";

$conn = mysqli_connect($dblocation,$dbuser,$dbpass,$dbname);

if(!$conn){
    echo mysqli_connect_error();
}




?>