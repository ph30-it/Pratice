@extends('layouts.master')
@section('content')      
    <div class="container">
    <table class="table table-striped">
        <thead>
      <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Created_at</td>
        <td>Updated_at</td>
      </tr>
    </thead>
    <tbody>
    @foreach( $breeds as $item )
      <tr>
        <td>{{ $item->id }}</td>
        <td><a href="{{ route('list-cats-of-breed' , $item->id)}}"> {{ $item->name }}</a></td>
        <td>{{ $item->created_at }}</td>
        <td>{{ $item->updated_at }}</td>
      </tr>
    @endforeach
     </tbody>
    </table>
</div>
<script type="text/javascript">
  $(document).ready(function () {
      $('tr').click(function (){
        // alert('tr click');
         $(this).find('td:nth-child(2)').text();
        // console.log($(this).find('td:first-child').text());
        // alert(id);

      });

  });
</script>
@endsection

