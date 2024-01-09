
@include('admin.inc.header');
<div class="col-lg-12 grid-margin">
    <a type="button" class="btn btn-inverse-primary btn-fw" href="">Primary</a>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Hoverable Table</h4>
        <p class="card-description">
          Add class <code>.table-hover</code>
        </p>
        <div class="table-responsive">
          <table id="ProductTable" class="display responsive" >
            <thead>
              <tr>
          
              </tr>
            </thead>
            <tbody>
    
      
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @include('admin.inc.footer');