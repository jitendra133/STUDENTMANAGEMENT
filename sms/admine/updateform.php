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
    <?php
    $conn=mysqli_connect('localhost','root','','sms');
    $id=$_GET['id'];
    $select="select * from studentdetail where id='$id'";
     $query=mysqli_query($conn,$select);
     $fetch=mysqli_fetch_assoc($query);
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
     $update="update studentdetail set rollno='$Rollno',name='$Name',city='$city',phone='$pphone',standerd='$Stanerd',image='$image' where id='$id' ";
      $query= mysqli_query($conn,$update);
      if($query){
          header("location:update.php");
      }
    }
    ?>
    <form method="post" enctype="multipart/form-data">
    <table border="2" style="width: 50%; margin-left:30% ">
     <tr>
         <td>Rollno:</td>
         <td><input type="text" name="rollno"placeholder="Enter the Rollno" value="<?php echo $fetch['rollno'] ;?>" required></td>
        </tr>
     <tr>
         <td>Full name:</td>
         <td><input type="text" name="name"placeholder="Enter the Full name"value="<?php echo $fetch['name'] ;?>" required></td>
        </tr>
     <tr>
         <td>City:</td>
         <td><input type="text" name="city" placeholder="Enter the city"value="<?php echo $fetch['city'] ;?>" required></td>
        </tr>
     <tr>
         <td>parent Contact no:</td>
         <td><input type="text" name="phone" placeholder="Enter the phone"value="<?php echo $fetch['phone'] ;?>" required></td>
        </tr>

        <tr>
         <td>Standerd:</td>
         <td><input type="number" name="standerd" placeholder="Enter the standerd"value="<?php echo $fetch['standerd'] ;?>" required></td>
        </tr>
     <tr>
         <td>image:</td>
         <td><input type="file" name="image" required><img src="../image/<?php echo $fetch['image'];?>"  style="max-width:100px;"?></td>
        </tr>
        <tr><td colspan="2"><input type="submit" name="submit" value="update" style="margin-left: 40%; width:100px;background-color:blue;color:aliceblue;"></td></tr>
    </table>
    </form>
</body>
</html>