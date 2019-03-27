<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <?php 
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $recipient = "annettethomasmarie@gmail.com";
      $mailheader = "From:  $email \r\n";
      mail($recipient, $subject, $message, $mailheader) or die("Error:");
      echo "Thank you! I'll be in touch soon!"
      ?>
</body>
</html>