@extends('layouts.master')
@section('content') 
<h1>List cats of Breed : {{$breed->name}}</h1>     
    <div class="container">
    <table class="table table-striped">
        <thead>
      <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Age</td>
        <td>Created_at</td>
        <td>Updated_at</td>
      </tr>
    </thead>
    <tbody>
    @foreach( $cats as $item )
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->age }}</td>
        <td>{{ $item->created_at }}</td>
        <td>{{ $item->updated_at }}</td>
      </tr>
    @endforeach
     </tbody>
    </table>
</div>
@endsection
