
<?php
include('conn.php');
error_reporting(0);
$name=$_GET['name'];

if(isset($_POST['submit']))
{	
	$sql="insert into quize_winner (winner_name) values ('$name')";
	$query=mysqli_query($conn,$sql);
	$option=$_POST['option'];
	
	if($option!=''){
		if($option=='60' && $query)
		{ 	
			echo '<script type="text/javascript">alert("You are winner of the contest");window.location.replace("index2.php");</script>';
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
<label>Quesion5:</label><br>
<form action="" method="POST">
<p>Sum of 58+2</p>
<ul>
	<li>22<input type="radio" name="option" value="22"></li>
	<li>85<input type="radio" name="option" value="85"></li>
	<li>21<input type="radio" name="option" value="21"></li>
	<li>60<input type="radio" name="option" value="60"></li>
</ul>
<input type="submit" name="submit" value="Finish">
<p style="color:red;"><?php echo $errorOPTION; ?></p>
</form>