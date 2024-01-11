@include('admin.inc.header')
<div class="col-md-8 grid-margin stretch-card">
<div class="card">
    <form action="{{url('post-supplier')}}" method="post" enctype="multipart/form-data">
        @csrf
<div class="card-body">
    <h4 class="card-title">Add New Supplier</h4>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Supplier Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control inputsproduct"  onkeyup="checkFilled()" name="supplier_name" id="exampleInputEmail2" placeholder="Supplier Name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Supplier Contact Person</label>
        <div class="col-sm-9">
            <input type="text" class="form-control "   onkeyup="checkFilled()" name="supplier_contact_person" id="exampleInputEmail2" placeholder="Supplier Contact Person">
        </div> 
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Supplier Contact Person Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control " onkeyup="checkFilled()"  name="supplier_contact_person_number" id="exampleInputEmail2" placeholder="Supplier Contact Person Number">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Supplier Source</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" onkeyup="checkFilled()"  name="supplier_source" id="exampleInputEmail2" placeholder="Supplier Source">
        </div>
    </div>
 
 
 


            <button type="submit" class="btn btn-primary me-2">Insert New Brand</button>
            <button class="btn btn-light">Cancel</button>
        </div>
    </div>
</div>
</form>
@include('admin.inc.footer')