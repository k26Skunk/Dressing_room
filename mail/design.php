<?php 
header( "refresh:3; url =../index.php" ); 

//@param
$title = 'Заявка на дизайн';//title letter
//////////////////FROM/////////////////////////
$name_sender = 'Robot Заявка на дизайн';
$email_sender = 'Dressing Room'; //от кого 
//////////////////WHOM/////////////////////////
$name_recipient ='First Last';
$email_recipient ='vony4ka26@mail.ru'; //кому
//////////////////////////////////////////////

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Спасибо за Вашу заявку. Мы свяжемся с Вами в ближайшее время</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.less">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
           <br>
           <br>
           <br>
           <br>
           <br>
            <h1 class="text-center">Спасибо за Вашу заявку. Мы свяжемся с Вами в ближайшее время</h1>
        </div>
    </div>
</div>
</body>
</html>
<?php

  /**
  * clear input tegs
  * @param string $value input
  * @return  $result string clear input
  */
  function clean( $value = "") {
      $value = trim($value);
      $value = stripslashes($value);
      $value = strip_tags($value);
      $value = htmlspecialchars($value);
      
      return $value;
  }

if ( isset($_POST['send']) ) {
  $name   = clean( $_POST['name']);
  $tell   = clean( $_POST['tell']);
  $email  = clean( $_POST['email']);
}


$body='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>'.$title.'</title>
</head>
<body>
  <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 20px;">
    <h3>'.$title.'</h3>
    <div align="center">
        Имя:     '.$name.' <br>
        Телефон: '.$tell.'<br>
        Емаил:   '.$email.'<br>
    </div>
    
  </div>
</body>
</html>
';

require 'class.phpmailer.php';
//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->CharSet = 'utf-8';
//Set who the message is to be sent from
$mail->setFrom("$email_sender", "$name_sender");
//Set an alternative reply-to address
$mail->addReplyTo("$email_recipient", "$name_recipient");
//Set who the message is to be sent to
$mail->addAddress("$email_recipient", "$name_recipient");
//Set the subject line
$mail->Subject = "$title"."$phone";
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($body);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.gif');
if(isset($_FILES['fileAttach'])) { 
    if($_FILES['fileAttach']['error'] == 0){ 
      $mail->AddAttachment($_FILES['fileAttach']['tmp_name'], $_FILES['fileAttach']['name']); 
      //move_uploaded_file($_FILES["fileAttach"]["tmp_name"], "cfiles/".$_FILES["fileAttach"]["name"]);
    } 
} 
//send the message, check for errors
if (!$mail->send()) {
    /*echo "Mailer Error: " . $mail->ErrorInfo;*/
} else {
    /*echo "Message sent!";*/
}
?>

