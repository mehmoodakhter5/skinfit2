  
  
  
  
  <!-- plugins:js -->
  <script src="{{asset('back/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('back/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('back/assets/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('back/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
  <script src="{{asset('back/assets/vendors/jquery-file-upload/jquery.uploadfile.min.js')}}"></script>
  <script src="{{asset('back/assets/vendors/dropzone/dropzone.js')}}"></script>

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
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
  var form = document.getElementById("add-product");

form.onsubmit = function() {
  var name = document.querySelector('input[name=body]');
  name.value = JSON.stringify(quill.getContents());

  return true; // submit form
}
</script>



<script>
  $("div#dropzone").dropzone({ url: "/file/post" });
</script>
<script>
$(document).ready(function(){
  $("input").inputmask();
});


$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>

  <!-- <script src="../../assets/js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page-->

   <script>
        var quill = new Quill('#textarea1', {
      modules: {
        toolbar: [
          [{
            header: [1, 2, false]
          }],
          ['bold', 'italic', 'underline'],
          ['image', 'code-block']
        ]
      },
      placeholder: 'Product Short Descriptionc...',
      theme: 'snow' // or 'bubble'
    });
  
    var quill = new Quill('#textarea2', {
      modules: {
        toolbar: [
          [{
            header: [1, 2, false]
          }],
          ['bold', 'italic', 'underline'],
          ['image', 'code-block']
        ]
      },
      placeholder: 'Product Long Description...',
      theme: 'snow' // or 'bubble'
    });
    var quill = new Quill('#textarea3', {
    modules: {
      toolbar: [
        [{
          header: [1, 2, false]
        }],
        ['bold', 'italic', 'underline'],
        ['image', 'code-block']
      ]
    },
    placeholder: 'How to Use?...',
    theme: 'snow' // or 'bubble'
  });




  var quill = new Quill('#textarea4', {
    modules: {
      toolbar: [
        [{
          header: [1, 2, false]
        }],
        ['bold', 'italic', 'underline'],
        ['image', 'code-block']
      ]
    },
    placeholder: 'Product Precautions?',
    theme: 'snow' // or 'bubble'
  });
  var quillText = quill.getText();
  console.log(quillText);
  </script>

</body>

</html>
