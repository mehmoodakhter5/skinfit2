
@include('admin.inc.header')
<div class="main-panel">
  <div class="row">
    <div class="col-lg-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">All Suppliers</h4>
          <div class="text-left">
            <a  class="btn btn-inverse-primary btn-fw justify-content-corner" href="{{url('admin/add-supplier')}}">Add New Supplier</a>
          </div>
          <div class="table-responsive">
            <table id="Supplier" class="display responsive nowrap">
              <thead>
                <tr>          
              </tr>
              </thead>
              <tbody>
                <tr>
               
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  @include('admin.inc.footer')