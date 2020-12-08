<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
</head>
<body>
    <a href="admine/login.php" style="float: right; margin-right:40px; text-decoration:none; color:black;font-size:30px;">Admine Login</a>
    <h1 style="text-align: center;"> Welcome to Student Menagement System</h1>
    <form method="post">
    <table border="1" align="center">
    <thead>
        <tr><th colspan="2">Student information</th></tr>
        <tr>
        <th>Choose Standerd</th>
<td>
<select name="standerd">
    <option value="1">1st</option>
    <option value="2">2nd</option>
    <option value="3">3rd</option>
    <option value="4">4th</option>
    <option value="5">5th</option>
    <option value="6">6th</option>
    <option value="7">7th</option>
    <option value="8">8th</option>
    <option value="9">9th</option>
    <option value="10">10th</option>
    <option value="11">11th</option>
    <option value="12">12th</option>
    
</select>

</td>
        </tr>
    <tr>
    <th>Roll Number</th>
    <td><input type="text" name="rollnumber"></td>
    </tr>
    <tr  >
    <td colspan="2"><input type="submit" name="submit" style="margin-left:80px;"></td></tr>
    </thead>
    
    </table>
    
    </form>
    
    <table border="1" align="center" style="margin-top:20px;">
        <thead>
            <tr>
                <th>Rollno</th>
                <th>Name</th>
                <th>City</th>
                <th>phone</th>
                <th>Standerd</th>
                <th>image</th>
            </tr>
        </thead>
        <tbody>
        <?php
    $conn=mysqli_connect('localhost','root','','sms');
 if(isset($_POST['submit']))
    {
        
        $standerd=$_POST['standerd'];
      
        $rollno=$_POST['rollnumber'];

        $select="select * from  studentdetail where standerd='$standerd' and rollno='$rollno'";
       
        $query=mysqli_query($conn,$select);
      $fetch=mysqli_fetch_assoc($query);
       

    }  
    ?>
            <tr>
           <td><?php echo $fetch['rollno']; ?></td>
           <td><?php echo $fetch['name']; ?></td>
           <td><?php echo $fetch['city']; ?></td>
           <td><?php echo $fetch['phone']; ?></td>
           <td><?php echo $fetch['standerd']; ?></td>
           <td><img src="..\<?php echo $fetch['image']; ?>"></td>
            </tr>
        </tbody>
    </table>
</body>
</html>