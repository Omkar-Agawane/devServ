<?php \
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$email = new PHPMailer();
$email->SetFrom('info@teafweb.com', 'Your Name'); //Name is optional
$email->Subject   = 'Message Subject';
$email->Body      = $bodytext;
$email->AddAddress( 'info@teafweb.com' );

$file_to_attach = '/';

$email->AddAttachment( $file_to_attach , 'file.pdf' );

return $email->Send();
?>