<?php 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; 
 

require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 
 

$mail = new PHPMailer; 
 
//---------------------------ให้นักศึกษาเพิ่มโค้ดด้านล่างนี้-----------------------------------------------


$mail->isSMTP();                            
$mail->Host = 'smtp.gmail.com';           
$mail->SMTPAuth = true;                     
$mail->Username = 'yourmail@gmail.com';       //อีเมล์ผู้ส่ง
$mail->Password = 'your_app_password';         //รหัสผ่าน
$mail->SMTPSecure = 'ssl';                  
$mail->Port = 465; 


$name = $_POST["name"];
$email = $_POST["email"];
$header = $_POST["header"];
$detail = $_POST["detail"];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $mail->isHTML(true); 
   
    // อีเมล์และชื่อผู้ส่ง
    $mail->setFrom($email, $name);
    
    //อีมล์ผู้รับ
    $mail->addAddress ('yourmail@gmail.com');

    //หัวเรื่องอีเมล์
    $mail->Subject = $header;
    
    //รายละเอียดอีเมล์
    $mail->Body  = '<h2 style="color:Tomato;">' . $detail .'</h2>';
    
    
    if(!$mail->send()) { 
        echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
    } else { 
        echo "<script>alert('Message has been sent');window.location.href='mail_form.php';</script>";
    }

}


?>