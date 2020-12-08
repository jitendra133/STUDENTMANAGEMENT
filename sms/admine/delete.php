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
    margin-left: 10%;
    margin-right: 10%;
}


    </style>
</head>
<body bgcolor="yellow">
<div class="head">
    <h4 ><a href="logout.php" style="color: wheat;text-decoration:none;float: right; margin-right:30px; font-size:20px;" >Logout</a></h4>

        <h1>Wlecome  to  Admine Dashboard</h1>
    </div> 
    <form method="POST">
        <table align="center">
            <tr><th>Enter Standerd</th><td><input type="number" name="standerd" placeholder="Enter Standerd"  required></td>
        
            <th>Enter Student Name</th><td><input type="text" name="name" placeholder="Enter Student Name"  required></td>
        <td colspan="2"><input type="submit" name="submit" value="search"></td></tr>
        </table>
    </form>
    <table align="center" width="80%" border="1">
        <tr style="background-color: black; color:wheat;">
            <th>S.NO</th>
            <th>image</th>
            <th>Name</th>
            <th>Rollno</th>
            <th>edit</th>
        </tr>
        <tbody>
        
        <?php 
    $conn=mysqli_connect('localhost','root','','sms');
    if(isset($_POST['submit'])){
        $standerd=$_POST['standerd'];
        $name=$_POST['name'];
        $select="select * from studentdetail where standerd='$standerd' and name='$name'";
        
        $query=mysqli_query($conn,$select);
        while($fetch=mysqli_fetch_assoc($query)){
        
    ?>
      <tr>  <td><?php echo $fetch['id']; ?></td>
        <td><img src="../image/<?php echo $fetch['image'];?>" style="max-width:100px;"></td>
        <td><?php echo $fetch['name']?></td>
        <td><?php echo $fetch['rollno'] ?></td>
        <td ><a href="deleteform.php?id=<?php echo $fetch['id'];?>">delete</a></td>
    </tr>

        </tbody>
        <?php }}?>
    </table>
    
</body>
</html>