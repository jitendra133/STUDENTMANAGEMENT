<?php
 $conn=mysqli_connect('localhost','root','','sms');
 $id=$_GET['id'];
 $delete="delete from  studentdetail where id='$id'";
 $query=mysqli_query($conn,$delete);
 if($query){
     header('location:adminedashboard.php');
 }


?>