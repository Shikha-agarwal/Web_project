<?php
$name = $_POST['name'];
$email = $_POST['mail'];
$pass = $_POST['pass'];
$confirmpass = $_POST['retypepass'];
$highqualification = $_POST['qualification'];
$mobilenumber = $_POST['mobileno'];
$jobappno = rand(1000, 2000);

$file = fopen("details.txt", 'a');
$text = $name . "::" . $email . "::" . $pass . "::" . $highqualification . "::" . $mobilenumber . "::" . $jobappno . "::" . "\r\n";
fwrite($file, $text);
fclose($file);

echo "<html lang='en'>";
echo "<head><title>Congrats</title>";
echo "<style>";
echo " body { margin-top: 170px; background-image: url(https://png.pngtree.com/thumb_back/fw800/back_our/20190621/ourmid/pngtree-blue-minimalistic-tech-computer-banner-poster-background-image_178087.jpg); 
background-position: center; background-size: cover; background-repeat: no-repeat; }";
echo " h1 , h4 { color: maroon ; font-family: helvetica; }";
echo " button { background-color: green ; color: black; } ";
echo "</style>";
echo "</head>";
echo "<body>";
echo "<div style=\"text-align: center;\">";
echo "<h1>Congratulations</h1><br>";
echo "<h2>You have successfully registered.</h2><br><br>";
echo "<h4>Click Here to login</h4>";
echo "<a href=login.html><button> Login </button></a>";
echo "</center>";
echo "</body>";
echo "</html>";
