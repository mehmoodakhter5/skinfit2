@include('admin.inc.header')
<div class="col-md-8 grid-margin stretch-card">
<div class="card">
    <form action="{{url('post-user')}}" method="post" enctype="multipart/form-data">
        @csrf
<div class="card-body">
    <h4 class="card-title">Add New Supplier</h4>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">User Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control inputsproduct"  onkeyup="checkFilled()" name="name" id="exampleInputEmail2" placeholder="Name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">User Email</label>
        <div class="col-sm-9">
            <input type="email" class="form-control "   onkeyup="checkFilled()" name="email" id="exampleInputEmail2" placeholder="Email">
        </div> 
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">User Password</label>
        <div class="col-sm-9">
            <input type="text" class="form-control " onkeyup="checkFilled()"  name="password" id="exampleInputEmail2" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">User Type</label>
        <div class="col-sm-9">

            <select class="form-control" name="type" id="" required>
                <option value="">Select Type</option>
                <option value="1">Super Admin Just Like You ;)</option>
                <option value="2">Sub Admin</option>

            </select>
        </div>
    </div>
   
            <button type="submit" class="btn btn-primary me-2">Insert New User</button>
            <button class="btn btn-light">Cancel</button>
        </div>
    </div>
</div>
</form>
@include('admin.inc.footer')