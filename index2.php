<html>
	<body>
		<head>
			
		</head>
		<?php
		error_reporting(0);
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$errorName='';
			if($name != '')
			{
				header("location:question1.php?name=$name");
			}
			else
			{
				$errorName="Please enter your name";
			}

			
		}
		  ?>
		<title>Quiz Contest</title>
		<h2>Welcome to Quiz Contest</h2>
		<form action="" method="POST">
			<label> Enter Your Name:*</label>
			<input type="text" name="name">&nbsp;<span style="color: red"><?php echo $errorName; ?></span><br><br>
			<input type="submit" name="submit">
		</form>
		
	</body>
</html>