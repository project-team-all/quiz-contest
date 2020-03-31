<?php
error_reporting(0);
if(isset($_POST['submit']))
{   $errorOPTION='';
	$name=$_GET['name'];
	$option=$_POST['option'];
	
	if($option!=''){
		if($option=='4')
		{ 	
			header("location:question2.php?name=$name");
		}
		else 
			echo '<script type="text/javascript">alert("You Lost");window.location.replace("index2.php");</script>';

	}
	else
	{
		$errorOPTION="please choose any of the options";
	}
}
?>
<label>Quesion1:</label><br>
<form action="" method="POST">
<p>Sum of 2+2</p>
<ul>
	<li>4<input type="radio" name="option" value="4"></li>
	<li>2<input type="radio" name="option" value="2"></li>
	<li>3<input type="radio" name="option" value="3"></li>
	<li>5<input type="radio" name="option" value="5"></li>
</ul>
<input type="submit" name="submit" value="Next">
</form>
<p style="color:red;"><?php echo $errorOPTION; ?></p>