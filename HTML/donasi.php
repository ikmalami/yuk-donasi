<?php

	$con = mysqli_connect('127.0.0.1','root','');
	
	if (!$con)
	{
		echo 'Not Connected To Server';
	}
	
	if (!mysqli_select_db ($con, 'pbw'))
	{
		echo 'Database Not Selected';
	}
	
	$amount = $_POST['amount'];
	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'];
	$email = $_POST ['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$note = $_POST ['note'];
	
	$sql = "INSERT INTO donasi (amount,fname,lname,email,phone,address,note) VALUES ('$amount','$fname','$lname','$email','$phone','$address','$note')";
	
	if (!mysqli_query($con,$sql))
	{
		echo ('maaf data tidak masuk'); 
        die(); 
	}
	else
	{
		mysqli_close($con);
	}


?>

<html>
	<head>

		<script language="JavaScript">
		var time = null
		function move() {

		window.location = history.go(-1);
		}
		//-->
		</script>
	</head>
	
	<body onload="timer=setTimeout('move()',1000)">
		<h2>Redirecting back to main</h2>

	</body>
</html>