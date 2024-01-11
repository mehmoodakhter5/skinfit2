
<div class="modal fade" id="exampleModal-4" tabindex="-1" aria-labelledby="ModalLabel" aria-modal="true" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Import Products</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('import-product')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="message-text" class="col-form-label">Upload File:</label>
            <input type="file" name="excel_file" id="message-text">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Send message</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="{{asset('back/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('back/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('back/assets/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('back/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
  <script src="{{asset('back/assets/vendors/jquery-file-upload/jquery.uploadfile.min.js')}}"></script>
  <script src="{{asset('back/assets/vendors/dropzone/dropzone.js')}}"></script>

  <script src="{{asset('back/assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('back/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('back/assets/js/template.js')}}"></script>
  <script src="{{asset('back/assets/js/settings.js')}}"></script>
  <script src="{{asset('back/assets/js/todolist.js')}}"></script>
  <script src="{{asset('back/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
  <script src="{{asset('back/assets/js/dashboard.js')}}"></script>
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>


  <script>
    function checkFilled()  {
        var interests = document.getElementsByClassName("inputsproduct");
        for (var i = 0; i<interests.length; i++)  {
            if (interests[i].value == '')  {
                interests[i].style.borderColor = 'red';
            } else {
                interests[i].style.borderColor = 'green';
            }   
        }
    }
</script>

<script>
  let table = new DataTable('#ProductTable', {
    "ajax": {
      
    "url": "{{ route('getproduct') }}",
    "dataSrc": ""
  },
  deferRender: true,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    responsive: true,
    pagingType: 'full_numbers',
    columns: [
      { data: 'product_name'},
      { data: 'product_regular_price' },
      { 
        data: null,
        render: function (data, type, row) {
          return '<img src="' + '{{ Storage::url('product/') }}' + row.product_image + '" alt="Product Image" height="50" />';
        }
      }

    ]
    
  });
  </script>

<script>
  let table2 = new DataTable('#brand', {
    "ajax": {
      
    "url": "{{ route('getbrand') }}",
    "dataSrc": ""
  },
  deferRender: true,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    responsive: true,
    pagingType: 'full_numbers',
    columns: [
      { data: 'brand_name'},
      { data: 'brand_featured' },
      { data: 'brand_rack' },
      { data: 'brand_most_search' },
      { data: 'logistics_type' },



      { 
        data: null,
        render: function (data, type, row) {
          return '<img src="' + '{{ Storage::url('brand/') }}' + row.brand_image + '" alt="Product Image" height="50" />';
        }
      }

    ]
    
  });
  </script>



<script>
  let table3 = new DataTable('#category', {
    "ajax": {
      
    "url": "{{ route('getcategory') }}",
    "dataSrc": ""
  },
  deferRender: true,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    responsive: true,
    pagingType: 'full_numbers',
    columns: [
      { data: 'category_name'},
      {data:'category_feature'},
    ]
    
  });
  </script>
  <script>
    let table4 = new DataTable('#Supplier', {
      "ajax": {
        
      "url": "{{ route('getsupplier') }}",
      "dataSrc": ""
    },
    deferRender: true,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      responsive: true,
      pagingType: 'full_numbers',
      columns: [
        { data: 'supplier_name'},
        {data:'supplier_contact_person'},
        {data:'supplier_contact_person_number'},
        {data:'supplier_source'},


      ]
      
    });
    </script>

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

  </script>
  <script>
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
  textarea6.on('text-change', function(delta, source) {
   var justHtml = textarea6.root.innerHTML;
   document.getElementById('brand_text').innerHTML = justHtml;
});
 
  </script>
<script>
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
  textarea5.on('text-change', function(delta, source) {
   var justHtml = textarea5.root.innerHTML;
   document.getElementById('category_text').innerHTML = justHtml;
});
</script>
</body>

</html>
