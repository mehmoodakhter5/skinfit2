@include('admin.inc.header')
<div class="col-md-8 grid-margin stretch-card">
<div class="card">
    <form action="{{url('post-inventory')}}" method="post" >
        @csrf
<div class="card-body">
    <h4 class="card-title">Add New Inventory</h4>
   
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Supplier</label>
        <div class="col-sm-9">

            <select class="form-control" name="inventory_supplier_id" id="">
                <option value="">Select Supplier</option>
                @foreach($supplier as $sup)
                <option value="{{$sup->supplier_id}}">{{$sup->supplier_name}}</option>
                @endforeach

            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Logistics</label>
        <div class="col-sm-9">

            <select class="form-control" name="inventory_logistics_type" id="">
                <option value="">Select Logistics</option>
                <option value="SELF">SELF</option>
                <option value="DS">DS</option>

            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Brand</label>
        <div class="col-sm-9">

            <select class="form-control" name="inventory_brand_id" id="">
                <option value="">Select Brand</option>
                @foreach($brand as $brands)
                <option value="{{$brands->brand_id}}">{{$brands->brand_name}}</option>
                @endforeach

            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product</label>
        <div class="col-sm-9">

            <select class="form-control" name="inventory_product_id" id="">
                <option value="">Select Product</option>
                <option value=""></option>

            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Batch Number</label>
        <div class="col-sm-9">
            <input type="text" class="form-control inputsproduct"  onkeyup="checkFilled()" name="inventory_batch_number" id="exampleInputEmail2" placeholder="Batch Number">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Reference Number</label>
        <div class="col-sm-9">
            <input type="text" class="form-control inputsproduct"  onkeyup="checkFilled()" name="inventory_reference_number" id="exampleInputEmail2" placeholder="Reference Number">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Expiry Date</label>
        <div class="col-sm-9">
            <input type="date" class="form-control inputsproduct"  onkeyup="checkFilled()" name="inventory_expiry_date" id="exampleInputEmail2" placeholder="Reference Number">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Quantity</label>
        <div class="col-sm-9">
            <input type="number" class="form-control inputsproduct"  onkeyup="checkFilled()" name="inventory_quantity" id="exampleInputEmail2" placeholder="Quantity">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Price</label>
        <div class="col-sm-9">
            <input type="number" class="form-control inputsproduct"  onkeyup="checkFilled()" name="inventory_price" id="exampleInputEmail2" placeholder="Price">
        </div>
    </div>

            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </div>
    </div>
</div>
</form>
@include('admin.inc.footer')