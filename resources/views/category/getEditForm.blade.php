<form role="form" method="POST" action="{{ url('kategori/'.$data->id)}}">
    <div class="modal-header">
        <button type="button" class="close"
        data-dismiss="modal" aria-hidden="true">
        </button>
        <h4 class="modal-title">Edit Category</h4>
    </div>
    <div class="modal-body">
        @csrf
        @method("PUT")
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputName1">Categories Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="name" value="{{$data->name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputDescription1">Description</label>
                <textarea class="form-control" aria-label="With textarea" name="description">{{$data->description}}</textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    </div>
</form>