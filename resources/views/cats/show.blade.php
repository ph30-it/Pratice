@extends('layouts.master')
@section('content')

	<div>
		<label>Cat ID</label>
		<p>{{ $cat->id }}</p>
		<label>CAt name</label>
		<p>{{ $cat->name }}</p>
		<label>Breed ID </label>
		<p>{{ $cat->breed_id }}</p>
	</div>
@endsection