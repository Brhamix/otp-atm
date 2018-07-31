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
    <!--Start of the main page-->
    <div class="container">
    	<div class="row">
    		<div class="col-md-1"></div>
    		<div class="col-md-2"></div>
    		<div class="col-md-6">
    			<div style="text-align: center;" class="login-box">
    				<br><br><br><br>
    				<h4 style="color: #fff;">Welcome <?= '<span style="color: green;">'.$_SESSION['name'].'</span>'; ?>
    					<br>Please enter Recipient Account Number</h4>
    				<br><br>
                    <div style="text-align: center;" id="acc-msg"></div>
    				<input minlength="10" maxlength="10" style="font-size: 32px; width: 205px; background-color: #404040; color: #fff; text-align: center; " type="text" id="textbox" name="">
                   <br><br>
                   <div id="alpha">
                   <button id="1" class="key" style="font-size: 45px; width: 60px;">1</button> &nbsp;     <button id="2" class="key" style="font-size: 45px; width: 60px;">2</button> &nbsp;     <button id="3" class="key" style="font-size: 45px; width: 60px;">3</button> <br><br>

                   <button id="4" class="key" style="font-size: 45px; width: 60px;">4</button> &nbsp;     <button id="5" class="key" style="font-size: 45px; width: 60px;">5</button> &nbsp;     <button id="6" class="key" style="font-size: 45px; width: 60px;">6</button><br><br>

                   <button id="7" class="key" style="font-size: 45px; width: 60px;">7</button> &nbsp;     <button id="8" class="key" style="font-size: 45px; width: 60px;">8</button> &nbsp;     <button id="9" class="key" style="font-size: 45px; width: 60px;">9</button><br><br>    <button id="0" class="key" style="font-size: 45px; width: 60px;">0</button><br><br>
                   </div>

                   &nbsp;<a href=""><button class="btn btn-danger" style="font-size: 25px; width: 110px;">Clear</button></a> &nbsp;<button onclick="return AccNum()" class="btn btn-success" style="font-size: 25px; width: 110px;">Proceed</button>
    			</div>
    		</div>
    		<div class="col-md-2"></div>
    		<div class="col-md-1"></div>
    	</div>
    </div>
    <script>
    	function AccNum()
    	{
    		var account = $("#textbox").val();

    		$.ajax({
    			type: "POST",
    			url: "hub/transfer-account.php",
    			data:{account:account},
    			cache: false,
    			success: function(data)
    			{
    				$("#acc-msg").html(data);
    			}
    		});
    		return false;
    	}
    </script>
    <script src="js/key.js"></script>
</body>
</html>