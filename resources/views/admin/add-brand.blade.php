@include('admin.inc.header')
<div class="col-md-8 grid-margin stretch-card">
<div class="card">
    <form action="{{url('post-brand')}}" method="post" enctype="multipart/form-data">
        @csrf
<div class="card-body">
    <h4 class="card-title">Add New Brand</h4>
   
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Country</label>
        <div class="col-sm-9">

            <select class="form-control" id="country_id" name="country_id" required="">
                <option selected="" value="" required>Please Select</option>
                    @foreach($Countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                 </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Rack No</label>
        <div class="col-sm-9">

            <select class="form-control" id="brand_rack" name="brand_rack" required>
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
                <option value="true">Yes</option>
                <option value="false">No</option>
             </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Most Searched Brand</label>
        <div class="col-sm-9">

            <select class="form-control" id="brand_most_search" name="brand_most_search" required="">
                <option value="true">Yes</option>
                <option value="false">No</option>
             </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Brand Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control inputsproduct"  onkeyup="checkFilled()" name="brand_name" id="exampleInputEmail2" placeholder="Brand Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail244" class="col-sm-3 col-form-label">Brand Image</label>
        <div class="col-sm-9">
            <input type="file" class="form-control inputsproduct"  onkeyup="checkFilled()" name="brand_image" id="exampleInputEmail244">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2as" class="col-sm-3 col-form-label">Brand Banner</label>
        <div class="col-sm-9">
            <input type="file" class="form-control inputsproduct"  onkeyup="checkFilled()" name="brand_banner" id="exampleInputEmail2as">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Brand Text</label>
        <div class="col-sm-6">
            <div id="textarea6" class="quill-container ql-container ql-snow"></div>
            <textarea name="brand_text" id="brand_text" cols="30" rows="10" hidden></textarea>
        </div>
    </div>
            <button type="submit" class="btn btn-primary me-2">Insert New Brand</button>
            <button class="btn btn-light">Cancel</button>
        </div>
    </div>
</div>
</form>
@include('admin.inc.footer')