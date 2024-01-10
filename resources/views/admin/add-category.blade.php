@include('admin.inc.header');
<div class="col-md-8 grid-margin stretch-card">
<div class="card">
    <form action="{{url('post-category')}}" method="post" id='add-product'>
        @csrf
<div class="card-body">
    <h4 class="card-title">Add New Category</h4>
   

    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Category Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control inputsproduct"  onkeyup="checkFilled()" name="category_name" id="exampleInputEmail2" placeholder="Category Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Category Sort Id</label>
        <div class="col-sm-9">
            <input type="number" class="form-control inputsproduct"  onkeyup="checkFilled()" name="category_sort" id="exampleInputEmail2" placeholder="Category Sort">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Category Text</label>
        <div class="col-sm-6">
            <div id="textarea5" class="quill-container ql-container ql-snow"></div>

            <textarea name="category_text" id="category_text" cols="30" rows="10"  hidden></textarea>
        </div>
    </div>

            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </div>
    </div>
</div>
</form>
@include('admin.inc.footer');