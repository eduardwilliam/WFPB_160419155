@extends('layouts.conquer')

@section('content')
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="#">Welcome</a>
        </li>
        <li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" onclick="showInfo()">
                <i class="icon-bulb"></i>
            </a>
        </li>
</div>
<div id='showinfo'></div>
@endsection

@section('javascript')
<script>
    function showInfo()
    {
    $.ajax({
        type:'POST',
        url:'{{route("medicines.showInfo")}}',
        data:'_token=<?php echo csrf_token() ?>',
        success: function(data){
        $('#showinfo').html(data.msg)
        }
    });
    }
</script>
@endsection