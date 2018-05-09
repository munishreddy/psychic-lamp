<!doctype html>
<!--suppress ALL -->
<html>
<head>
<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
    <script src="js/jquery2.0.3.min.js"></script>
    <link href="../style.css" type="text/css" rel="stylesheet">

    <title>Registration</title>
</head>
<body>

<div class="container"  style="padding-top:100px;padding-bottom: 50px;max-width: 380px; ">
    <center>
        <div align="center" class="validation-grids widget-shadow" data-example-id="basic-forms">
    <div class="input-info">
        <header>Sign Up :</header>
    </div>
    <div class="form-body form-body-info">
        <form data-toggle="validator" method="post">
            <div class="form-group valid-form">
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required>
            </div>
            <div class="form-group valid-form">
                <input type="text" class="form-control" id="inputName" name="username" placeholder="username" required>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Email" data-error="That email address is invalid" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
            </div>
            <div class="form-group valid-form">
                <input type="password" class="form-control" id="inputName" name="password" placeholder="Password" required >
            </div>
            <div class="form-group valid-form">
                <input type="text" class="form-control" id="inputName" name="phone" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>
    </div>
</div>
    </center>
</div>



<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
<script src="js/validator.min.js"></script>


</body>
</html>

<?php
include "dbconnect.php";
if(isset($_POST['name'])&&isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['phone']))
{

    $name = $_POST['name'];
    $username =$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $check = mysqli_query($link,"SELECT * FROM `register` WHERE `username` ='$username'");
    if(mysqli_num_rows($check)>0)
    {
        echo "username exits";
    }
    else
    {
        echo "username avilable";
    }

    $sql = mysqli_query($link,"SELECT * FROM `register` WHERE `email` = '$email'");
    if(mysqli_num_rows($sql) == null) {

        $sql = "INSERT INTO `register`(`id`, `name`,`username`, `email`, `password`, `phone`) VALUES ('','$name','$username','$email','$password','$phone')";
        mysqli_query($link, $sql);
        header("location:index.php");
    }
    else
        {
        echo 'Email already exits';
    }
}
    ?>