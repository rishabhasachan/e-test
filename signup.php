<?php
	include 'header.php';
?>
<?php
		$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	//ECHO $url;
		if(strpos($url,'error=empty')!==false){	
			echo "*******************FILL out all fields!*************************";	
		}
		if(isset($_SESSION['id'])){
			echo "You are logged in as user-id:: ";
			echo  $_SESSION['id']; 
		}  
		else{
			echo "<br/> You are not logged in!";
		}
	?><h2>Please register yourself</h2>
	<br /><br />
	<div class="signup animated zoomIn">
	<?php
		if(isset($_SESSION['id'])){
			echo "You are already logged in! "; 
		}  
		else{
			echo "<form action='includes/signup.inc.php' method='POST' 
					style='margin-left:250px;color:red;padding:30px; background-color:#111155;
					width:250px;' class='signupform'>
			<input type='text' name='first' placeholder='firstname'/><br /><br />
			<input type='text' name='last' placeholder='lastname'/><br /><br />
			<input type='text' name='uid' placeholder='username'/><br /><br />
			<input type='password' name='pwd' placeholder='password'/><br/><br />
			<button type='submit'>Register </button>
			</form>";
		}
		?>
</div>
<br><br><br><br><br><br><br><br>
<?php
	include 'footer.php';
?>