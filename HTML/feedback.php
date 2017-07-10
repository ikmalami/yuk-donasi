<?php

	$conection = mysqli_connect('127.0.0.1','root','');
	
	if (!$conection)
	{
		echo 'Not Connected To Server';
	}
	
	if (!mysqli_select_db ($conection, 'pbw'))
	{
		echo 'Database Not Selected';
	}
	
	$nama = $_POST['name'];
	$email = $_POST ['email'];
	$pesan = $_POST ['message'];
	
	$sql = "INSERT INTO feedback (nama,email,pesan) VALUES ('$nama','$email','$pesan')";
	
	if (!mysqli_query($conection,$sql))
	{
		echo json_encode(array('success'=>0, 'message'=>'An error occured. Please try again later.')); 
        die(); 
	}
	else
	{
		mysqli_close($conection);
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