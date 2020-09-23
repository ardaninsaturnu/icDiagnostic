<?php


    session_start();


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\wiki\TroubleShooting;

    require "./vendor/autoload.php";

// isset() check variable set or declared




    if(isset($_POST)) {

        //check variable that came from form for instance thats state name = name_lastname one string is empty or no 


        if($_POST["name"] && $_POST["email"] && $_POST["phone"] && $_POST["product"] && $_POST["count"] && $_POST["message"]){
            
            // execute send mail task 

            $customer_name = $_POST["name"];
            $customer_email = $_POST["email"];
            $customer_phone = $_POST["phone"];
            $customer_product = $_POST["product"];
            $customer_count = $_POST["count"];
            $customer_message = $_POST["message"];



            $mail = new PHPMailer(true);

            try{

                
                
                //server settings

                $mail->SMTPDebug = 3;
                $mail->isSMTP(true);
                $mail->Host = "rd-halifax.guzelhosting.com";
                $mail->SMTPAuth = true;
                $mail->Username = "info@icdiagnostickit.com";
                $mail->Password = "ICdiagnostic123";
                //$mail->SMTPSecure ='tls';
                $mail->Port = 587;
                //$mail->SMTPAuth =true;
                $mail->CharSet = 'UTF-8';





                //sender settings

                $mail->setFrom('info@icdiagnostickit.com');

                $mail->addAddress('icdiagnostickit@gmail.com');


                //post settings

                $mail->isHTML(true);
                $mail->Subject =" ". $customer_name ."  ICdiagnostickit Ürün Talep Formu" ;
                $body = "";

                $body .="<h2>Ürün Talep Formu</h2>";
                $body .="<hr>";
                $body .="<p><strong>Adı Soyadı :</strong>". $customer_name . "</p>";
                $body .="<p><strong>Email :</strong>". $customer_email ."</p>"; 
                $body .="<p><strong>Telefon :</strong>". $customer_phone ."</p>";
                $body .="<p><strong>Ürün Adı :</strong>". $customer_product ."</p>"; 
                $body .="<p><strong>Adet :</strong>". $customer_count ."</p>";
                $body .="<p><strong>Mesaj :</strong>" . $customer_message ."</p>";
                

                $mail->Body = $body;

                
                if($mail->send()) {

                    $alert = array(  
                        "message"=> "Sayın $customer_name Ürün Talebiniz Alınmıştır Teşekkür Ederiz.",
                        "type" => "success"
                     );

                } else {

                    $alert = array(  
                        "message"=> "Mail Gönderirken Bir Hata Oluştu.",
                        "type" => "danger"
                     );

                }



            } catch(Exception $e) {

                
                $alert = array(  
                    "message"=> $e->getMessage(),
                    "type" => "danger"
                 );

            }


       } else {

           $alert = array(  
               "message"=> "Lütfen tüm alanları doldurunuz",
               "type" => "danger"
            );
    }

    
    $_SESSION["alert"] = $alert;

    header("location:form.php");
}




/*



//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "Your Gmail Email Address Here";
//Set gmail password
	$mail->Password = "Your Gmail Password Here";
//Email subject
	$mail->Subject = "Test email using PHPMailer";
//Set sender email
	$mail->setFrom('Sender Email who will send email');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	$mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = "<h1>This is HTML h1 Heading</h1></br><p>This is html paragraph</p>";
//Add recipient
	$mail->addAddress('Email of the person who will receive email');
//Finally send email
	if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
	}
//Closing smtp connection
	$mail->smtpClose();



*/