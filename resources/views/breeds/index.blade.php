@extends('layouts.master')
@section('content')      
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
            </tr>
        </thead>
        
        <tbody>
            @foreach( $breeds as $item )
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
@endsection
