@include('admin.inc.header');
<div class="col-md-8 grid-margin stretch-card">
<div class="card">
    <form action="" method="post" id='add-product'>
<div class="card-body">
    <h4 class="card-title">Add New Product</h4>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Category</label>
        <div class="col-sm-9">
            <select class="js-example-basic-multiple" name="product_category_id[]" multiple="multiple">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Sub Category</label>
        <div class="col-sm-9">
            <select class="js-example-basic-multiple" name="product_sub_category_id[]" multiple="multiple">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Sub Category Level 2</label>
        <div class="col-sm-9">
            <select class="js-example-basic-multiple" name="product_sub_category_id_level_two[]" multiple="multiple">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Select Brand</label>
        <div class="col-sm-9">
            <select class="form-control" name="product_brand_id">
                <option >Select Brand</option>
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="product_name" id="exampleInputEmail2" placeholder="Product Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Bar Code</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="product_barcode" id="exampleInputEmail2" placeholder="Product Barcode">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Product Placement</label>
        <div class="col-sm-9">
            <select class="form-control" name="product_dropship">
                <option >Select Brand</option>
                <option value="ture">Yes</option>
                <option value="false">No</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Regular Price</label>
        <div class="col-sm-9">
            <input type="text" name='product_regular_price' placeholder="Enter Regular Price" class="form-control" id="currency2" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'prefix': 'PKR ', 'placeholder': '0'" style="text-align: left;">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Discounted Price</label>
        <div class="col-sm-9">
            <input type="text" nmae='product_discounted_price' placeholder="Enter Discounted Price" class="form-control" id="currency2" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'prefix': 'PKR ', 'placeholder': '0'" style="text-align: left;">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Short Descripition</label>
        <div class="col-sm-6">
            <div id="textarea1" class="quill-container ql-container ql-snow"></div>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Long Descripition</label>
        <div class="col-sm-6">
            <div id="textarea2" class="quill-container ql-container ql-snow"></div>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product How To Use</label>
        <div class="col-sm-6">
            <div id="textarea3" class="quill-container ql-container ql-snow"></div>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Precautions</label>
        <div class="col-sm-6">
            <div id="textarea4" class="quill-container ql-container ql-snow"></div>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product labels</label>
        <div class="col-sm-9">
            <input type="text" placeholder="Enter labels" class="form-control" >
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Volume</label>
        <div class="col-sm-9">
            <input type="text" placeholder="Enter Volume" class="form-control" >
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
            <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Images</label>
                <div class="col-sm-9 dropzone"  id='dropzone'>
                </div>
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </div>
    </div>
</div>
</form>
@include('admin.inc.footer');