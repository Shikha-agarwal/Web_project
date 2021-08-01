<?php
$email=$_POST['user'];
$psw=$_POST['password'];
$flag=0;
$s=array();
$file = fopen("details.txt", 'r');
while(!feof($file))
{
    $s=fgets($file);
    $str_arr = array_pad(explode('::', $s),6,null);
    if ($str_arr[2]==$psw and $str_arr[1]==$email) {

        $name=$str_arr[0];
        $jano=$str_arr[5];
        echo "<h5>Job Application No: $jano </h5>";
        echo "<h2>Welcome $name!</h2>";
        echo "<hr>";
        $rem=$jano%20;
        $rem=$rem+1;
        echo "<h3>Question:</h3>";
        echo readfile("./$rem.txt");
        readfile("./code.html");

        $flag=1;
        break;
    }

}
if ($flag==0)
{
    echo "<html lang='en'>";
    echo "<head><title>Login Again</title></head>";
    echo "<style>";
    echo "h2, h4 { margin-left: 150px; } ";
    echo "h2 { margin-top: 70px ; color: darkblack; font-weight: bold}";
    echo "#okay { margin-left: 150px; color: black;}";
    echo "body { background-image: url(./vali.jpeg); 
					background-position: center; background-repeat:norepeat; background-size:cover}";
    echo "button { background-color: lightgreen; border-radius: 30px; color: black }";
    echo "button:hover{ background-color: green; color: yellow}";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<h2>Please register before login<h2>";
    echo "<a href=index.html><h4><button>Register</button></h4></a>";
    echo "<br>";
    echo "<h2>If you have already registered ,check your mail id and password before login</h2>";
    echo "<br>";
    echo "<a href=login.html><h4><button id=okay>OK</button</h4></a>";
    echo "</body>";
    echo "</html>";
}
fclose($file);

