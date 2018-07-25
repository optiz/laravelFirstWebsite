<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
@if($operation=="add")
<h1 style="color: gray; font-family: Century Gothic;">Operation: Addition</h1>
<h3 style="font-family: Prestige Elite Std;">Addend: {{$num1}}</h3>
<h3  style="font-family: Prestige Elite Std;">Addend: {{$num2}}</h3>
<hr style="width: 250px;">
<h3  style="font-family: Prestige Elite Std;">Sum: {{$sum}}</h3>

@elseif($operation=="sub")
<h1 style="color: gray; font-family: Century Gothic;">Operation: Subtraction</h1>
<h3  style="font-family: Prestige Elite Std;">Minuend: {{$num1}}</h3>
<h3  style="font-family: Prestige Elite Std;">Subtrahend: {{$num2}}</h3>
<hr style="width: 250px;">
<h3  style="font-family: Prestige Elite Std;">Difference: {{$diff}}</h3>

@elseif($operation=="mul")
<h1 style="color: gray; font-family: Century Gothic;">Operation: Multiplication</h1>
<h3  style="font-family: Prestige Elite Std;">Multiplicand: {{$num1}}</h3>
<h3  style="font-family: Prestige Elite Std;">Multiplier: {{$num2}}</h3>
<hr style="width: 250px;">
<h3  style="font-family: Prestige Elite Std;">Product: {{$mul}}</h3>

@elseif($operation=="div")
<h1 style="color: gray; font-family: Century Gothic;">Operation: Multiplication</h1>
<h3 style="font-family: Prestige Elite Std;">Dividend: {{$num1}}</h3>
<h3 style="font-family: Prestige Elite Std;">Divisor: {{$num2}}</h3>
<hr style="width: 250px;">
<h3 style="font-family: Prestige Elite Std;">Qoutient: {{$div}}</h3>
@endif
</center>
</body>
</html>
