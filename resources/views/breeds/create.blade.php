@extends('layouts.master')
@section('content')

	<form action="{{route('breeds-store')}}" method="POST">
	@csrf
		<label for="name">Name Breed</label>
		<input id="name" type="text" name="name"\>
		<input  type="text" name="dob"\>
		<input  type="text" name="image"\>
		<button type="submit">Create</button>
	</form>
@endsection