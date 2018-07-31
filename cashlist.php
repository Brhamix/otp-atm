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
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h4 style="text-align: center; color: white;">Please Select an Amount from the list below</h4>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div style="text-align: center;" id="w-msg"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
                <!--left side button-->
            <div style="text-align: right;" class="col-md-1">
                <br><br><br><br>
                <form method="POST" onsubmit="return am500()">
                    <input type="hidden" id="btn500" name="" value="500">
                    <button id="500" style="font-size: 35px; width: 100px;">500</button>
                    <br><br>
                </form>
                <form method="POST" onsubmit="return am1000()">
                    <input type="hidden" id="btn1000" name="" value="1000">
                    <button id="1000"  style="font-size: 35px; width: 100px;">1000</button>
                    <br><br>
                </form>
                <form method="POST" onsubmit="return am2000()">
                    <input type="hidden" id="btn2000" name="" value="2000">
                    <button id="2000"  style="font-size: 35px; width: 100px;">2000</button>
                    <br><br>
                </form>
                <form method="POST" onsubmit="return am3000()">
                    <input type="hidden" id="btn3000" name="" value="3000">
                    <button id="3000"  style="font-size: 35px; width: 100px;">3000</button>
                </form>
            </div>
            <div class="col-md-6">
                <br><br><br><br><br>
                <p>
                    <span style="text-align: left; color: #fff; font-size: 20px;"></span>
                    <span style="float: right; color: #fff; font-size: 20px;"></span>
                </p>
                <br><br>
                <p>
                    <span style="text-align: left; color: #fff; font-size: 20px;"></span>
                    <span style="float: right; color: #fff; font-size: 20px;"></span>
                </p>
                <br><br>
               <p>
                    <span style="text-align: left; color: #fff; font-size: 20px;"></span>
                    <span style="float: right; color: #fff; font-size: 20px;"></span>
                </p>
                <br><br>
                <p>
                    <span style="text-align: left; color: #fff; font-size: 20px;"></span>
                    <span style="float: right; color: #fff; font-size: 20px;"></span>
                </p>
            </div>
                <!--Right side button-->
            <div style="text-align: left;" class="col-md-2">
                <br><br><br><br>
                <form method="POST" onsubmit="return am5000()">
                    <input type="hidden" id="btn5000" name="" value="5000">
                    <button id="5000"  style="font-size: 35px; width: 100px;">5000</button>
                    <br><br>
                </form>
                <form method="POST" onsubmit="return am10000()">
                    <input type="hidden" id="btn10000" name="" value="10000">
                    <button id="10000"  style="font-size: 35px; width: 100px;">10000</button>
                    <br><br>
                </form>
                <form method="POST" onsubmit="return am15000()">
                    <input type="hidden" id="btn15000" name="" value="15000">
                    <button id="15000"  style="font-size: 35px; width: 100px;">15000</button>
                    <br><br>
                </form>
                <a href="others.php"><button style="font-size: 35px; width: 100px;">Other</button>
                </a>
            </div>
            <div class="col-md-2"></div>
        </div>
     </div>
     <script>
        function am500()
        {
            var amount = $("#btn500").val();

            $.ajax({
                type: "POST",
                url: "hub/withdraw-otp.php",
                data: {amount:amount},
                cache: false,
                success: function(data)
                {
                    $("#w-msg").html(data);
                }
            });
            return false;
        }

        function am1000()
        {
            var amount = $("#btn1000").val();

            $.ajax({
                type: "POST",
                url: "hub/withdraw-otp.php",
                data: {amount:amount},
                cache: false,
                success: function(data)
                {
                    $("#w-msg").html(data);
                }
            });
            return false;
        }

        function am2000()
        {
            var amount = $("#btn2000").val();

            $.ajax({
                type: "POST",
                url: "hub/withdraw-otp.php",
                data: {amount:amount},
                cache: false,
                success: function(data)
                {
                    $("#w-msg").html(data);
                }
            });
            return false;
        }

        function am3000()
        {
            var amount = $("#btn3000").val();

            $.ajax({
                type: "POST",
                url: "hub/withdraw-otp.php",
                data: {amount:amount},
                cache: false,
                success: function(data)
                {
                    $("#w-msg").html(data);
                }
            });
            return false;
        }

        function am5000()
        {
            var amount = $("#btn5000").val();

            $.ajax({
                type: "POST",
                url: "hub/withdraw-otp.php",
                data: {amount:amount},
                cache: false,
                success: function(data)
                {
                    $("#w-msg").html(data);
                }
            });
            return false;
        }

        function am10000()
        {
            var amount = $("#btn10000").val();

            $.ajax({
                type: "POST",
                url: "hub/withdraw-otp.php",
                data: {amount:amount},
                cache: false,
                success: function(data)
                {
                    $("#w-msg").html(data);
                }
            });
            return false;
        }

        function am15000()
        {
            var amount = $("#btn15000").val();

            $.ajax({
                type: "POST",
                url: "hub/withdraw-otp.php",
                data: {amount:amount},
                cache: false,
                success: function(data)
                {
                    $("#w-msg").html(data);
                }
            });
            return false;
        }
     </script>
</body>
</html>