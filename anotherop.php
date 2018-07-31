<?php

# page authenticator
include ("auth/functions.php");

if (!loginAdmin()) {
    # code...
    header("location: index.php");
}
?>
<!DOCTYPE html>
<!--
Name: Automated Teller Machine Using One time password WebPage
Template version: version 1.0.1
Author: Dev Jeremy Jake & Codegrenade
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ATM</title>
    <meta name="description" content="Secure ATM using One time password">
    <meta name="keywords" content="Automated, teller, machine, One time password">
    <meta name="author" content="Jeremy Jake & Codegrenade">
    <link rel="icon" type="image/png" href="img/rss.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <!-- END: Styles -->
</head>
<body style="background-color: #404040;">
     <div class="container">
        <br><br><br><br><br><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
               <h2 style="color: white; text-align: center;">
               Do You Want To Perform Another Transaction ?</h2>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
                <!--left side button-->
            <div style="text-align: right;" class="col-md-3">
                <br><br><br><br><br>
                <a href="dal/"><button style="font-size: 45px; width: 60px;">&nbsp;</button></a>
            </div>
            <div class="col-md-4">
                    <br><br><br><br>
                   <p>
                    <br><br>
                    <span style=" color: #fff; font-size: 20px;">No</span>
                    <span style="float: right; font-size: 20px; color: #fff;">Yes</span> 
                   </p>
            </div>
                <!--Right side button-->
            <div style="text-align: left;" class="col-md-3">
                <br><br><br><br><br>
                <a href="pin.php"><button style="font-size: 45px; width: 60px;">&nbsp;</button></a>
            </div>
            <div class="col-md-3"></div>
        </div>
     </div>
</body>
</html>