@include('admin.inc.header');
<div class="col-md-8 grid-margin stretch-card">
<div class="card">
    <form action="{{url('post-sub-category-1')}}" method="post" >
        @csrf
<div class="card-body">
    <h4 class="card-title">Add New Sub Category</h4>
   
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Sub Category</label>
        <div class="col-sm-9">

            <select class="form-control" name="sub_category_id" id="sub_category_id">
                <option value="">Select Category</option>
                @foreach ($subcategory as $item)
                <option value="{{$item->sub_category_id}}">{{$item->sub_category_name}}</option>    
                @endforeach

            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Sub Category lvl 2 Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control inputsproduct"  onkeyup="checkFilled()" name="sub_category_level_2_name" id="exampleInputEmail2" placeholder="Category Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Sub Category  lvl 2  Text</label>
        <div class="col-sm-9">
            <textarea  rows="10"  class="form-control inputsproduct"  onkeyup="checkFilled()"  name="sub_category_level_2_text" id="exampleInputEmail2" ></textarea>
        </div>
    </div>
   

            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </div>
    </div>
</div>
</form>
@include('admin.inc.footer');