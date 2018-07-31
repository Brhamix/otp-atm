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
        <br><br><br><br>
        <div class="row">
            <div id="acc-msg"></div>
            <div class="col-md-4"></div>
            <div style="color: #fff;" class="col-md-4">
               <h2> Do You Want To  complete Transfer Transaction?</h2>
               <h3>Account Number: <?= $_SESSION['account']; ?> </h3>
               <h3>Amount: <?= $_SESSION['amount']; ?> </h3>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <input type="hidden" id="account" value="<?= $_SESSION['account']; ?>" name="">
            <input type="hidden" id="amount" value="<?= $_SESSION['amount']; ?>" name="">
            <div class="col-md-2"></div>
                <!--left side button-->
            <div style="text-align: right;" class="col-md-2">
                <br><br><br><br><br>
                <a href="transfer.php"><button style="font-size: 45px; width: 60px;">&nbsp;</button></a>  
            </div>
            <div class="col-md-4">
                <br><br><br>
                <br><br><br>
                <p>   
                    <span style="text-align: left; color: #fff; font-size: 26px;">No</span>
                    <span style="float: right; color: #fff; font-size: 26px;">Yes</span> 
                </p>
            </div>
            <!--Right side button-->
            <div style="text-align: left;" class="col-md-2">
                <br><br><br><br><br>
                <button onclick="return send()" style="font-size: 45px; width: 60px;">&nbsp;</button>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
     <script>
        function send()
        {
            var account = $("#account").val();
            var amount = $("#amount").val();

            $.ajax({
                type: "POST",
                url: "hub/transfer-otp.php",
                data:{
                    account:account,
                    amount:amount
                },
                cache: false,
                success: function(data)
                {
                    $("#acc-msg").html(data);
                }
            });
            return false;
        }
    </script>
</body>
</html>