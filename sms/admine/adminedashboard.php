<?php
session_start();

$id=$_SESSION['uid'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
        
    body{
        margin:0px;
        padding:0px;
    }
.head{
    text-align: center;
    background-color: rgba(119, 28, 9, 0.904);
    height: 80px;
    color:rgb(226, 228, 243);
    font-size: 20px;
    margin-top: 0px;
    line-height: 50px;
    margin-left: 20%;
    margin-right: 10%;
    display: block;
}
.dasboard{
 background-color:rgb(7, 250, 136);
 margin-left: 20%;
 margin-right: 10%;
 font-size: 30px;

}
        </style>
</head>
<body bgcolor="yellow">
    <div class="head">
    <h2 style="float: left; display:flex; "><?php echo $_SESSION['username']; ?></h2>
    <h4 ><a href="logout.php" style="color: wheat;text-decoration:none;float: right; margin-right:30px; font-size:20px;" >Logout</a></h4>
        
        <h1>Wlecome  to  Admine Dashboard</h1>
    </div>
    <div class="dasboard" align="center">
    <table  style="width: 80%; ">
<thead>
    <tr><td>1.</td><td><a href="insert.php">Insert student detail </a></td></tr>
    <tr><td>2.</td><td><a href="update.php">update student detail</a></td></tr>
    <tr><td>3.</td><td><a href="delete.php">delete student detail</a></td></tr>
</thead>
    </table>
</div>
</body>
</html>