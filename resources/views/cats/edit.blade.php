@extends('layouts.master')
@section('content')
<h1>Edit cat</h1>
<div class="container">
	
	<form action="{{ route('update-cat', $cat->id)}}" method="POST">
	@csrf
	@method('PUT')
	  <div class="form-group">
	    <label for="name">Name Cat:</label>
	    <input type="text" class="form-control" id="name" name="name"  value="{{ $cat->name }}">
	  </div>
	  <div class="form-group">
	    <label for="age">Age:</label>
	    <input type="text" class="form-control" id="age" name="age" value="{{ $cat->age }}">
	  </div>
	  <div class="form-group">
	    <label for="breed">Breed ID:</label>
	    <select name="breed_id" id="breed">
	    	@foreach ($breedIds as $key => $value)
	    		<option value="{{$key}}" {{ $key == $cat->breed_id ? 'selected' : '' }}> {{ $value }}</option>

	    	@endforeach
	    </select>
	 
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
@endsection