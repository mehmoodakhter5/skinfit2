
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

<div class="modal fade" id="pomodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Purchase</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="purchaseOrderModal">
          <div class="modal-header">
            <select name="" id="" class="input-field">
              <option selected>Select Supplier</option>
            </select>
            <input type="text" class="input-field" placeholder="PO Reference No.">
            <input type="date" class="input-field">
 
          </div>
          
          <div class="purchase-lines">
            <table id="purchaseLinesTable">
              <tr>
                <th>Brand</th>
                <th>Name</th>
                <th>SKU</th>
                <th>Quantity</th>
                <th>Purchasing Price</th>
                <th>Tax</th>
                <th>Sub Total</th>
                <th>Action</th>
              </tr>
            </table>
            <button id="addRowButton">Add Product</button>
          </div>
          
          <div class="summary-area">
            <input type="text" class="input-field"  placeholder="Gross Amount">
            <input type="text" class="input-field"  placeholder="Tax">
            <input type="text" class="input-field"  placeholder="Net Amount">
            <input type="text" class="input-field"  placeholder="Paid Amount">
          </div>
          
          <div class="supplier-notes">
            <textarea rows="4" placeholder="Enter supplier notes"></textarea>
          </div>
          
          <div class="attachments">
            <input type="file" class="input-field">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="{{asset('back/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('back/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('back/assets/vendors/chart.js/Chart.min.js')}}" ></script>
{{-- <script src="{{asset('back/assets/vendors/progressbar.js/progressbar.min.js')}}"></script> --}}
<script src="{{asset('back/assets/vendors/jquery-file-upload/jquery.uploadfile.min.js')}}"></script>
{{-- <script src="{{asset('back/assets/vendors/dropzone/dropzone.js')}}"></script> --}}
{{-- <script src="{{asset('back/assets/js/off-canvas.js')}}"></script> --}}
<script src="{{asset('back/assets/js/hoverable-collapse.js')}}"></script>
{{-- <script src="{{asset('back/assets/js/settings.js')}}"></script> --}}
{{-- <script src="{{asset('back/assets/js/todolist.js')}}"></script> --}}
{{-- <script src="{{asset('back/assets/js/jquery.cookie.js')}}" type="text/javascript"></script> --}}
<script src="{{asset('back/assets/js/dashboard.js')}}"></script>
  <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script>
    // Function to add a new purchase line
    function addRow() {
      var table = document.getElementById('purchaseLinesTable');
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);

  fetch('{{ route('getbrand') }}')
    .then(response => response.json())
    .then(data => {
        // Populate select options
        var selectOptions = '';
        data.forEach(option => {
            selectOptions += `<option value="${option.brand_id}">${option.brand_name}</option>`;
        });

        cell1.innerHTML = `<select class="input-field" name="brand">${selectOptions}</select>`;

        document.querySelector('select[name="brand"]').addEventListener('change', function() {
            var selectedBrandId = this.value;

            fetch(`/getselectedproduct/${selectedBrandId}`)
                .then(response => response.json())
                .then(data => {
                    var productOptions = '';
                    data.forEach(product => {
                        productOptions += `<option value="${product.value}">${product.product_name}</option>`;
                    });

                    cell2.innerHTML = `<select class="input-field" name="product[]">${productOptions}</select>`;
                })
                .catch(error => {
                    console.error('Error fetching selected products:', error);
                });
        });
    })
    .catch(error => {
        console.error('Error fetching select data:', error);
    });

  cell2.innerHTML = '<input type="text" class="input-field" name="sku[]" />';
  cell3.innerHTML = '<input type="number" class="input-field" name="quantity[]" min="0" />';
  cell4.innerHTML = '<input type="number" class="input-field" name="price[]" min="0" step="0.01" />';
  cell5.innerHTML = '<input type="number" class="input-field" name="tax[]" min="0" step="0.01" />';
  cell6.innerHTML = '<input type="number" class="input-field" name="subtotal[]" readonly />';
  cell7.innerHTML = '<button type="button" onclick="removeRow(this)">Remove</button>';
    }
  
    window.removeRow = function (button) {
      var row = button.parentNode.parentNode;
      row.parentNode.removeChild(row);
      calculateTotals();
    }
  
    function calculateTotals() {
      var table = document.getElementById('purchaseLinesTable');
      var grossAmount = 0;
      var tax = 0;
      for (var i = 1, row; row = table.rows[i]; i++) {
        var quantity = parseFloat(row.cells[2].querySelector('input').value) || 0;
        var price = parseFloat(row.cells[3].querySelector('input').value) || 0;
        var taxRate = parseFloat(row.cells[4].querySelector('input').value) || 0;
        var subtotal = quantity * price;
        var taxAmount = (subtotal * taxRate) / 100;
        row.cells[5].querySelector('input').value = taxAmount.toFixed(2);
        row.cells[6].querySelector('input').value = (subtotal + taxAmount).toFixed(2);
        grossAmount += subtotal;
        tax += taxAmount;
      }
      document.getElementById('grossAmount').value = grossAmount.toFixed(2);
      document.getElementById('tax').value = tax.toFixed(2);
      document.getElementById('netAmount').value = (grossAmount + tax).toFixed(2);
    }
  
    document.getElementById('addRowButton').addEventListener('click', function () {
      addRow();
    });
  
    // Event listener for form submission
    document.getElementById('purchaseOrderForm').addEventListener('submit', function (event) {
      event.preventDefault(); // Prevent form submission
      // Here you would collect all the data from the form and send it to the server
      var formData = new FormData(this);
      fetch('/save_purchase_order', {
        method: 'POST',
        body: formData
      })
      .then(response => {
        if (response.ok) {
          alert('Purchase order saved successfully!');
          // Reset form or redirect to another page
          this.reset();
        } else {
          throw new Error('Failed to save purchase order');
        }
      })
      .catch(error => {
        console.error('Error saving purchase order:', error);
        alert('Failed to save purchase order. Please try again later.');
      });
    });
  </script>
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
    "dataSrc": "",

  },
  deferRender: true,
  processing: true,

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
      },
      {
        data: null,
        render: function (data, type, row) {
          return '<a href="">Edit</a>';
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
        let table5 = new DataTable('#InventoryTable', {
          "ajax": {
            
          "url": "{{ route('getinventory') }}",
          "dataSrc": ""
        },
        deferRender: true,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          responsive: true,
          pagingType: 'full_numbers',
          columns: [
            { data: 'inventory_logistics_type'},
            {data:'inventory_batch_number'},
            {data:'inventory_reference_number'},
            {data:'inventory_expiry_date'},
            {data:'inventory_quantity'},
            {data:'inventory_price'},    
          ]
          
        });
</script>
<script>
  let table6 = new DataTable('#userTable', {
    "ajax": {
      
    "url": "{{ route('users') }}",
    "dataSrc": ""
  },
  deferRender: true,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    responsive: true,
    pagingType: 'full_numbers',
    columns: [
      { data: 'name'},
      {data:'email'},
      {data:'type'},
  
    ]
    
  });
</script>
<script>
  let table7 = new DataTable('#PoTable', {
    "ajax": {
      
    "url": "{{ route('getpo') }}",
    "dataSrc": ""
  },
  deferRender: true,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    responsive: true,
    pagingType: 'full_numbers',
    columns: [
      { data: 'purchase_order_supplier_id'},
      {data:'purchase_order_date'},
      {data:'purchase_order_reference'},
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
