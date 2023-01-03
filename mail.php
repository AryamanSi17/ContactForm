<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$mailheader="From:".$name."<".$email.">\r\n";
$recipient="gsun1517@gmail.com";
mail($recipient,$subject,$message,$mailheader)
or die("error!");

echo'<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DrGunti-Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h1>Thank you for contacting !</h1>
        <p class="back">Go back to <a href="#">homepage</a></p>
    </div>
</body>
</html>';
?>