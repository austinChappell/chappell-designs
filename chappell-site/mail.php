<!DOCTYPE html>
<html class='dark-background'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chappell Designs</title>
    <script src="https://use.fontawesome.com/62c3bd892c.js"></script>
    <link type='text/css' rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' />
    <link type='text/css' rel='stylesheet' href='index.css' />
  </head>
  <body class='dark-background center'>
    <div class='container'>
      <h1 class='form-title'>Thank you for contacting me. I will be in touch with you shortly.</h1>
      <a href='../index.html'><button class='cta-btn form-submit'>Back Home</button></a>

      <?php

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $sender = 'Austin.W.Chappell@gmail.com';
        $recipient = 'Austin.W.Chappell@gmail.com';
        $subject = 'Web Development Inquiry';
        $mailheader = "From: $sender \r\n";
        $formContent = "Name: $name \n Email: $email \n Phone: $phone \n Message: $message";
        mail($recipient, $subject, $formContent, $mailheader);

      ?>


    </div>
  </body>
</html>
