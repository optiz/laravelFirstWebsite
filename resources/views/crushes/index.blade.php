<style>
	table {
    border-collapse: collapse;
	}

	table, th, td {
	    border: 1px solid black;
	    padding: 15px;
    	text-align: left;
	}
</style>


<center>
<table border="1">
	<thead>
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>FB Profile</td>
			<td>Contact Number</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>
		@foreach($crushes as $crush)
		<tr>
			<td>{{ $crush->first_name      }}</td>
			<td>{{ $crush->last_name       }}</td>
			<td><a href="{{ $crush->fb_profile_link }}">{{$crush->fb_profile_link}}</a></td>
			<td>{{ $crush->contact_number  }}</td>
			<td><a href="{{ route('crushes.id.edit', array('id'=>$crush->id)) }}">Edit</a>
				<a href="{{ route('crushes.id.destroy', array('id'=>$crush->id)) }}">Delete</a></td>
		</tr>
		@endforeach
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><a href="{{ route('crushes.create') }}">Add new crushes</a></td>
		</tr>
	</tbody>
</table>
</center>