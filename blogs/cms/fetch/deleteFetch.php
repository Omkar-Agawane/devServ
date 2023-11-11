<?php
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
    die (mysqli_connect_error . " this is connection error");
}

$sql = "SELECT *  FROM articletable";
$data = mysqli_query($con,$sql);
$len = mysqli_num_rows($data);

if($len>0){
    while($row = mysqli_fetch_assoc($data)){
        $title[]= $row['heading'];
        $id[]= $row['no'];
    }
}

mysqli_close($con);

$con2 = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
$sql1 = "SELECT * FROM pushsubscribertable";
$data1 = mysqli_query($con2,$sql1);
$subs_len = mysqli_num_rows($data1);



?>