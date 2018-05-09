
<?php
include "dbconnect.php";
session_start();
$sess = $_SESSION['login_id'];
$check = mysqli_query($link,"SELECT * FROM `basicdetails` WHERE `userid` = $sess");
$getdata = mysqli_fetch_array($check);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/index.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
    $check = mysqli_query($link,"SELECT * FROM `basicdetails` WHERE `userid` = $sess");
    $getresume = mysqli_fetch_array($check);
    ?>
    <title><?php echo $getresume[2]; ?></title>

</head>
<style>
    body .row
    {
        text-transform: capitalize;
    }
    strong
    {
        text-transform: capitalize;

    }
    .row .dropdown-menu ul li{
        max-height: 30px;
        max-width: 150px;
        background-color: #fa4c81;
        background-blend-mode: color-burn;
        display: block;
    }
    a{
        text-decoration: none;
    }
</style>

<body>
<div class="row" style="background-color: #090a23;background-blend-mode: color-dodge;">
    <div class="col-xs-10" >
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Edit Information <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="update/basic.php">Basicdetails</a></li>
                        <li><a href="update/education.php">Education</a></li>
                        <li><a href="update/technical.php">Skills</a></li>
                        <li><a href="update/areaofinterest.php">Area of Interest</a></li>
                        <li><a href="#">Implant training & Industrial Visit</a></li>
                        <li><a href="update/project.php">Project</a></li>
                        <li class="divider"></li>
                        <li><a href="password/send_link.php">Reset Password</a></li>
                        <li><a href="change_photo.php">Change Picture</a></li>
                        <li><a href="change_resume.php">Change Resume</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-xs-2" style="padding-top: 10px">
        <a href="logout.php"> <button type="submit" style="max-width:170px" class="btn btn-default" name="logout"> logout</button></a>
    </div>
</div>
<div class="row">
    <h2 class="heading" align="center"><?php echo $getdata[2]; ?><b style="padding-left: 5px;font-weight: 500">Portfolio</b></h2>
</div>
<div>
    <div class="row-sm-12">

        <div style="position:relative " class="col-sm-3">
            <?php
            $fetch = mysqli_query($link,"SELECT * FROM `photo` WHERE `userid` = $sess ");
            $getphoto = mysqli_fetch_array($fetch);

            ?>

            <div align="center">


                <img style="padding-top:10px;" src="<?php echo "pictures/".$getphoto[2]; ?>" class="img-circle" alt="Cinque Terre" width="220" height="270">


            </div>
            <div align="center" style="padding-top:20px">

                <span style="color:rgb(25,196,135);font-size: 25px"><strong style="font-weight:400;"><?php echo $getdata[2]; ?></strong><strong style="padding-left: 5px;font-weight:500"><?php echo $getdata[3];?></strong> </span><br />


            </div>
            <div align="center" style="padding-top:20px">
                <span  class="fa fa-google-plus" style="padding-left: 25px;color:rgb(25,196,135);"><strong style="padding-left: 10px;font-weight: 500;font-size: 18px"><?php echo $getdata['email']; ?></strong></span><br />
            </div>
            <?php
            $find = mysqli_query($link,"SELECT * FROM `register` WHERE `id` ='$sess'" );
            $getdata = mysqli_fetch_array($find);
            ?>
            <div align="center" style="padding-top:20px">
                <span class="fa fa-phone abt"  style="padding-left: 25px;color:rgb(25,196,135);"><strong style="padding-left: 10px;font-weight: 500;font-size: 18px"><?php echo $getdata[5]; ?></strong></span><br />
            </div>
            <div align="center">
                <?php
                $check = mysqli_query($link,"SELECT * FROM `resume` WHERE `userid` = $sess");
                $getresume = mysqli_fetch_array($check);
                ?>
                <a href="resume/<?php echo $getresume[2]; ?>" style="text-decoration:none">

                    <button type="button" class="fa fa-file-text-o resume_but" /> RESUME</button>

                </a>(In docx format)
            </div>
        </div>



        <!---left contents ends here-->

        <div class="col-sm-9" style="float:right">
            <!--Education-->
            <br />
            <div class="div1">
                <?php
                $getdata = mysqli_query($link,"SELECT * FROM `education` WHERE `userid`= $sess ");
                $getedu = mysqli_fetch_array($getdata);
                ?>

                <span class="fa fa-thumbs-o-up" style="color:rgb(25,196,135)"> EDUCATION </span><hr align="left" />
                <div class="school">

                    <!---10th-->

                    <span style="margin-left:13px;">SSLC</span><br />


                    <center>

                        <div class="sslc">
                            <div class="sslc_clr" style="width: <?php echo $getedu[2]; ?>"><?php echo $getedu[2]; ?></span></div></div>

                    </center><br />

                    <!---12th-->

                    <span style="margin-left:13px;">HSC</span><br />

                    <center>

                        <div class="hsc" >
                            <div class="hsc_clr" style="width: <?php echo $getedu[3]; ?>"><?php echo $getedu[3]; ?></div></div>

                    </center><br />

                    <!---college-->

                    <span style="margin-left:13px;"><?php echo $getedu[4]; ?></span><br />

                    <center>

                        <div class="hsc">
                            <div class="clg_clr" style="width: <?php echo $getedu[5]; ?>"><?php echo $getedu[5]; ?></div></div>

                    </center><br />

                </div>
            </div>
            <br />



            <!---Technical skills-->

            <div class="div2">

                <span class="fa fa-mortar-board" style="color:rgb(25,196,135)"> TECHNICAL SKILLS</span><hr align="left" width="60%" />
                <?php
                $result =mysqli_query($link,"SELECT * FROM `technicalskill` WHERE `userid`='$sess'");
                while($getdata =mysqli_fetch_array($result)) {
                    ?>

                    <ul style="list-style:none">

                        <li class="fa fa-hand-o-right"><strong> <?php echo $getdata[2]; ?> : </strong><?php echo $getdata[3]; ?><br/></li>


                    </ul>
                    <?php
                }
                ?>
            </div>
            <br />


            <!---Area of Interest-->

            <div class="div3">

                <span class="fa fa-thumbs-o-up" style="color:rgb(25,196,135)"> AREA OF INTEREST</span><hr align="left" width="60%" />
                <?php
                $result =mysqli_query($link,"SELECT * FROM `areaofinterset` WHERE `userid`='$sess'");
                while($getdata =mysqli_fetch_array($result)) {

                    ?>
                    <ul style="list-style:none">


                        <li class="fa fa-hand-o-right"> <?php echo $getdata[2]; ?></li>
                        <br/>


                    </ul>
                    <?php
                }
                ?>

            </div>
            <br />



            <div class="div2" style="padding-top:15px;">

                <span class="fa fa-industry" style="color:rgb(25,196,135)"> INDUSTRIAL EXPERIENCE</span><br /><hr align="left" width="60%" />
                <?php

                $result =mysqli_query($link,"SELECT * FROM `invimt` WHERE `userid`='$sess'");
                while($getdata =mysqli_fetch_array($result)) {

                    ?>

                    <ul style="list-style:none">

                        <li class="fa fa-hand-o-right"><strong> <?php echo $getdata[2];?> - </strong> <?php echo $getdata[3] ?>.</li>
                        <br/>

                    </ul>
                    <?php
                }
                ?>

            </div>

            <br />

            <div class="div1">

                <span class="fa fa-vcard-o" style="color:rgb(25,196,135)"> CONTACT</span>

                <hr align="left" width="60%" />

                <ul style="list-style:none">
                    <?php
                    $check = mysqli_query($link,"SELECT  * FROM `basicdetails` WHERE `userid`='$sess'");
                    $getdata = mysqli_fetch_array($check);
                    ?>

                    <li><span class="fa fa-envelope-o abt" style="padding-right: 5px"><?php echo $getdata['email'] ?></span></li>

                    <!--<li><span class="fa fa-phone abt"> 9087016086</span></li>

                    <li><span class="fa fa-facebook-official abt"> <a href="https://www.facebook.com/Bharanipbk"> www.facebook.com/Bharanipbk</a></span></li>

                    <li><span class="fa fa-linkedin abt"> <a href="https://www.linkedin.com/in/bharanipbk/"> www.linkedin.com/in/bharanipbk/</a></span></li>-->

                    <li><span class="fa fa-address-card-o abt" style="padding-right: 5px">  <?php echo $getdata['address'] ?>,<?php echo $getdata['city'] ?> - <?php echo $getdata['zipcode'] ?>.</span></li>

                </ul>

            </div>

        </div>
    </div>
</div>
</body>
</html>

