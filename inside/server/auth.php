<?php
define("WEBSITE", "localhost/teafweb.in/");
define("SERVER", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "teafweb");

$uid = $_REQUEST['id'];
$pass = $_REQUEST['pass'];
$email = "null";

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
        $email= $row['userid'];
        $name= $row['name'];
        $surname= $row['surname'];
        $id= $row['no'];
        $rank= $row['role'];
        $auth= '200';
    }
}else{
   $res = array('auth'=>'400' );
}

mysqli_close($con);
if($uid == $email && $uid != ''){
    $res = array('auth'=>$auth,'email'=>$email,'name'=>$name,'surname'=>$surname,'id'=>$id,'rank'=>$rank);
    $res = json_encode($res);
    echo $res;

}
else{
    $res = array('auth'=>'400' );
    echo  json_encode($res);

}

  /*  if ($_SESSION['is_logged_in']==true) {
        header('Location:http://localhost/teafweb.com/public_html/blog.teafweb.com/cms/new.php');
        echo "fd";
    }
    else{
        header('Location:http://localhost/teafweb.com/public_html/blog.teafweb.com/cms/log.php');
    }*/
