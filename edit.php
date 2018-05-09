<?php
include "dbconnect.php";
        session_start();
        $sess = $_SESSION['login_id'];
            if(isset($_POST['name'])&&isset($_POST['initial'])&&isset($_POST['email'])&&isset($_POST['address'])&&isset($_POST['city'])&&isset($_POST['zipcode'])&&isset($_POST['dob'])&&isset($_POST['gender'])&&isset($_POST['fathername'])&&isset($_POST['mothername'])&&isset($_POST['nationality'])&&isset($_POST['martialstatus'])&&isset($_POST['mothertongue'])&&isset($_POST['languages']))
                {
                    $name = $_POST['name'];
                    $initial = $_POST['initial'];
                    $address = $_POST['address'];
                    $city=$_POST['city'];
                    $zipcode=$_POST['zipcode'];
                    $email=$_POST['email'];
                    $dob=$_POST['dob'];
                    $gender=$_POST['gender'];
                    $fathername=$_POST['fathername'];
                    $mothername=$_POST['mothername'];
                    $nationality=$_POST['nationality'];
                    $martialstatus=$_POST['martialstatus'];
                    $mothertongue=$_POST['mothertongue'];
                    $languages=$_POST['languages'];
                    $userid = $sess;

                        mysqli_query($link, "INSERT INTO `basicdetails`(`id`, `userid`, `name`, `initial`, `address`, `city`, `zipcode`, `email`, `dob`, `gender`, `fathername`, `mothername`, `nationality`, `martialstatus`, `mothertongue`, `languages`) VALUES (NULL,$userid,'$name','$initial','$address','$city',$zipcode,'$email','$dob','$gender','$fathername','$mothername','$nationality','$martialstatus','$mothertongue','$languages')");

    // header("location:edit1.php");
                }

    error_reporting(0);
        if (isset($_POST['submit'])&&isset($_FILES['file']))
        {
            $username=$_POST['name'];
            $userid = $sess;
            $user = $username. $userid;
            //$filename=basename($_FILES["file"]["name"]);

            $tmp=$_FILES["file"]["tmp_name"];
            $extension = explode("/", $_FILES["file"]["type"]);
            $name=$user.".".$extension[1];

            mysqli_query($link,"INSERT INTO `photo`(`id`, `userid`, `images`) VALUES ('','$userid','$name')");

            move_uploaded_file($tmp, "images/" .$user.".".$extension[1]);
            }
            if (isset($_POST['submit'])&&isset($_FILES['file']))
            {
                $tmp=$_FILES["doc"]["tmp_name"];
                $file_name=$_FILES['doc']['name'];
                //$extension_resume = explode("/", $_FILES["doc"]["type"]);
                //$name_resume=$user.".".$extension_resume[1];
                mysqli_query($link,"INSERT INTO `resume`(`id`, `userid`, `document`) VALUES ('','$userid','$file_name')");

                move_uploaded_file($tmp, "resume/" .$file_name);
                header("location:edit1.php");


            }

?>
<html>
    <head>
        <title>Edit</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/jquery2.0.3.min.js"></script>


        <link href="../style.css" type="text/css" rel="stylesheet">
    </head>

<style>
    body
    {
}
    .reg-form
    {
        box-shadow: 2px 2px 2px  #122b40,;
    }
    .row span
    {
        color: rgba(23,18,47,0.81);
    }
</style>

<body>
    <div style="background: rgba(255,255,255,.5) ;height: 55px;width: 100%">
        <p style="font-size: 30px;text-align: center;color: #f24a54;padding-top: 5px ">CREATE YOUR OWN PORTFOLIO</p>
    </div>
    <div class="container ">

        <div align="center" class="validation-grids widget-shadow" data-example-id="basic-forms">
            <div class="form-body form-body-info">

            <form data-toggle="validator" method="post" name="myform" enctype="multipart/form-data">
            <div class="input-info">
                <h3>Basic Details</h3>
            </div>
    <div class="row">
        <div class="col-sm-4 form-group valid-form" >
            <div><span>Full Name :</span></div>
            <input type="text" ng-model="name" name="name" required placeholder="Full Name">

        </div>
        <div class="col-sm-2 form-group valid-form">
            <div><span>Initial :</span></div>
            <input style="width: 80px" type="text" name="initial" ng-model="initial" required placeholder="Initial">

        </div>
    </div>

        <div class="row ">
        <div class="col-sm-4 form-group valid-form" >
            <div><span>Address :</span></div>

            <input style="width: 220px" type="text" name="address" ng-model="address" required placeholder="Address">

        </div>


        <div class="col-sm-4 form-group valid-form"  >
            <div><span>City :</span></div>
            <input type="text" name="city" ng-model="city" required placeholder="City">

        </div>
        <div class="col-sm-4 form-group valid-form" >
            <div><span>Zip Code :</span></div>
            <input type="text" name="zipcode" ng-model="zipcode" required placeholder="Zin Code">

        </div>
        </div>
        <div class="row">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Email" data-error="That email address is invalid" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
            </div>
            <div class="col-sm-4 form-group valid-form"  style="padding-top: 8px">
                <div><span>Date OF Birth : </span></div>

                <input type="text" style="width: 188px;" class="form-control" name="dob" ng-model="dob" required placeholder="DD/MM/YYYY ">

        </div>
            <div class="col-sm-4 form-group valid-form" style="padding-top: 8px" >
                <div><span>Gender : </span></div>

                <select name="gender" ng-model="gender" required style="height: 40px;width: 190px" class="form-control">
                <option>Select Gender</option>
                <option>Male</option>
                <option>Female</option>
            </select>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 form-group valid-form" >
                <div><span>Father Name : </span></div>

                <input type="text" name="fathername" ng-model="fname" required placeholder="Father Name">


        </div>
            <div class="col-sm-4 form-group valid-form">
                <div><span>Mother Name : </span></div>

                <input type="text" name="mothername" ng-model="mothername" required placeholder="Mother Name">

        </div>
        </div>
        <div class="row">
            <div class="col-sm-4 form-group valid-form" >
                <div><span>Nationality: </span></div>

                <input type="text" name="nationality" ng-model="nationality" required placeholder="Nationality">

        </div>
            <div class="col-sm-4 form-group valid-form">
                <div><span>Martial Status : </span></div>

                <input type="text" name="martialstatus" ng-model="martialstatus" required placeholder="Martial Status">

        </div>

        </div>
        <div class="row">
            <div class="col-sm-4 form-group valid-form">
                <div><span>Mothertongue : </span></div>

                <input type="text" name="mothertongue" ng-model="mothertongue" required placeholder="Mothertongue">

        </div>
            <div class="col-sm-4 form-group valid-form">
                <div><span>languages known : </span></div>

                <input type="text" name="languages" ng-model="languages" required placeholder="eg:tamil,telugu">

        </div>


    <div class="row">

    <div class="col-sm-6 form-group valid-form" style="padding-top: 15px">
        <span>Upload Your Photo : </span>
        <input  class="btn btn-default" type="file" name="file" >
    </div>
        <div class="col-sm-6 form-group valid-form" style="padding-top: 15px" >
            <span>Upload Your Resume : </span>
            <input class="btn btn-default"  type="file" name="doc" >
        </div>
    </div>
        <div class="form-group " style="padding-top: 25px" align="center" >
            <input style="width: 170px;font-size:25px;height: 40px;padding-bottom:15px" class="btn btn-primary" type="submit" name="submit" value="Submit">
        </div>
            </form>
        </div>
    </div>
</div>

    <script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
    <script src="js/validator.min.js"></script>
</body>
</html>

