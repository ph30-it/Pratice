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

	<button id="show-list-cat" data-id="{{ $cat->id }}">Show</button>
	<input id="cat_id" type="text" name="cat_id">
</div>
<div class="container">
	<div id="show-here"></div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('button').on('click', function () {
			//clear html cũ
			$('#show-here').html('');
			// cat_id = $(this).attr('data-id');
			//lấy id cat
			cat_id = $('#cat_id').val();
			//gọi ajax lên server lấy list tất cả cat có cùng breed id với cat ở trên
			$.ajax({
				url : '/api/cats/'+cat_id+'/list-cats-same-breed',
				type : 'GET',
				data : {},
				success : function (data) {
					// console.log(data);
					//chuẩn bị html show list cat
					var html='';
					
						// console.log( value);
						html = '<table class="table table-striped">'+
									'<thead>'+
										'<tr>'+
										    '<th>Cat ID</th>'+
										    '<th>Cat Name</th>'+
										    '<th>Breed ID</th>'+
				  						'</tr>'+
									'</thead>'+
								    '<tbody>';
						//foreach data để lấy dữ liệu
						$.each(data, function(key, value) {
										html += '<tr>'+
												    '<td>'+value.id+'</td>'+
												    '<td>'+value.name+'</td>'+
												    '<td>'+value.breed_id+'</td>'+
												'</tr>';

									
						});
						html += '</tbody>'+
								'</table>';

					    console.log(html);
					// nhung đoạn html mới tạo ra vào vị trí mong muốn
					$('#show-here').append(html);
				}

			});

		});


	});



</script>
@endsection