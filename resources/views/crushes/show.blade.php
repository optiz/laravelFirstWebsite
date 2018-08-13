<style>
a{
	text-decoration: none;
	color: blue;
}
a.add{
		text-decoration: none;
		color: white;
	}
a.del{
		text-decoration: none;
		color: red;
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
.qualities{
	height: auto;
	background-color: white;
	margin: 1%;
	width: 93%;
	padding: 2%;
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
	width: auto;
	float: right;
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
table {
	margin-top: 8%;
    border-collapse: collapse;
    font-family: century gothic;
	}

	td.qual {
		width: 90%;
	    border: 1px solid #ccc;
	    padding: 8px;
    	text-align: left;
	}
	td.nav {
		width: 90%;
	    border: 1px solid #ccc;
	    padding: 8px;
    	text-align: center;
	}
	td{
	    border: 1px solid #ccc;
	    padding: 8px;
    	text-align: center;
	}
hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
<div class="wrapper">
	<div class="content">
		<center>
			<h1><span style="color:blue"> Crush</span><span style="color:red"> Information</span> </h1>
		</center>
		<hr>
		<form action = "{{ route('crushes.create') }}" method = "POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="crush_id" value="{{$crush->id}}">
				<label>Frist Name: <span style="color: blue;">{{$crush->first_name}}</span></label><br/>
				 
				<br/>
				<label>Last Name: <span style="color: blue;">{{$crush->last_name}}</span></label><br/>
				
				<br/>
				<label>FB/Insta Link: <span style="color: blue;"><a href="{{ $crush->fb_profile_link }}">{{$crush->fb_profile_link}}</a></span></label><br/>
				
				<br/>
				<label>Contact Number: <span style="color: blue;">{{$crush->contact_number}}</span></label>

				<br/><br>
				<div class="qualities">
				<button type="submit"><a class="add" href="{{ route('crushes.id.add', array('id'=>$crush->id)) }}">ADD QUALITY</a></button>
		</form>
					<hr>
					<table>
						<thead>
							<tr>
								<td class="nav">Qualities</td>
								<td>Action</td>	
							</tr>
						</thead>
						<tbody>
							@foreach($crushes as $crush)
							<tr>
								<td class="qual"><li>{{$crush->crush_qualities}}</li></td>
								<td><a class="del" href="{{ route('crushes.id.destroy_quality', array('id'=>$crush->id)) }}">Delete</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				
				</div>
				<br/><br/>
	</div>
	<br/><br/>
	<center><a href="{{route('crushes.index')}}">Return to Table Page</a></center>
</div>
