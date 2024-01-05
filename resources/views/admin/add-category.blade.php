@include('admin.inc.header');
<div class="col-md-8 grid-margin stretch-card">
<div class="card">
    <form action="" method="post" id='add-product'>
<div class="card-body">
    <h4 class="card-title">Add New Category</h4>
   

    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Category Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="product_name" id="exampleInputEmail2" placeholder="Category Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Category Sort Id</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" name="Category Sort Id" id="exampleInputEmail2" placeholder="Product Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Category Text</label>
        <div class="col-sm-6">
            <div id="textarea5" class="quill-container ql-container ql-snow"></div>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Image</label>
        <div class="col-sm-9">
            <div id="fileuploader">
                <div class="ajax-upload-dragdrop" style="vertical-align: top; width: 400px;">
                    <div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;">
                        Upload
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </div>
    </div>
</div>
</form>
@include('admin.inc.footer');