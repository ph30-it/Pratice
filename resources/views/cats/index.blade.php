@extends('layouts.master')
@section('content')      
    <div class="container">
    <table class="table table-striped">
        <thead>
      <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Breed ID</td>
        <td>Age</td>
        <td>Created_at</td>
        <td>Updated_at</td>
        <td>Action</td>
      </tr>
    </thead>
    <tbody>
    @foreach( $cats as $item )
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->breed->name }}</td>
        <td>{{ $item->age }}</td>
        <td>{{ $item->created_at }}</td>
        <td>{{ $item->updated_at }}</td>
        <td><a href="{{ route('edit-cat', $item->id)}} " class="btn btn-primary">Edit</a>  
            <form action="{{ route('delete-cat', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button> 
            </form>
        </td>
      </tr>
    @endforeach
     </tbody>
    </table>
</div>
@endsection
