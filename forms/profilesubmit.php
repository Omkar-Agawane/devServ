<?php include '../backend/config.php';?>


<?php
$err = 'err';
$email = $_POST['email'];
$name = $_POST['fname'];
$ph = $_POST['phone'];
$edu = $_POST['Qualification'];
$docid = $_POST['identification'];
$addr = $_POST['address'];


function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$to = "info@teafweb.com";
$subject ="New Website request";
$from = "info@teafweb.com";
$headers = "From:" . $from;
$ip="";
$server_name = $_SERVER['SERVER_NAME'];

if($email === NULL){
    $err = "Warning !! <br>
    Malicious Activity & Submission Detected <br> your IP Address is :";
    $warning =  $err. $err_ip= getUserIpAddr(). " and submitted to local gov authorities";
    echo $warning;
}
else{
    $con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
        if(!$con){
            die("Connection error".mysqli_connect_error());
        }
        $SQL = "SHOW TABLES LIKE 'employees'";
         $result = mysqli_query($con,$SQL);
        if($result->num_rows>0){
            $sql = "INSERT INTO `employees`(`no`, `email`, `name`, `ph`, `edu`, `docid`, `addr`) VALUES (NULL,'$email','$name','$ph','$edu','$docid','$addr')";
            if (mysqli_query($con, $sql)) {
                $err = "200";
            } else {
                $err = "500: Table error";
            }

        }
        else{
            $err = "no show";
            $SQL = "CREATE TABLE `employees` (`no` INT(255) NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , `name` VARCHAR(255) NOT NULL , `ph` VARCHAR(255) NOT NULL , `edu` VARCHAR(255) NOT NULL , `docid` VARCHAR(255) NOT NULL , `addr` VARCHAR(255) NOT NULL , PRIMARY KEY (`no`)) ENGINE = InnoDB";
           if(mysqli_query($con, $SQL)){
            $sql = "INSERT INTO `employees`(`no`, `email`, `name`, `ph`, `edu`, `docid`, `addr`) VALUES (NULL,'$email','$name','$ph','$edu','$docid','$addr')";
            if (mysqli_query($con, $sql)) {
                $err = "200";
            } else {
                $err = "500: Data Entry error";
            }
           };
        }
          
    //mysqli_close($con);

   // $message =  "\n Client Name: $name" . "\n Email: $email";
  //  mail($to,$subject,$message,$headers);
  $res =  json_encode($err);
    echo $res;
    }





    /*
    CREATE TABLE `teafweb`. (`no` INT(255) NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , `name` VARCHAR(255) NOT NULL , `ph` VARCHAR(255) NOT NULL , `edu` VARCHAR(255) NOT NULL , `docid` VARCHAR(255) NOT NULL , `aadr` VARCHAR(255) NOT NULL , PRIMARY KEY (`no`)) ENGINE = InnoDB; 

*/




?>