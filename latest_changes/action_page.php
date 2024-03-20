<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $que1 = $_POST['Q2'];
    $que2 = $_POST['Q3'];
    $que3 = $_POST['Q4'];
    $que4 = $_POST['Q5'];
    $que5 = $_POST['Q6'];
    $que6 = $_POST['Q7'];

    $msg = "<table>
            <tr>Thank you for your feedback !</tr>
            <tr><td>Name :</td><td>$name</td></tr>
            <tr><td>Question 01 :</td><td>$que1</td></tr>
            <tr><td>Question 02 :</td><td>$que2</td></tr>
            <tr><td>Question 03 :</td><td>$que3</td></tr>
            <tr><td>Question 04 :</td><td>$que4</td></tr>
            <tr><td>Question 05 :</td><td>$que5</td></tr>
            <tr><td>Question 06 :</td><td>$que6</td></tr>
            </table>";
        echo $msg;
    // echo "<div>Your Feedback is Submitted Successfully.Thank you $name $que1!</div>";

    $to = "info@localhost.com";
    $subject ="New Video call request";
    $from = "info@localhost.net";
    $headers = "From:" . $from;
    $ip="";
    // $message =  "\n Client Name: $name" . "\n Email: $email". "\n Phone: $phone" ."\n For Date: $meeetingDate";
    $server_name = $_SERVER['SERVER_NAME'];

   // Send email
    if (mail($to,$subject,$msg,$headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed. Error: " . error_get_last()['message'];
    }
}
?>