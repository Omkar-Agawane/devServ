<?php include 'config.php';
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
$endpoint=mysqli_real_escape_string($con, $_REQUEST['endpoint']);
$date= date("d/m/Y");
//$endpoint="sdf";
if(!$con){
    die("Connection error".mysqli_connect_error());
}
$sql2 = "SELECT * FROM pushsubscribertable WHERE endpoint='$endpoint'";
$data = mysqli_query($con, $sql2);
$len = mysqli_num_rows($data);

if($len ==0 ){
  $sql = "INSERT INTO `pushsubscribertable` (`no`, `endpoint`,`date`) VALUES (NULL, '$endpoint','$date')";
  mysqli_query($con, $sql);
}
mysqli_close($con);
echo "sdf"


?>