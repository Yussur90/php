<!DOCTYPE html>
<html>
<head><title>Weather</title>
<style>
.Weather{
width:200px;
height:50px;
background-color:lightblue;

}
body{
	 background-image: url("https://cdn2.vectorstock.com/i/1000x1000/64/01/good-weather-background-blue-sky-with-clouds-vector-1156401.jpg");
}

</style>
</head>

<body>


	<center><br><br>
			<form method="post" action="/hi">
			
			<div class="Weather">
		<h1 >Temp:{{$data}}</h1>

		</div>
		<div class="Weather">
		<h1 >humidity:{{$data2}}</h1>
		</div>
			
		</form>
	</center>
</body>
</html>