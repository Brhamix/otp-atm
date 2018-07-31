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
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <h4 id="header" style="color: white;">Please Select Transaction Option</h4>
                <div id="bal-stat"></div>
            </div>
            <div class="col-md-2"></div>
        </div>
     	<div id="button" class="row">
            <div class="col-md-3"></div>
                <!--left side button-->
     		<div style="text-align: right;" class="col-md-1">
     			<br><br><br><br>
     			<a href="cashlist.php"><button style="font-size: 45px; width: 60px;">&nbsp;</button></a><br><br>
                <form method="POST" onsubmit="return checkBal()">
                    <input type="hidden" id="balance" value="balance" name="">
     			    <button style="font-size: 45px; width: 60px;">&nbsp;</button>
     			    <br><br>
                </form>
     			<button style="font-size: 45px; width: 60px;" disabled>&nbsp;</button>
     			<br><br>
     		</div>
     		<div class="col-md-4">
 				<br><br><br><br><br>
                    <p>
                    <span style="text-align: left; color: #fff; font-size: 20px;">Withdrawal</span>
                    <span style="float: right; color: #fff; font-size: 20px;">Transfer</span>
                    </p>
					<br><br>
                    <p>
                    <span style="text-align: left; color: #fff; font-size: 20px;">Check balance</span>
                    <span style="float: right; color: #fff; font-size: 20px;">Change Pin</span> 
                    </p>
                    <br><br>
                    <p>
                    <span style="text-align: left; color: #fff; font-size: 20px;">Recharge Phone</span>
                    <span style="float: right; color: #fff; font-size: 20px;">Cancel</span> 
                    </p>
     		</div>
                <!--Right side button-->
     		<div style="text-align: left;" class="col-md-3">
     			<br><br><br><br>
                <a href="transfer.php"><button style="font-size: 45px; width: 60px;">&nbsp;</button></a>
     			<br><br>
                <a href="change-pin.php"><button style="font-size: 45px; width: 60px;">&nbsp;</button></a>
     			<br><br>
     			<a href="anotherop.php"><button style="font-size: 45px; width: 60px;">&nbsp;</button></a>
     			<br><br>
     		</div>
     		<div class="col-md-2"></div>
     	</div>
     </div>
     <script>
        function checkBal()
        {
            var balance = $("#balance").val();

            $.ajax({
                type: "POST",
                url: "hub/check-balance.php",
                data:{balance:balance},
                cache: false,
                success: function(data)
                {
                    $("#bal-stat").html(data);
                    $("#button").remove();
                    $("#header").remove();
                }
            });
            return false;
        }
     </script>
</body>
</html>