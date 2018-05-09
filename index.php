<?php
include "dbconnect.php";
session_start();

?>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
        <script src="js/jquery2.0.3.min.js"></script>
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>


    <style>

        .validation-grids input[type=text],input[type=email],input[type=password]
        {
            max-width: 250px;
            padding-top: 10px;

        }
        .container
        {
            max-width: 380px;
        }
    </style>
    <body>
    <div style="padding-top: 100px">
        <div class="container">
            <center>
                <div align="center" class="validation-grids widget-shadow" data-example-id="basic-forms">
                    <div class="input-info">
                        <header>Sign In </header>
                        <span>OR<a style="text-decoration: none" href="reg.php"> Create an account</a></span>
                    </div>
                    <div class="form-body form-body-info">
                        <form data-toggle="validator" method="post">
                            <div class="form-group has-feedback">
                                <input type="email" class="form-control" name="username" placeholder="Email" data-error="That email address is invalid" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <span class="help-block with-errors"></span>
                            </div>
                            <div class="form-group valid-form">
                                <input type="password" class="form-control" id="inputName" name="password" placeholder="Password" required >
                            </div>
                            <div>
                                <a style="text-decoration: none" href="password/send_link.php"><p style="color: rgba(27,120,241,1);padding-left: 100px;">Forgot Password</p></a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div> <script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
    <script src="js/validator.min.js"></script>

    </body>

    </html>
<?php
if(isset($_POST['username'])&&isset($_POST['password']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT `id`, `name`, `email`, `password`, `phone` FROM `register` WHERE `email`='$username' AND `password`='$password'";
    $result=mysqli_query($link,$sql);
    $count = mysqli_num_rows($result);
    if($count > 0)
    {
        session_start();
        $_SESSION['login_user'] = $username;
        $sessionstart = $_SESSION['login_user'];
        $sql = mysqli_query($link,"SELECT * FROM `register` WHERE `email`='$sessionstart' ");
        $getid = mysqli_fetch_array($sql);
        $_SESSION['login_id']=$getid[0];
        $sess = $_SESSION['login_id'];
        $check = mysqli_query($link,"SELECT * FROM `basicdetails` WHERE `userid`=$sess");
        $result = mysqli_fetch_array($check);
        if($result != null) {
            header("Location: home.php");
        }
        else
        {
            header("Location: edit.php");
        }
    }
    else
    {
        echo "Username and password is Invalid";
    }
}
?>