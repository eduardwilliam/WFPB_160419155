@extends('layouts.conquer')
@section('content')
<form enctype="multipart/form-data" method="POST" action="{{route('obat.store')}}">
    @csrf
    <div class="form-group">
        <label for="exampleInputName1">Medicine Name</label>
        <input type="text" class="form-control" id="exampleInputMedicineName" placeholder="Enter text" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputName1">Form</label>
        <input type="text" class="form-control" id="exampleInputMedicineForm" placeholder="Enter form" name="form">
    </div>
    <div class="form-group">
        <label for="exampleInputName1">Restriction Formula</label>
        <input type="text" class="form-control" id="exampleInputMedicineRestriction" placeholder="Enter formula" name="restriction_formula">
    </div>
    <div class="form-group">
        <label for="exampleInputName1">Price</label>
        <input type="text" class="form-control" id="exampleInputMedicineName" placeholder="Enter Price" name="price">
    </div>
    <div class="form-group">
        <label for="exampleInputDescription1">Description</label>
        <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
    </div>
    <div class="dropdown">
        <label for="">Category</label><br>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category Name
        </button>
        @foreach($listData as $li)
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
        @endforeach
    </div>
    <div class="form-group">
            <label>Logo</label>
            <input type="file" class="form-control" id='logo' name='logo'>
        </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-outline-primary">Cancel</button>
</form>
@endsection