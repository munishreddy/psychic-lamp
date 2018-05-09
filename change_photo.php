<?php
include "dbconnect.php";
session_start();
$sess = $_SESSION['login_id'];
//$sess =1;
if (!empty($_FILES['file']) )
{
    $check = mysqli_query($link,"SELECT * FROM `basicdetails` WHERE `userid` ='$sess'");
    $name = mysqli_fetch_array($check);
    $username=$name[2];
    $userid = $sess;
    $user = $username. $userid;
    //$filename=basename($_FILES["file"]["name"]);

    $tmp=$_FILES["file"]["tmp_name"];
    $extension = explode("/", $_FILES["file"]["type"]);
    $name=$user.".".$extension[1];
    mysqli_query($link,"UPDATE `photo` SET `images`='$name' WHERE `userid` = '$sess'");

    move_uploaded_file($tmp, "pictures/" .$user.".".$extension[1]);
    header("location:home.php");
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<style>
    .container
    {
        max-width: 400px;
        box-shadow: 0px 0px 2px black;
    }
    input[type=file]
    {
        max-width: 250px;
    }
</style>
<body>
<div class="row">
    <div class="col-xs-10"></div>
    <div class="col-xs-2">
        <a href="../logout.php"><button type="submit" class="btn btn-default" value="logout">Signout</button></a>
    </div>
</div>
<div class="container">
<form method="post" enctype="multipart/form-data">
<div align="center"  style="padding-top:35px " >
    <span style="font-size: 25px;font-weight: 500" >Upload Your Photo : </span>
    <div style="padding-top: 10px">
        <input class="form-control"  type="file" name="file" >
    </div>
    <div style="padding-top: 10px">
    <input type="submit" class="btn btn-default" name="submit" value="upload">
    </div>
</div>
</form>
</div>
</body>
</html>
