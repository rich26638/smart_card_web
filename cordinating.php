<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db= "smart_card";
$conn = mysqli_connect($servername, $user, $pass,$db);
if($conn)
{
echo "";
}
else{
    echo "not connected";
}
?>