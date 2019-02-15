@extends('layouts.master')
@section('content')
<div class="container">
	<table class="table table-striped">
		<thead>
	  <tr>
	    <th>Cat ID</th>
	    <th>Cat Name</th>
	    <th>Breed ID</th>
	  </tr>
	</thead>
	<tbody>
	  <tr>
	    <td>{{ $cat->id }}</td>
	    <td>{{ $cat->name }}</td>
	    <td>{{ $cat->breed_id }}</td>
	  </tr>
	 </tbody>
	</table>
</div>
@endsection