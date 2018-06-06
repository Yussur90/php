<!DOCTYPE html>
<html>
<head><title>Weather</title>
<style>
.Weather{
width:200px;
height:50px;
background-color:lightblue;

}


</style>
</head>

<body>


	<center><br><br>
		<form method="post" action="/hi">
			<div class="Weather">
		<h1 >{{$data}}</h1>
		</div>
			<input type="text" name="name" required>

			<input type="submit" name="submit" value="add">
		</form>
	</center>
</body>
</html>