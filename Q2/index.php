<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2-Send Email</title>
</head>

<body>
    <h1>Q2. Send email with html content</h1>

    <?php
         $to = "php@lpu.in";
         $subject = "This is the assignment for CA 2";
         
         $message = "<b>The best email ever.</b>";
         $message .= "<h1>You can find the code for sending an Email here.</h1>";
         $message .= "PHP is awesome";
         
         $header = "From:rituraj@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Email sent";
         }else {
            echo "Email error";
         }
      ?>
</body>

</html>