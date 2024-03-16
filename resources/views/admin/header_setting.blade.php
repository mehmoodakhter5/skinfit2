@include('admin.inc.header')
<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
       
        <form action="{{ route('header-update', ['id' => 1])}}" method="post"  enctype="multipart/form-data"  class="dropzone" id="ProductaddNew" >
            @csrf
            @method('PUT')

            <div class="card-body">
                <h4 class="card-title">Update Header Image</h4>
   
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Image Link</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control inputsproduct" value="{{$homepage_setting->header_setting_link}}" name="header_setting_link"  id="exampleInputEmail2" />
                    </div>
                </div>   

                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Upload Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control inputsproduct" value="{{$homepage_setting->header_setting_image}}" name="header_setting_image"  id="exampleInputEmail2" />
                    </div>
                </div>   
            
        
             
                <div class="form-group row">
                     <button type="submit" id="submit-all" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light" type="submit">Cancel</button>
                </div>
               
            </div>
        </form>

    </div>
</div>
@include('admin.inc.footer')