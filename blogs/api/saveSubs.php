<?php
require_once 'config-api.php';

    $con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
    if(!$con){
        die (mysqli_connect_error . " this is connection error");
    }
    $sql = "SELECT * FROM pushsubscribertable";
    $data = mysqli_query($con, $sql);
    $len_cat_post = mysqli_num_rows($data);
    if($len_cat_post>0){
        while($row = mysqli_fetch_assoc($data)){
            $endpoints[]=$row['endpoint'];
        }
    }
    echo  json_encode($endpoints);
    mysqli_close($con);
   /* sendOutput(
        $len_cat_post,
        array('Content-Type: application/json', 'HTTP/1.1 200 OK')
    );*/
