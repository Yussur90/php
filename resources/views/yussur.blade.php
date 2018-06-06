

<!DOCTYPE html>
<html>
<head><title>Weather</title>

</head>

<body>


	<center><br><br>
		<form method="GET" action="get.php">
		<h1> {{$data}}</h1>
		
			<input type="text" name="q" required>
			<input type="submit" name="submit">
		</form>
	</center>
</body>
</html>