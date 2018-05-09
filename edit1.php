<?php
include "dbconnect.php";
session_start();
$sess = $_SESSION['login_id'];
if(isset($_POST['SSLC'])&&isset($_POST['HSC'])&&isset($_POST['degree'])&&isset($_POST['percent']))
{
    $userid = $sess;

    $sslc = $_POST['SSLC']."%";
    $hsc= $_POST['HSC']."%";
    $degree = $_POST['degree'];
    $percent = $_POST['percent']."%";
    mysqli_query($link,"INSERT INTO `education`(`id`, `userid`, `SSLC`, `HSC`, `degree`, `percent`) VALUES ('',$userid,'$sslc','$hsc','$degree','$percent')");
    header("location:view.php");
}
if (isset($_POST['techtopic']) && isset($_POST['aboutit'])) {
    $techtopic = $_POST['techtopic'];

    $aboutit = $_POST['aboutit'];

    $userid = $sess;

    for ($i = 0; $i < sizeof($techtopic); $i++) {
        $tech1 = $techtopic[$i];
        $about2 = $aboutit[$i];
        mysqli_query($link, "INSERT INTO `technicalskill`(`id`, `userid`, `techtopic`, `aboutit`) VALUES ('','$userid','$tech1','$about2')");
        /**/
    }

}
if (isset($_POST['areaofinterset'])) {
    $areaofinterest = $_POST['areaofinterset'];
    $userid = $sess;

    for ($i = 0; $i < sizeof($areaofinterest); $i++) {
        $aoi = $areaofinterest[$i];
        mysqli_query($link, "INSERT INTO `areaofinterset`(`id`, `userid`, `areaofinterset`) VALUES ('','$userid','$aoi')");
    }
}
if(isset($_POST['compname'])&&isset($_POST['compdesc'])) {
    $compname = $_POST['compname'];
    $compdesc = $_POST['compdesc'];
    $userid = $sess;
    for ($i = 0; $i < sizeof($compname); $i++) {
        $comp_name = $compname[$i];
        $comp_desc = $compdesc[$i];

        mysqli_query($link, "INSERT INTO `invimt`(`id`, `userid`, `compname`, `compdesc`) VALUES ('','$userid','$comp_name','$comp_desc')");
    }
    header("location:view.php");
}
/*if (isset($_POST['companyname'])) {
    $companyname = $_POST['companyname'];
    $userid = $sess;

    for ($i = 0; $i < sizeof($companyname); $i++) {
        $compname = $companyname[$i];
        mysqli_query($link, "INSERT INTO `industrialexperience`(`id`, `userid`, `companyname`) VALUES ('','$userid','$compname')");
    }
}*/
if (isset($_POST['projecttopic']) && isset($_POST['description'])) {
    $projecttopic = $_POST['projecttopic'];

    $description = $_POST['description'];
    for ($i = 0; $i < sizeof($projecttopic); $i++) {
        $ptopic = $projecttopic[$i];
        $pdescription = $description[$i];
        mysqli_query($link, "INSERT INTO `project`(`id`, `userid`, `projecttopic`, `description`) VALUES ('','$userid','$ptopic','$pdescription') ");
    }
    header("Location: home.php");
}

?>
<html>
<head>
    <title> main content</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <link href="../style.css" type="text/css" rel="stylesheet">
    <script src="js/pagescript.js" type="text/javascript"></script>
</head>

<body>
<div>
    <div align="center" class="validation-grids widget-shadow" style="background-color:rgba(0,0,0,0)" data-example-id="basic-forms">
        <div class="form-body form-body-info">

            <form data-toggle="validator" method="post" >

    <div class="container">
    <div>
        <h3>EDUCATION</h3>
        <div class="row">
            <div class="col-sm-3 form-group valid-form">
                <div><span>SSLC Percsntage :</span></div>
                <input type='text' name="SSLC" ng-model="SSLC" required  placeholder='SSLC/CBSE'>

            </div>
            <div class="col-sm-4 form-group valid-form">
                <div><span>HSC Percsntage :</span></div>
                <input type='text' style="width: 150px;" name="HSC" ng-model="HSC" required placeholder='Higher Secondary '>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 form-group valid-form">
                <div><span>Select Degree :</span></div>
                <select style="width:210px;height: 40px;" class="form-control" required name="degree" >
                    <option>B.E (CSE)</option>
                    <option>B.E (ECE)</option>
                    <option>B.E (EEE)</option>
                    <option>B.E (CIVIL)</option>
                    <option>B.E (MECHANICAL)</option>


                </select>
            </div>
            <div  class="col-sm-2 form-group valid-form">
                <div><span>Percsntage :</span></div>
                <input style="width: 80px" type="text" name="percent" required>
            </div>
        </div>
    </div>
    <div>
        <div align="left">
            <h3>TECHNICAL SKILLS</h3>
        <div id="technicalskill" class="form-group valid-form" >
            <div style='padding-left: 15px' >
                <input style='padding-left: 10px;max-width: 150px;' required type='text' name="techtopic[]"  placeholder='eg:Gaming,Designing '>
                <input type='text' style="max-width: 300px;" required name="aboutit[]" placeholder='eg:unity,dreamweaver '>
            </div>
        </div>
        <div >
            <a href="#"> <span style="padding-left: 20px" onclick="addtextbox()" class="glyphicon glyphicon-plus-sign">AddCategory</span></a>
        </div>
    </div>
    <div align="left" >
        <h3>AREA OF INTEREST</h3>
        <div id="areaofinterest" class="form-group valid-form" >
            <div style='padding-left: 15px' >
                <input style='padding-left: 10px;max-width: 300px;' type='text' name="areaofinterset[]" required  placeholder='eg: Web Develpment,Game Develpment'>
            </div>
        </div>
        <div>
            <a href="#"> <span style="padding-left: 20px" onclick="addtextbox1()" class="glyphicon glyphicon-plus-sign">AddCategory</span></a>
        </div>
    </div>
    <!--Industrial visit & Implant training -->
    <div align="left">
        <h3>Industrial visit & Implant training</h3>
        <div id="invimt" >
            <div style='padding-left: 15px' class="form-group valid-form">
                <input style='padding-left: 10px;max-width: 150px;' type='text' name='compname[]' required  placeholder='company Name'>
                <input type='text' style="max-width: 300px;" name='compdesc[]' required placeholder='Description'>
            </div>
        </div>
        <div >
            <a href="#"> <span style="padding-left: 20px" onclick="addtextbox4()" class="glyphicon glyphicon-plus-sign">AddCategory</span></a>
        </div>
    </div>
    <!-- <div>
         <h3>INDUSTRIAL EXPERIENCE</h3>
         <div id="industrialexp" class="form-group valid-form">
             <div style='padding-left: 15px'>
                 <input style='padding-left: 10px;width: 150px;' type='text' name="companyname[]"  placeholder='eg:HCL,WIPRO'>
             </div>
         </div>
         <div style="padding-left:200px ">
             <a href="#"> <span style="padding-left: 20px" onclick="addtextbox2()" class="glyphicon glyphicon-plus-sign">AddCategory</span></a>
         </div>
     </div>
     <div>-->
    <div align="left">
    <span><h3>PROJECT</h3>
        <div id="project" class="form-group valid-form" >
            <div style='padding-left: 15px' >
                <input style='padding-left: 10px;max-width: 150px;' type='text' name='projecttopic[]' required  placeholder='Project Title'>
                <input type='text' style="max-width: 300px;" name='description[]' required placeholder='Description'>
            </div>
        </div>
        <div >
            <a href="#"> <span style="padding-left: 20px" onclick="addtextbox3()" class="glyphicon glyphicon-plus-sign">AddCategory</span></a>
        </div>
    </div>
    <div align="center" style="padding-top: 40px" class="form-group">
        <input style="max-width: 170px;max-width:auto;min-height: 40px" class="btn btn-primary" type="submit" name="upload" value="upload">
    </div>

</form>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
<script src="js/validator.min.js"></script>
</body>
</html>
