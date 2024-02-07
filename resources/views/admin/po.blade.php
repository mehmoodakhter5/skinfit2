
@include('admin.inc.header')
<div class="main-panel">
  <div class="row">
    <div class="col-lg-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">All Purchase Orders</h4>
          <div class="text-left">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#pomodal" data-whatever="@getbootstrap">Add New PO</button>
            </div>
          <div class="table-responsive">
            <table id="PoTable" class="display responsive">
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