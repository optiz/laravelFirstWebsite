<style>
	h1{
		font-family: century gothic;
	}
	a.edit{
		text-decoration: none;
		color: blue;
	}
	a.delete{
		text-decoration: none;
		color: red;
	}
	table {
    	border-collapse: collapse;
    	font-family: century gothic;
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
</style>


<center>
<h1><span style="color:blue"> Table of</span><span style="color:red"> Crushes</span> </h1>
<table border="1">
	<thead>
		<tr>
			<td class="nav">First Name</td>
			<td class="nav">Last Name</td>
			<td class="nav">FB Profile</td>
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
			<td><a class="edit" href="{{ route('crushes.id.edit', array('id'=>$crush->id)) }}">Edit</a>
				<a class="delete" href="{{ route('crushes.id.destroy', array('id'=>$crush->id)) }}">Delete</a></td>
		</tr>
		@endforeach
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><a class="edit" href="{{ route('crushes.create') }}">Add new crushes</a></td>
		</tr>
	</tbody>
</table>
</center>