@extends('layouts.conquer')
@section('content')
<div class="container">
    @if (session('status'))
        <div class='alert alert-success'>
            {{ session('status') }}
        </div>
    @endif

    @if (session('error'))
        <div class='alert alert-danger'>
            {{ session('error') }}
        </div>
    @endif

    <h2>List Categories Medicine</h2>
    <div class="page-toolbar">
        <a href="{{url('kategori/create')}}" class="btn btn-info" type="button" >
            + Category Baru
        </a>
        <a href="#modalCreate" data-toggle='modal' class="btn btn-info" type="button" >
            + Category Baru (modal)
        </a>

        <div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" >
                <form role="form" method="POST" action="{{url('kategori')}}">
                <div class="modal-header">
                    <button type="button" class="close" 
                    data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Add New Category</h4>
                </div>
                <div class="modal-body">
                    
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" id="description" name="description"
                                ></textarea>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
                
                </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>

        </tr>
        </thead>
        <tbody>
        @foreach($listcategory as $li)
        <tr>
            <td>
                <a class="btn btn-default" data-toggle="modal" href="#detail_{{$li->id}}" 
                data-toggle="modal">{{ $li->id }}</a>  

                <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">{{$li->name}}</h4>
                            </div>
                            <div class="modal-body">
                                    <img src="{{ asset('images/').$li->id.'.jpg' }}" height='200px' />
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>

            <td>{{ $li->name }}</td>
            <td>{{ $li->description }}</td>
            <td>
                <a href="{{ url('kategori/'.$li->id.'/edit')}}" class="btn btn-xs btn-info">edit</a>

                <a href="#modalEdit" data-toggle="modal" class="btn btn-xs btn-warning" 
                onclick="getEditForm({{ $li->id }})"
                >+ Edit A</a>

                

            </td>
            <td>
                <form method="POST" action="{{ url('kategori/'.$li->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger btn-xs"
                    onclick="if(!confirm('are you sure to delete this record ?')) return false;">
                </form>
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content" id="modalContent">

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>

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
    <a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>
    <br>
    
</div>
@endsection

@section('javascript')
<script>
    function getEditForm(id)
    {
        $.ajax({
            type:'POST',
            url:'{{route("kategori.getEditForm")}}',
            data:{'_token':'<?php echo csrf_token() ?>','id':id},
            success: function(data){
                $('#modalContent').html(data.msg)
            }
        });
    }
</script>