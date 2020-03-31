<?php
error_reporting(0);
if(isset($_POST['submit']))
{   $errorOPTION='';
	$name=$_GET['name'];
	$option=$_POST['option'];
	if($option!=''){
		if($option=='12')
		{ 	
			header("location:question3.php?name=$name");
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
<label>Quesion2:</label><br>
<form action="" method="POST">
<p>Sum of 6+6</p>
<ul>
	<li>14<input type="radio" name="option" value="14"></li>
	<li>12<input type="radio" name="option" value="12"></li>
	<li>13<input type="radio" name="option" value="13"></li>
	<li>15<input type="radio" name="option" value="15"></li>
</ul>
<input type="submit" name="submit" value="Next">
<p style="color:red;"><?php echo $errorOPTION; ?></p>
</form>