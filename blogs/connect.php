<?php require_once 'config.php';
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

if(!$con){
    die("Connection Error". mysqli_connect_error);
    echo "Connection Error!";
}


?>