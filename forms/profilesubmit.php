<?php
include '../backend/config.php';

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


    $file = $_FILES["file"]["tmp_name"];
    $filename = $_FILES["file"]["name"];

    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);


    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    $link="https://teafweb.com/forms/$target_file";



    $mailto = "info@teafweb.com";
    $subject ="New career profile";
    $from = "info@teafweb.com";
    $ip="";
    $server_name = $_SERVER['SERVER_NAME'];

    // main header (multipart mandatory)
    $headers = "From: name <info@teafweb.com>";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";

    // message
    $err = 'err';
    $email = $_POST['email'];
    $name = $_POST['fname'];
    $ph = $_POST['phone'];
    $edu = $_POST['Qualification'];
    $docid = $_POST['identification'];
    $addr = $_POST['address'];

    $body ="Name:\t $name \n\t Email:\t $email \n\t Phone: \t$ph \n\n\n Link: \t\t$link ";

    // attachment
    

    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
        $res = json_encode("200");
        echo $res;
    } else {
        $res = json_encode("404");
        echo $res;
    }
    ?>