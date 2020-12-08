<?php
$conn=mysqli_connect('localhost','root','','sms');
if($conn)
{
    echo "yes";
}else {
    echo " no";
}
?>