@extends('layouts.conquer')
@section('content')
<form role="form" method="POST" action="{{url('kategori/'.$data->id)}}">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="exampleInputName1">Categories Name</label>
        <input type="text" class="form-control" id="exampleInputName" name="name" value="{{$data->name}}">
    </div>
    <div class="form-group">
        <label for="exampleInputDescription1">Description</label>
        <textarea class="form-control" aria-label="With textarea" name="description">{{$data->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-outline-primary">Cancel</button>
</form>
@endsection