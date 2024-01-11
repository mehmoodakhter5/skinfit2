@include('admin.inc.header')
<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
       
        <form action="{{url('insert-product')}}" method="post"  enctype="multipart/form-data"  class="dropzone" id="ProductaddNew" >
            <div class="text-left">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-4" data-whatever="@getbootstrap">Import Product From Excel</button>
                </div>
            @csrf
            <div class="card-body">
                <h4 class="card-title">Add New Product</h4>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Category</label>
                    <div class="col-sm-9">
                        <select class="js-example-basic-multiple" name="product_category_id[]" multiple="multiple" required>
                            @foreach($category as $cat)
                            <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Sub Category</label>
                    <div class="col-sm-9">
                        <select class="js-example-basic-multiple" name="product_sub_category_id[]" multiple="multiple" required>
                            <option>Select</option>
                            @foreach($sub as $subs)
                            <option value="{{$subs->sub_category_id}}">{{$subs->sub_category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Sub Category Level 2</label>
                    <div class="col-sm-9">
                        <select class="js-example-basic-multiple" name="product_sub_category_id_level_two[]" multiple="multiple" required>
                            <option>Select</option>
                            @foreach($sub2 as $subs2)
                            <option value="{{$subs2->sub_category_level_2_id}}">{{$subs2->sub_category_level_2_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Select Brand</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="product_brand_id" required>
                            <option>Select Brand</option>
                            @foreach($brand as $brands)
                            <option value="{{$brands->brand_id}}">{{$brands->brand_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" name="product_name"  onkeypress="checkFilled()" id="exampleInputEmail2" placeholder="Product Name" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Bar Code</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" onkeypress="checkFilled()" name="product_barcode" id="exampleInputEmail2" placeholder="Product Barcode" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Product Placement</label>
                    <div class="col-sm-9">
                        <select class="form-control inputsproduct"  onkeypress="checkFilled()" name="product_dropship"  required>
                            <option>Select Brand</option>
                            <option value="ture">Yes</option>
                            <option value="false">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Regular Price</label>
                    <div class="col-sm-9">
                        <input
                        type="text"
                        name="product_regular_price"
                        placeholder="Enter Regular Price"
                        class="form-control inputsproduct"  onkeypress="checkFilled()"
                        id="currency2"
                        data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'prefix': '', 'placeholder': '0'"
                        style="text-align: left;"
                    />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Discounted Price</label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            name="product_discounted_price"
                            placeholder="Enter Discounted Price"
                            class="form-control"
                            id="currency2"
                            data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'prefix': '', 'placeholder': '0'"
                            style="text-align: left;"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Short Descripition</label>
                    <div class="col-sm-6">
                        <div id="textarea1" class="quill-container ql-container ql-snow"></div>

                        <textarea name="product_short_description" id="product_short_description" cols="30" rows="10" hidden></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Long Descripition</label>
                    <div class="col-sm-6">
                        <div id="textarea2" class="quill-container ql-container ql-snow"></div>
                        <textarea name="product_long_description" id="product_long_description" cols="30" rows="10" hidden></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product How To Use</label>
                    <div class="col-sm-6">
                        <div id="textarea3" class="quill-container ql-container ql-snow"></div>
                        <textarea name="product_description_one" id="product_description_one" cols="30" rows="10" hidden></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Precautions</label>
                    <div class="col-sm-6">
                        <div id="textarea4" class="quill-container ql-container ql-snow"></div>
                        <textarea name="product_description_two" id="product_description_two" cols="30" rows="10" hidden></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product labels</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Enter labels" name="product_label" class="form-control inputsproduct"  onkeyup="checkFilled()" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Volume</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Enter Volume" name="product_volume" class="form-control inputsproduct"  onkeyup="checkFilled()" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Image</label>
                    <div class="col-sm-9">
                        <div class="fileupload" id="drag-and-drop">
                            <p>Drag and drop a file here or click to select</p>
                            <input type="file" name="product_image" id="fileInput" required/>
                        </div>
                        <div class="form-group row">
                            <div class="dropzone-previews"></div>
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label" >Product Images</label>
                            
                            <div class="fallback"> 
                                <div style="height: 300px">
                            <input type="file" name="product_multiple_images[]" id="product_multiple_images" required multiple>
                        </div>
                        </div>
                    </div>
                    
                    <button type="submit" id="submit-all" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light" type="submit">Cancel</button>
                </div>
               
            </div>
        </form>

    </div>
</div>

@include('admin.inc.footer')