<?php include '../backend/config.php';?>


<?php
$err = '';
$bname = $_POST['bname'];
$btype = $_POST['btype'];
$bwebsite = $_POST['bwebsite'];
$email = $_POST['email'];
$name = $_POST['fname'];
$gst = $_POST['gst'];


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
$subject ="Free Audit request";
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

        $sql = "INSERT INTO `users`(`no`, `fname`, `lname`, `businessName`, `businessType`, `gst`, `ph`, `email`, `website`) VALUES (NULL,'$name','$name','$bname','$btype','$gst','ph','$email','$bwebsite')";


    if (mysqli_query($con, $sql)) {
       echo "updated";
    } else {
      echo "Error updating record: " . mysqli_error($con);
    }




    mysqli_close($con);
    $message =  "\n Client Name: $name" ."\n Company: $bname"."\n Business Type: $btype". "\n Phone: ph" . "\n Email: $email" . "\n web :  $bwebsite";
    mail($to,$subject,$message,$headers);

    }







?>
