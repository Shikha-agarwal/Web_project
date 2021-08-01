<?php
$language=$_POST['sellang'];
$submittedcode=$_POST['codewritten'];

if($language=='Java')  $exe='java';
else  $exe='py';
$file1=fopen("ans.$exe",'a');
$texted= $submittedcode."\r\n";
fwrite($file1, $texted);
fclose($file1);

echo "<html lang='en'>";
echo "<head><title>Submitted</title></head>";
echo "<style>";
echo " body { margin-top: 15px; background-image: url(https://i.pinimg.com/originals/89/87/d0/8987d0ebb0eaf2b2d7940ed9d2c9eb4b.jpg); 
background-position: center; background-size: cover; background-repeat: no-repeat; }";
echo " h1 { color: maroon ; font-family: helvetica; }";
echo " button { background-color: green ; color: yellow; } ";
echo "</style>";
echo "</head>";
echo "<body>";
echo "<div style=\"text-align: center;\">";
echo "<h1>Congratulations</h1><br>";
echo "<h2>Your code is submitted.</h2><br><br>";
echo "<a href=index.html><button> OK </button></a>";
echo "</center>";
echo "</body>";
echo "</html>";

