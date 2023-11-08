<?php

$err = 'err';
$email = $_POST['email'];
$name = $_POST['fname'];
$ph = $_POST['phone'];
$edu = $_POST['Qualification'];
$docid = $_POST['identification'];
$addr = $_POST['address'];

    // Recipient's email
    $recipient_email = $_POST['email'];

    // Sender's email
    $from_email = 'hr@teafweb.com';
    $from_name = 'HR Teafweb';

    // Email subject and body
    $subject = 'Email with Attachment';
    $message = 'This email contains an attachment.';

    // Attachment details
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];

    // Set up PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php'; // Include PHPMailer autoloader

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com'; // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'hr@teafweb.com'; // SMTP username
        $mail->Password = '123456@Teaf'; // SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 465;

        // Sender and recipient
        $mail->setFrom($from_email, $from_name);
        $mail->addAddress($recipient_email);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Attachment
        $mail->addAttachment($file_tmp, $file_name);

        // Send the email
        $mail->send();
        echo 'Email has been sent with the attachment.';
    } catch (Exception $e) {
        echo "Email could not be sent. Error: {$mail->ErrorInfo}";
    }

?>
