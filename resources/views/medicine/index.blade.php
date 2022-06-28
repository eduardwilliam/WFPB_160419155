@extends('layouts.conquer')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Medicine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h4 class="modal-title">DISCLAIMER</h4>
			</div>
			<div class="modal-body">
			Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement.
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div class="container">
    <h2>List Medicine</h2>
<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Form</th>
        <th>Restriction Formula</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>
    @foreach($listData as $li)
    <tr>
        <td class='editable' id='td_name_{{$li->id}}'>{{ $li->generic_name }}</td>
        <td class='editable' id='td_form_{{$li->id}}'>{{ $li->form }}</td>
        <td class='editable' id='td_restriction_{{$li->id}}'>{{ $li->restriction_formula }}</td>
        <td>{{ $li->price }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>

</body>
</html>
@endsection

@section('initialscript')
<script>
	$('.editable').editable({
		closeOnEnter :true,
		callback:function(data){
			if(data.content){
				alert(data.content)
			}
		}
	}); 
    var s_id=data.$el[0].id
    var fname=s_id.split('_')[1]
    var id=s_id.split('_')[2]
    $.ajax({
        type:'POST',
        url:'{{route("supplier.saveDataField")}}',
        data:{'_token':'<?php echo csrf_token() ?>',
                'id':id,
                'fname':fname,
                'value':data.content
            },
        success:function(data){
            alert(data.msg)
        }
    });
</script>
@endsection