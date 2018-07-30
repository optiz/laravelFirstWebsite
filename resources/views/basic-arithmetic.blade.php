<!DOCTYPE html>
<html>
<head>
	<title>Basic Arithmetic</title>
	<style>
	.wrapper{
		margin: 0 auto;
    	width: 50%;
    	clear: both;
	}
	.b-a{
	 	width: 89%;
	 	margin-top: 6%;
	 	padding: 5%;
	 	float: left;
	 	box-shadow: 0 0 10px #ccc;
	}
	</style>
</head>
<body>
<div class="wrapper">
<div class="b-a">
@if($operation=="op")
<center>
<h1 style="font-family: Prestige Elite Std;">Basic Arithmetic</h1>
</center>
<hr>
<h2 style="color: gray; font-family: Century Gothic;">Input Numbers</h2>
<h3 style="font-family: Prestige Elite Std;">: {{$num1}}</h3>
<h3 style="font-family: Prestige Elite Std;">: {{$num2}}</h3>
<hr>
<h2 style="color: gray; font-family: Century Gothic;">Answer</h2>
<h3  style="font-family: Prestige Elite Std;">Addition: {{$num1 + $num2}}</h3>
<h3  style="font-family: Prestige Elite Std;">Substraction: {{$num1 - $num2}}</h3>
<h3  style="font-family: Prestige Elite Std;">Multiplication: {{$num1 * $num2}}</h3>
<h3 style="font-family: Prestige Elite Std;">Division: @if($num2 != 0){{$num1 / $num2}}@endif</h3>
@endif
</div>
</div>
</body>
</html>
