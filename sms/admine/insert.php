<?php
session_start();
if(isset($_SESSION['uid']))
{
}else
{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


.head{
    text-align: center;
    background-color: rgba(119, 28, 9, 0.904);
    height: 80px;
    color:rgb(226, 228, 243);
    font-size: 20px;
    margin-top: 0px;
    line-height: 90px;
    margin-left: 20%;
    margin-right: 10%;
}
    </style>
</head>
<body bgcolor="yellow">
<div class="head">
    <h4 ><a href="logout.php" style="color: wheat;text-decoration:none;float: right; margin-right:30px; font-size:20px;" >Logout</a></h4>

        <h1>Wlecome  to  Admine Dashboard</h1>
    </div>
    <form method="post" enctype="multipart/form-data">
    <table border="2" style="width: 50%; margin-left:30% ">
     <tr>
         <td>Rollno:</td>
         <td><input type="text" name="rollno"placeholder="Enter the Rollno" required></td>
        </tr>
     <tr>
         <td>Full name:</td>
         <td><input type="text" name="name"placeholder="Enter the Full name" required></td>
        </tr>
     <tr>
         <td>City:</td>
         <td><input type="text" name="city" placeholder="Enter the city" required></td>
        </tr>
     <tr>
         <td>parent Contact no:</td>
         <td><input type="text" name="phone" placeholder="Enter the phone" required></td>
        </tr>

        <tr>
         <td>Standerd:</td>
         <td><input type="number" name="standerd" placeholder="Enter the standerd" required></td>
        </tr>
     <tr>
         <td>image:</td>
         <td><input type="file" name="image" required></td>
        </tr>
        <tr><td colspan="2"><input type="submit" name="submit" style="margin-left: 40%; width:100px;background-color:blue;color:aliceblue;"></td></tr>
    </table>
    </form>
    <?php
    $conn=mysqli_connect('localhost','root','','sms');
    if(isset($_POST['submit']))
    {
     $Rollno=$_POST['rollno'];
     $Name=$_POST['name'];
     $city=$_POST['city'];
     $pphone=$_POST['phone'];
     $Stanerd=$_POST['standerd'];
     $image=$_FILES['image']['name'];
     $tempname=$_FILES['image']['tmp_name'];
     
     move_uploaded_file($tempname,"../image/$image");
     $insert="insert into studentdetail (rollno,name,city,phone,standerd,image) value('$Rollno','$Name','$city','$pphone','$Stanerd','$image')";
      $query= mysqli_query($conn,$insert);
      if($query){
          header("location:adminedashboard.php");
      }
      
    }
    
    ?>

</body>
</html>