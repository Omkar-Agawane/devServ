<?php include '../backend/config.php';?>


<?php
$err = '';
$domain = $_POST['domain'];

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
$subject ="Domain check". $domain;
$from = "info@teafweb.com";
$headers = "From:" . $from;
$ip="";
$server_name = $_SERVER['SERVER_NAME'];

if($domain === NULL){
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
    }




    mysqli_close($con);
    $message =  "\n Client Name: $name" ."\n Company: $bname"."\n Business Type: $btype". "\n Phone: ph" . "\n Email: $email" . "\n web :  $bwebsite";
    mail($to,$subject,$message,$headers);
*/

$url = "https://api.godaddy.com/v1/domains/available?domain=".$domain;
//$url = 'https://api.godaddy.com/v1/domains/suggest?waitMs=1000&query='.$domain;
$header = array(
    "Authorization: sso-key gGpnhxAmFD6J_WbECMwy16tB52XsEouNXMF:Qk7NdEak9mDdum65e71yos",
    "Content-Type: application/json", // POST as JSON
    "Accept: application/json" // Accept response as JSON

);


$ch = curl_init();
$timeout=60;

//set the url and other options for curl
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
// Values: GET, POST, PUT, DELETE, PATCH, UPDATE
//curl_setopt($ch, CURLOPT_POSTFIELDS, $variable);
//curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

 //execute call and return response data.
 $result = curl_exec($ch);
 curl_close($ch);

/*suggested URL
$ch = curl_init();
$timeout=60;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
// Values: GET, POST, PUT, DELETE, PATCH, UPDATE
//curl_setopt($ch, CURLOPT_POSTFIELDS, $variable);
//curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$result = curl_exec($ch);

*/

 //close curl connection


 // decode the json response
 //$dn = json_decode($result, true);

 echo $result;



    }







?>
