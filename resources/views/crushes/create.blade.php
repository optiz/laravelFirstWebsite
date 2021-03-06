<style>
a{
	text-decoration: none;
	color: blue;
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
	border: 1px solid black;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
input[type=text]{
	width: 100%;
	padding: 10px 15px;
	margin-top: 1%;
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
	border: 1px solid #ccc;
	font-family: century gothic;
	padding: 10px 15px;
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
		<center>
			<h1><span style="color:blue"> Infor</span><span style="color:red">mation</span> </h1>
		</center>
		@if ($errors->any())
		<div class="alert">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
			<form action="{{ $action }}" method="POST">
				{{ csrf_field() }}

				<label>Frist Name:</label><br/>
				<input type="text" name="first_name" value="{{$crush->first_name}}"/>
				<br/><br/>
				<label>Last Name:</label><br/>
				<input type="text" name="last_name" value="{{$crush->last_name}}"/>
				<br/><br/>
				<label>FB Profile Link:</label><br/>
				<input type="text" name="fb_profile_link" value="{{$crush->fb_profile_link}}"/>
				<br/><br/>
				<label>Contact Number:</label><br/>
				<input type="text" name="contact_number" value="{{$crush->contact_number}}"/>
				<br/><br/>
				<button type="submit">{{$submit_text}}</button>
			</form>
	</div>
	<br/><br/>
	<center><a href="{{route('crushes.index')}}">Return to Table Page</a></center>
</div>
