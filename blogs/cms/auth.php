<?php
session_start();
$_SESSION['is_logged_in'] = false;

define("WEBSITE", "localhost/teafweb.in/");
define("SERVER", "localhost");
define("USERNAME", "teafwebi");
define("PASSWORD", "123456@Teaf");
define("DATABASE", "teafwebi_blog");



/*

define("WEBSITE", "localhost/teafweb.in/");
define("SERVER", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "teafwebi_tblog");*/


$uid = $_POST['id'];
$pass = $_POST['pass'];


$pass_server = md5($pass);
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
    die (mysqli_connect_error . " this is connection error");
}
$sql = "SELECT * FROM usertable WHERE password='$pass_server'" ;
$data = mysqli_query($con,$sql);
$len = mysqli_num_rows($data);
if($len>0){
    while($row = mysqli_fetch_assoc($data)){
        $_SESSION['is_logged_in']= $row['userid'];
        $id[]= $row['no'];
    }
}
mysqli_close($con);
if($uid == $_SESSION['is_logged_in']){
    echo  $_SESSION['is_logged_in'];
}
else{
    $_SESSION['is_logged_in'] = false;
    echo $_SESSION['is_logged_in'];
}

  /*  if ($_SESSION['is_logged_in']==true) {
        header('Location:http://localhost/teafweb.com/public_html/blog.teafweb.com/cms/new.php');
        echo "fd";
    }
    else{
        header('Location:http://localhost/teafweb.com/public_html/blog.teafweb.com/cms/log.php');
    }*/








?>
