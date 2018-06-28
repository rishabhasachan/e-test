<?php
	include 'header.php';
?>
<div style="font-size:30px; font-family:bradley hand itc; margin-left:20%; width:60%;">
<h1>RESULT</h1>
</div>
<div style="font-size:20px; font-family:arial; margin-left:5%; width:60%;">
  <?php
  $sub= $_GET['name'];
  $a =$_GET['r1'];
  $b =$_GET['r2'];
  $c =$_GET['r3'];
  $d =$_GET['r4'];
  $e =$_GET['r5'];
  $score=0;
  $noq=5;
  //for HTML EXAM PAPER
	if($sub == "html"){
		if($a=="op1"){
		$score++;}
	if($b=="op1"){
		$score++;}
	if($c=="op1"){
		$score++;}
	if($d=="op1"){
		$score++; }
	if($e=="op1"){
		$score++;}}//NOW FOR CSS EXAM PAPER
	else if($sub == "css"){
		if($a=="op2"){
		$score++;}
	if($b=="op2"){
		$score++;}
	if($c=="op2"){
		$score++;}
	if($d=="op2"){
		$score++; }
	if($e=="op2"){
		$score++;}}//NOW FOR JAVASCRIPT EXAM PAPER
	else if($sub=="js"){
		if($a=="op3"){
		$score++;}
	if($b=="op3"){
		$score++;}
	if($c=="op3"){
		$score++;}
	if($d=="op3"){
		$score++; }
	if($e=="op3"){
		$score++;}}//NOW FOR SQL EXAM PAPER
	else if ($sub=="sql"){
		if($a=="op4"){
		$score++;}
	if($b=="op4"){
		$score++;}
	if($c=="op4"){
		$score++;}
	if($d=="op4"){
		$score++; }
	if($e=="op4"){
		$score++;}}
	echo " <h1 >Subject: $sub</h1>";
	echo " <h1 >final score: $score/5</h1>";
	$per= $score*100/$noq;
	echo "<h1 >Persentage: $per % </h1>";
	if ($per > 80){
		echo "<h1>Grade: A</h1>";
		echo "<h3 >Remarks: Keep it up.</h3 >";}
	else if($per > 60){	echo "<h1>Grade: B</h1>";
		echo "<h3 >Remarks:Keep practicing and improove.</h3 >";}
	else if($per > 40){echo "<h1>Grade: C</h1>";
		echo "<h3 >Remarks: Keep practicing and improove.</h3 >";}
		
	else if($per > 30){echo "<h1>Grade: D</h1>";
		echo "<h3 >Remarks: You need to do hard work, keep practicing.</h3 > ";}	
	else{
		echo "<h1>Fail!</h1>";
		echo "<h3 >Remarks: You need to try again to pass.</h3 >";}
	?>
	</div>
	<div style="margin-top:-400px">
	<?php
		include 'ad.php';
	?>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
	<?php
		include 'footer.php';
	?>