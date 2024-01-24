@include('admin.inc.header')
<div class="main-panel">
  <div class="row">
    <div class="col-lg-12 grid-margin">
      <div class="card">
    <div class="card-body">
      <div class="text-left">
      <a href="{{url('admin/add-new-blog')}}" class="btn btn-primary btn-icon-text">
        <i class="ti-file btn-icon-prepend"></i>
        Add New Blog
      </a>
    </div>
      <h4 class="card-title">Blogs</h4>
            <table id='brand'>
            <thead>
              

              </thead>
              <tbody>
                
           
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('admin.inc.footer')