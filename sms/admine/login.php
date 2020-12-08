<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center; background-color:tomato;color:black;height:50px; line-height:50px; border-radius:10px;
    ">Admine Login Page</h1>
    <form method="POST">
    <table border="2" align="center">
        <tr><th>Name</th>
    <td><input type="text" name="name"></td>
    </tr>
    <tr><th  >password</th>
    <td><input type="password" name="password"></td>
    </tr>
    <tr><td  colspan="2"><input type="submit" name="submit" value="Login" style="margin-left:80px; font-size:medium; background-color:blue; color:aliceblue;"></td></tr>
    </table>
    </form>
    <?php
    session_start();
 $conn=mysqli_connect('localhost','root','','sms');
 
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $select="select * from  admine where name='$name' and password='$password'";
    $query=mysqli_query($conn,$select);
    $result=mysqli_num_rows($query);
    if($result==1){
        $fetch=mysqli_fetch_assoc($query);
        $id=$fetch['id'];
        $name1=$fetch['name'];
        
        $_SESSION['uid']=$id;
        $_SESSION['username']=$name1;
     header("location:adminedashboard.php");
    }else {
        ?>
       <script>
           confirm(" please enter valid use and password");
           
       </script>
       <?php
    }
    
}
    
    
    
    ?>

</body>
</html>