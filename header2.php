<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>online examination system</title>
		
	<link rel="stylesheet" type="text/css" href="style2.css"/>
	<link rel="stylesheet" type="text/css" href="style3.css"/>
	
</head>
<body style="background-image:url(5.jpg);
background-repeat: no-repeat;
background-attachment: fixed;
background-position:center;">

<header >
	<div class="head">
		<h1 >
		ONLINE EXAMINATION <span style=" font-size:20px;"> Engage, Analyze and Improve </span>
		</h1>


		<table class="navigation">
			<tr>
				<td class="td"><a href="index.php" target="_blank" class="a">Home</a></td><td>|</td>
				<td class="td"><a href="about.php" target="_blank" class="a">About</a></td><td>|</td>
				<td class="td"><a href="contact.php" target="_blank" class="a">Contact</a></td>
				<td >
					<form action="includes/logout.inc.php" >
						<button class="a animated zoomIn" style="color:black;float:right;">LOG OUT</button>
					</form>
				</td>
				
			</tr>
		</table>


</div>
</header>