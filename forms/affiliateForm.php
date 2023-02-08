<?php include '../backend/config.php';?>


<?php
$err = '';
$payment = $_POST['payment'];
$profession = $_POST['profession'];
$email = $_POST['email'];
$name = $_POST['fname'];
$phone = $_POST['phone'];


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
$subject ="Affiliate request";
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
   /* $con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
        if(!$con){
            die("Connection error".mysqli_connect_error());
        }

        $sql = "INSERT INTO `users`(`no`, `fname`, `lname`, `businessName`, `businessType`, `gst`, `ph`, `email`, `website`) VALUES (NULL,'$name','$name','$bname','$btype','$gst','ph','$email','$bwebsite')";


    if (mysqli_query($con, $sql)) {
       echo "updated";
    } else {
      echo "Error updating record: " . mysqli_error($con);
    }*/




   // mysqli_close($con);
    $message =  "\n Affiliate Name: $name" ."\n payment Type: $payment" ."\n Profession: $profession" . "\n Email: $email" . "\n phone :  $phone";
    mail($to,$subject,$message,$headers);

    }







?>
