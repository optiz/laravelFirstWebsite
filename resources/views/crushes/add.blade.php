<style>
a{
	text-decoration: none;
	color: blue;
}
hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
}
.wrapper{
	margin: 0 auto;
	width: 40%;
	clear: both;
	font-family: century gothic;
}
.content{
	height: auto;
	background-color: white;
	margin-top: 4%;
	width: 90%;
	padding: 5%;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
input[type=text]{
	width: 100%;
	padding: 10px 15px;
	color: black;
	display: inline-block;
	font-family: century gothic;
	border: 1px solid #ccc;
	border-radius: 4px;
	background: rgb(255, 255, 255); /* Fallback for older browsers without RGBA-support */
    background: rgba(255, 255, 255, 0.8);
}
button{
	width: 100%;
	background-color: #d40c0c;
	color: white;
	font-family: century gothic;
	padding: 10px 15px;
	border: 1px solid #ccc ;
	border-radius: 4px;
	cursor: pointer;
}
button:hover {
	background-color: #bb0a0a;
	color: white;
}
.alert{
	background-color: #f2dede;
	height: auto;
	border: 1px solid red;
	margin-bottom: 4%;
	padding: 2%;
	width: 96%;
	color: #a94442;
	font-family: century gothic;
}
</style>
<div class="wrapper">
	<div class="content">
		<form action="{{ $action }}" method="POST">
			{{ csrf_field() }} 
				<center>
					<h1><span style="color:blue"> Crush</span><span style="color:red"> Qualities</span> </h1>
				</center>
				<hr>
				<input type="hidden" name="crush_id" value="{{$id}}"/>
				<input type="text" name="crush_qualities" value=""/>
				<br/><br/>
				<button type="submit">{{$submit_text}}</button>
		</form>
				<br/>
				@if ($errors->any())
				<div class="alert">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
		
	</div>
	<br/><br/>
</div>
