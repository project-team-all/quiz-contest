<?php
error_reporting(0);
if(isset($_POST['submit']))
{   $errorOPTION='';
	$name=$_GET['name'];
	$option=$_POST['option'];
	if($option!=''){
		if($option=='18')
		{ 	
			header("location:question5.php?name=$name");
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
<label>Quesion4:</label><br>
<form action="" method="POST">
<p>Sum of 12+6</p>
<ul>
	<li>12<input type="radio" name="option" value="12"></li>
	<li>18<input type="radio" name="option" value="18"></li>
	<li>11<input type="radio" name="option" value="11"></li>
	<li>14<input type="radio" name="option" value="14"></li>
</ul>
<input type="submit" name="submit" value="Next">
<p style="color:red;"><?php echo $errorOPTION; ?></p>
</form>