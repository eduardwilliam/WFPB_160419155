@extends('layouts.conquer')
@section('content')
<form method="POST" action="{{route('kategori.store')}}">
    @csrf
    <div class="form-group">
        <label for="exampleInputName1">Categories Name</label>
        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter text" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputDescription1">Description</label>
        <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-outline-primary">Cancel</button>
</form>
@endsection