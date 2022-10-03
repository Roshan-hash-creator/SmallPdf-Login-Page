<?php
$servername = "localhost";
$username = "root";
$password = "";

Creating database connection

$conn = mysqli_connect($servername, $username, $password);

Check connection 

if(!$conn){
    die("Failed to connect". mysqli_connect_error());
}
else{
    echo("connection Successfully...");
}

?>