@include('admin.inc.header');
<div class="col-md-8 grid-margin stretch-card">
<div class="card">
    <form action="{{url('post-sub-category')}}" method="post" >
        @csrf
<div class="card-body">
    <h4 class="card-title">Add New Sub Category</h4>
   
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Category</label>
        <div class="col-sm-9">

            <select class="form-control" name="category_id" id="">
                <option value="">Select Category</option>
                @foreach($category as $cat)
                <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                @endforeach

            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Sub Category Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control inputsproduct"  onkeyup="checkFilled()" name="sub_category_name" id="exampleInputEmail2" placeholder="Category Name">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Sub Category Text</label>
        <div class="col-sm-9">
            <textarea " rows="10"  class="form-control inputsproduct"  onkeyup="checkFilled()"  name="sub_category_text" id="exampleInputEmail2" ></textarea>
        </div>
    </div>
   

            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </div>
    </div>
</div>
</form>
@include('admin.inc.footer');