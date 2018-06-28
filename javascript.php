<?php
    include 'header2.php';
?>
<div class="container">
<form action="result.php" mathod="GET">
<p>1. Where is the correct place to insert a JavaScript?
</p>
<input type="radio" name="r1" value="op1">The head section<br>
<input type="radio" name="r1" value="op2">The body section<br>
<input type="radio" name="r1" value="op3">Both the head section and the body section are correct<br>
<input type="radio" name="r1" value="op4">The title section<br>
<hr>
<p>2. The external JavaScript file must contain the script tag.</p>
<input type="radio" name="r2" value="op1">may or may not<br>
<input type="radio" name="r2" value="op2">False<br>
<input type="radio" name="r2" value="op3">True<br>
<input type="radio" name="r2" value="op4">N.O.T<br>
<hr>
<p>3. How do you write "Hello World" in an alert box?</p>
<input type="radio" name="r3" value="op1">alertBox("Hello World");<br>
<input type="radio" name="r3" value="op2">msgBox("Hello World");<br>
<input type="radio" name="r3" value="op3">alert("Hello World");<br>
<input type="radio" name="r3" value="op4">msg("Hello World");<br>
<hr>
<p>4. How do you create a function in JavaScript?</p>
<input type="radio" name="r4" value="op1">function = myFunction()<br>
<input type="radio" name="r4" value="op2">function:myFunction()<br>
<input type="radio" name="r4" value="op3">function myFunction()<br>
<input type="radio" name="r4" value="op4">func:myFunction()<br>
<hr>
<p>5. How do you call a function named "myFunction"?</p>
<input type="radio" name="r5" value="op1">call function myFunction()<br>
<input type="radio" name="r5" value="op2">call myFunction()<br>
<input type="radio" name="r5" value="op3">myFunction()<br>
<input type="radio" name="r5" value="op4">func myFunction<br>
<br>
<center>
	<input type="reset" value="reset" class="reset">
<button type="submit" name="name" value="js"   class="submit">Submit</button>

</center>
</form>
<br><br><br>
</div>
<?php
    include 'footer.php';
?>