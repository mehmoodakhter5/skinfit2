@include('admin.inc.header');
<div class="col-md-8 grid-margin stretch-card">
<div class="card">
    <form action="" method="post" >
<div class="card-body">
    <h4 class="card-title">Add New Brand</h4>
   
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Country</label>
        <div class="col-sm-9">

            <select class="form-control" id="country_id" name="country_id" required="">
                <option selected="" value="">Please Select</option>
                       
                 </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Rack No</label>
        <div class="col-sm-9">

            <select class="form-control" id="brand_rack" name="brand_rack">
                <option value="">Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
             </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Logistics Type</label>
        <div class="col-sm-9">

            <select class="form-control" id="logistics_type" name="logistics_type" required="">
                <option value="Self">Self</option>
                <option value="DS">DS</option>
             </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Featured Brand</label>
        <div class="col-sm-9">

            <select class="form-control" id="brand_featured" name="brand_featured" required="">
                <option value="yes">Yes</option>
                <option value="no">No</option>
             </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Most Searched Brand</label>
        <div class="col-sm-9">

            <select class="form-control" id="brand_most_search" name="brand_most_search" required="">
                <option value="yes">Yes</option>
                <option value="no">No</option>
             </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Brand Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="product_name" id="exampleInputEmail2" placeholder="Brand Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Brand Text</label>
        <div class="col-sm-6">
            <div id="textarea6" class="quill-container ql-container ql-snow"></div>
        </div>
    </div>
   

            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </div>
    </div>
</div>
</form>
@include('admin.inc.footer');