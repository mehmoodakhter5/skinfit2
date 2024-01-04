<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skin Fit - Admin </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('back/assets/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('back/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('back/assets/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('back/assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('back/assets/images/favicon.png')}}" />
</head>
<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Default form</h4>
            <p class="card-description">
              Basic form layout
            </p>
            <form class="forms-sample" action="{{url('auth')}}" method="POST">
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1"  name='email' placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name='password' placeholder="Password">
              </div>

              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Remember me
                <i class="input-helper"></i></label>
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
  <!-- plugins:js -->
  <script src="{{asset('back/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('back/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('back/assets/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('back/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('back/assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('back/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('back/assets/js/template.js')}}"></script>
  <script src="{{asset('back/assets/js/settings.js')}}"></script>
  <script src="{{asset('back/assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('back/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
  <script src="{{asset('back/assets/js/dashboard.js')}}"></script>
  <script src="{{asset('back/assets/js/proBanner.js')}}"></script>
</body>
</html>