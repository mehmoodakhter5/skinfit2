<!-- plugins:js -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
  <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>


<script>
  new DataTable('#category');
  new DataTable('#subcategory');
  new DataTable('#subcategory1');

  
  </script> 





<script>
  Dropzone.options.ProductaddNew = {

autoProcessQueue: true,
uploadMultiple: true,
parallelUploads: 25,
maxFiles: 10,

init: function() {
    var myDropzone = this;


    $("#submit-all").click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        myDropzone.processQueue();
    }); 
}
}
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
        var textarea1 = new Quill('#textarea1', {
      modules: {
        toolbar: [
          [{
            header: [1, 2, false]
          }],
          ['bold', 'italic', 'underline'],
          ['image', 'code-block']
        ]
      },
      placeholder: 'Product Short Description...',
      theme: 'snow' 
    
    });
    textarea1.on('text-change', function(delta, source) {
   var justHtml = textarea1.root.innerHTML;
   document.getElementById('product_short_description').innerHTML = justHtml;
});
    var textarea2 = new Quill('#textarea2', {
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
      theme: 'snow' 
    });
    textarea2.on('text-change', function(delta, source) {
   var justHtml = textarea2.root.innerHTML;
   document.getElementById('product_long_description').innerHTML = justHtml;
});
    var textarea3 = new Quill('#textarea3', {
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
    theme: 'snow' 
  });
  textarea3.on('text-change', function(delta, source) {
   var justHtml = textarea3.root.innerHTML;
   document.getElementById('product_description_one').innerHTML = justHtml;
});



  var textarea4 = new Quill('#textarea4', {
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
    theme: 'snow' 
  });
  textarea4.on('text-change', function(delta, source) {
   var justHtml = textarea4.root.innerHTML;
   document.getElementById('product_description_two').innerHTML = justHtml;
});
  var textarea5 = new Quill('#textarea5', {
    modules: {
      toolbar: [
        [{
          header: [1, 2, false]
        }],
        ['bold', 'italic', 'underline'],
        ['image', 'code-block']
      ]
    },
    placeholder: 'Category Text',
    theme: 'snow' 
  });
  var textarea6 = new Quill('#textarea6', {
    modules: {
      toolbar: [
        [{
          header: [1, 2, false]
        }],
        ['bold', 'italic', 'underline'],
        ['image', 'code-block']
      ]
    },
    placeholder: 'Brand Text',
    theme: 'snow'
  });
 
  </script>

</body>

</html>
