<?php
    include 'header2.php';
?>

<div class="container">

  <!---->




   <!---->

<p>Attampt all question.</p>

<form action="result.php" mathod="GET" class="form1">
<p>1. What does HTML stand for?</p>
<input type="radio" name="r1" value="op1">Hyper Text Markup Language<br>
<input type="radio" name="r1" value="op2">Hyperlinks and Text Markup Language<br>
<input type="radio" name="r1" value="op3">Home Tool Markup Language <br>
<input type="radio" name="r1" value="op4">Hyperlinks Tool Markup Language <br>

<hr>
<p>2. Who is making the Web standards?</p>
<input type="radio" name="r2" value="op1">The World Wide Web Consortium<br>
<input type="radio" name="r2" value="op2">Google<br>
<input type="radio" name="r2" value="op3">Microsoft<br>
<input type="radio" name="r2" value="op4">Mozilla<br>
<hr>
<p>3. Choose the correct HTML element for the largest heading:</p>
<input type="radio" name="r3" value="op1">h1<br>
<input type="radio" name="r3" value="op2">head<br>
<input type="radio" name="r3" value="op3">h6<br>
<input type="radio" name="r3" value="op4">heading<br>
<hr>
<p>4. What is the correct HTML element for inserting a line break?</p>
<input type="radio" name="r4" value="op1">br<br>
<input type="radio" name="r4" value="op2">break<br>
<input type="radio" name="r4" value="op3">lb<br>
<input type="radio" name="r4" value="op4">line break<br>
<hr>
<p>5. Which character is used to indicate an end tag?</p>
<input type="radio" name="r5" value="op1">/<br>
<input type="radio" name="r5" value="op2">*<br>
<input type="radio" name="r5" value="op3"><<br>
<input type="radio" name="r5" value="op3">\<br>

<br>
<center>
	<input type="reset" value="Reset" class="reset" >
<button type="submit" name="name" value="html"   class="submit">Submit</button>

</center>
</form>
<br><br><br>
</div>
<!-- working through script-->
<script type="text/javascript">
function cal{
var a,b,c,d,e,result=0;
a=r1;
b=r2;
c=r3;
d=r4;
e=r5;
if(a==op1) result++;
if(b==op1) result++;
if(c==op1) result++;
if(d==op1) result++;
if(e==op1) result++;

alert("your result: "+ result);
}

</script>


<!--script ends-->
<?php
    include 'footer.php';
?>