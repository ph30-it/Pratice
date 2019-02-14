@extends('layouts.master')
@section('content')

	<form action="{{route('cats-store')}}" method="POST">
	@csrf
		<label for="name">Name Cat</label>
		<input id="name" type="text" name="name"\><br>
		<label for="name">Dob</label>
		<input id="dob" type="text" name="dob"\><br>
		<label for="name">Breed ID</label>
		<input id="breed_id" type="text" name="breed_id"\><br>
		<button type="submit">Create</button>
	</form>
@endsection