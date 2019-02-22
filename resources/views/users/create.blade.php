@extends('layouts.master')
@section('content')

<div class="container">
	
	<form action="{{ route('users.store')}}" method="POST">
	@csrf
	  <div class="form-group">
	    <label for="name">Name user:</label>
	    <input type="text" class="form-control" id="name" name="name">
	  </div>
	  <div class="form-group">
	    <label for="age">Age:</label>
	    <input type="text" class="form-control" id="age" name="age">
	  </div>
	  <div class="form-group">
	    <label for="breed">Breed ID:</label>
	    <select name="breed_id" id="breed">
	    	@foreach ($breedIds as $key => $value)
	    		<option value="{{$key}}"> {{ $value }}</option>

	    	@endforeach
	    </select>
	 
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
@endsection