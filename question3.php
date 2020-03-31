<?php
error_reporting(0);
if(isset($_POST['submit']))
{   $errorOPTION='';
	$name=$_GET['name'];
	$option=$_POST['option'];
	if($option!=''){
		if($option=='48')
		{ 	
			header("location:question4.php?name=$name");
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
<label>Quesion3:</label><br>
<form action="" method="POST">
<p>Multiplication of 8*6</p>
<ul>
	<li>47<input type="radio" name="option" value="47"></li>
	<li>45<input type="radio" name="option" value="45"></li>
	<li>48<input type="radio" name="option" value="48"></li>
	<li>82<input type="radio" name="option" value="82"></li>
</ul>
<input type="submit" name="submit" value="Next">
<p style="color:red;"><?php echo $errorOPTION; ?></p>
</form>