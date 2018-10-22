<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
            <form id="form" action="contact.php" method="post">
            <p>Name</p> <input type="text" name="name">
            <p>Your Email</p> <input type="text" name="email">
            <p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
            <input type="submit" value="Send"><input type="reset" value="Clear">
        </form>
        
</body>
</html><?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "cooljacobiscool98@gmail.com";
$subject = "pedo boy";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>