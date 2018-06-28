<?php
	include 'header.php';
?>
<?php
			$url2="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

		if(strpos($url2,'error=emptylogin')!==false){
			echo "FILL OUT username and password or REGISTER YOURSELF<br/>";
		}
		if(isset($_SESSION['id'])){
					echo "You are logged in as user-id:: ";
					echo  $_SESSION['id']; 
					
				}  
				else{
					echo "you are not logged in!";
					
				}
	?>
<div class="container">
<div id="left">
<p style="color:black; width:60%; font-size:20px; margin-top:60px; font-family:arial; color:#000055; "> 
	<b>Online test</b> is an plateform for students to take varbal and aptitude tests online. 
	It provieds mock test for campus placements as well as other exam. Using Online test, you can 
	take any test anu number of times and see your performance metrices, Preparing for Campus Placement
	or any other examination, online test provides you a number of mock tests to <b>Engage, Analyze </b>
	your performance and <b>Improve</b> your skills!</p>
<h1 style="color:black ; font-family:arial;">Take Test <a href="signup.php">Now </a>>></h1>
</div>
<!--update and news location here-->
<div style="margin-top:-500px;">
<?php
	//include 'news.php';
?>
</div>
<div style="margin-top:360px;">
<?php
	include 'ad.php';
?>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<?php
	include 'footer.php';
?>