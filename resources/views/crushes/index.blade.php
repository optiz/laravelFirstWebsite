<style>
	h1{
		font-family: century gothic;
		margin-top: 5%;
		margin-bottom: 2%;
	}
	a.edit{
		text-decoration: none;
		color: blue;
	}
	a.delete{
		text-decoration: none;
		color: red;
	}
	a.show{
		text-decoration: none;
		color: #11d81b;
	}
	table {
    	border-collapse: collapse;
    	font-family: century gothic;
    	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
	}

	td.nav {
	    border: 1px solid black;
	    padding: 15px;
    	text-align: center;
	}
	td{
	    border: 1px solid black;
	    padding: 15px;
    	text-align: left;
	}
	td.none{
	    border: none;
	}
	td.add {
	    border: 1px solid black;
	    padding: 15px;
    	text-align: center;
	}
</style>


<center>
<h1><span style="color:blue"> Table of</span><span style="color:red"> Crushes</span> </h1>
<table border="1">
	<thead>
		<tr>
			<td class="nav">First Name</td>
			<td class="nav">Last Name</td>
			<td class="nav">FB/Instagram Profile</td>
			<td class="nav">Contact Number</td>
			<td class="nav">Action</td>
		</tr>
	</thead>
	<tbody>
		@foreach($crushes as $crush)
		<tr>
			<td>{{ $crush->first_name      }}</td>
			<td>{{ $crush->last_name       }}</td>
			<td><a href="{{ $crush->fb_profile_link }}">{{$crush->fb_profile_link}}</a></td>
			<td>{{ $crush->contact_number  }}</td>
			<td><a class="edit" href="{{ route('crushes.id.edit', array('id'=>$crush->id)) }}">Edit</a> | 
				<a class="delete" href="{{ route('crushes.id.destroy', array('id'=>$crush->id)) }}">Delete</a> | 
				<a class="show" href="{{ route('crushes.id.show', array('id'=>$crush->id)) }}">Show</a>
			</td>
		</tr>
		@endforeach
		<tr>
			<td class="none"></td>
			<td class="none"></td>
			<td class="none"></td>
			<td class="none"></td>
			<td class="add"><a class="edit" href="{{ route('crushes.create') }}">Add new crushes</a></td>
		</tr>
	</tbody>
</table>
</center>