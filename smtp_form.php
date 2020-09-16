

<?php

if(isset($_POST['name']) && isset($_POST['email'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = 'icdiagnostickit@gmail.com';
    $subject = "New Customer"

    $body = '<html>
                <body>
                    <h2> Feedback Customer </h2>
                    <hr>
                    <p>Name <br> '.$name.' </p>
                    <p>Email : <br> '.$email.' </p>
                </body>
            </html>;        
           '
 //headers

 $headers = "From : ".$name." <".$email.">\r\n";
 $headers = "Reply-To : ".$email."\r\n";
 $headers = "MIME-Version: 1.0\r\n";
 $headers = "Content-type: text/html; charset-utf-8";

 //send


 $send = mail($to, $subject, $body, $headers);
 
 if($send) {
     echo '<br>';
     echo 'Talebiniz Başarıyla Alınmıştır Teşekkürler..'
 } else {
     echo 'error'
 }
}
?>

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPKeepAlive = true;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$mail->Port = 587;
$mail->Host = "smtp.gmail.com";
$mail->Username = "icdiagnostickit@gmail.com"
$mail->Password = "ICdiagnostic123"

?>