<?php

require '/home2/srmiicco/fablab.srmiic.com/fabui/application/third_party/PHPMailer-master/PHPMailerAutoload.php';

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = '136.143.191.189';
        
        $mail->SMTPAuth = true;
        $mail->Username = 'no-reply@srmiic.com';
        $mail->Password = 'Killmedude@123';
       $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->SMTPDebug = 4;
        $mail->SMTPAutoTLS = false;
        $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
        $message = '';
        $message .= '<strong>Hi</strong> ' . $userInfo->Student_Name;                     
        $message .= '<strong>You have signed up with our website</strong><br>';
        $message .= '<strong>Please click:</strong> ' . $link;
        
    
        
        //$this->load->view('emails/verification.php',$data,TRUE);


        $mail->From = 'no-reply@srmiic.com';
        $mail->FromName = 'SRM FABLAB';
        $mail->addAddress('monuabhaysv@gmail.com');

        $mail->isHTML(true);

        $mail->Subject = 'FABLAB REGISTARTION VERIFICATION!';
        $mail->Body    = 'test body daa';
        
        
        if(!$mail->Send())
{
   echo "Message could not be sent. 
";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";



?>