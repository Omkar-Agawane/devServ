<?php

define("WEBSITE", "localhost/teafweb.in/");
define("SERVER", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "teafwebi_inside");

$uid = $_REQUEST['id'];

$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
    die (mysqli_connect_error . " this is connection error");
}
$sql = "SELECT * FROM administration WHERE email='$uid'" ;
$data = mysqli_query($con,$sql);
$len = mysqli_num_rows($data);
if($len>0){
    $res = array('auth'=>'200' );
   echo  json_encode($res);
 // echo "200";
}else{
   $res = array('auth'=>'400' );
   echo  json_encode($res);
 // echo "400";
}

mysqli_close($con);




  /*  if ($_SESSION['is_logged_in']==true) {
        header('Location:http://localhost/teafweb.com/public_html/blog.teafweb.com/cms/new.php');
        echo "fd";
    }
    else{
        header('Location:http://localhost/teafweb.com/public_html/blog.teafweb.com/cms/log.php');
    }*/








?>
