<?php
require_once 'config.php';
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
    die("Connection Error". mysqli_connect_error);
    echo "Connection Error!";
}

$sql = "SELECT * FROM articletable WHERE `heading` LIKE '%$keyword%'";
$data = mysqli_query($con,$sql);
$len = mysqli_num_rows($data);
if($len > 0 ){
    while($row = mysqli_fetch_assoc($data)){
        $id[]=$row['no'];
        $date[]=$row['date'];
        $title[] =$row['heading'];
        $article[] =$row['article'];
        $expert[] =$row['description'];
        $like[] =$row['like'];
        $comment[] =$row['comments'];
        $image[] =$row['image'];
    }
}



?>
