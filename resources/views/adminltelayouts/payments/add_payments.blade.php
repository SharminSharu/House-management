@include('adminltelayouts.header');

@include('adminltelayouts.menu');

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Overview of House Rental Management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('tenant.create') }}">Add Payments</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h2 class="m-0">Payments Information</h2>
                    @if ($message = Session::get('msg'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                </div>
                <div class="card-body">
                  
                    <form class="row g-3" action="{{route('payment.store')}}" method="post">
                        @csrf
              <div class="col-md-4">
                <label for="" class="form-label">Tenants Name:</label> <br>
                <select name="flatassign_id" id="tenantID"  class="form-control"  >

               <option value="" >Select Tenants </option>
               @foreach ($flatassign as $f)
               <option value="{{ $f->id }}">{{ $f->tenant->name }}</option>
           @endforeach
                </select>
              </div>
              
              <div class="col-md-4">
                <label for="" class="form-label">Flat Name</label> <br>
                <div id="fa">
                    <select name="flatassign_id" class="form-control" disabled>
                        <option value=""></option>
                    </select>
                </div>

            </div>
      
              <div class="col-md-4" id='rent_pay'>
                <label for="payment" class="form-label">Rent Payment</label>
                <input type="text" class="form-control" id="payment" name="rent_cost"
                placeholder="Enter Rent Payment" disabled>
              </div>
            
              <div class="col-md-4">
                <label for="paid" class="form-label">Paid</label>
                <input type="text" class="form-control" name="paid" id='paid'
                placeholder="Enter Paid" >
              </div>

              <div class="col-md-4">
                <label for="due" class="form-label">Due</label>
                <input type="text" class="form-control" name="due" id='due'
                placeholder="Enter Due" >
              </div>
 
            
              <div class="col-md-4">
                <label for="" class="form-label">Payment Purpose</label>
                <input type="text" class="form-control" name="purpose"
                placeholder="Enter Payment Purpose" required>
              </div>

              <div class="col-md-4">
                <label for="" class="form-label">Payment Date</label>
                <input type="date" class="form-control" name="payment_date" required>
              </div>
           
            
              
         
              <div class="col-12 text-right">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
                               
               
                
                </div>
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tenantID').change(function() {
           
            
            let tenentID = $(this).val(); 

            $.ajax({
                url: '{{route("getflat")}}',
                method:'post',
                data: {
                    id: tenentID,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    console.log(data);
                
                    let ht = `<select class="form-control" name="flatassign_id" id="flat">`
                    let bt = `<label for="payment" name="rent_cost"  class="form-label">Rent Payment</label>`

                    
                        ht += `<option value="${data['flat'].id}">${data['flat'].flat_name}</option>`
                         bt += `<input type="text" class="form-control" id="payment" name="rent_cost" value="${data['payment']}">`
                   
                    ht += `</select> `
                    $('#fa').html(ht);
                      $('#rent_pay').html(bt);
                }

            });
        });

    });
</script>

<script>
     $(document).ready(function() {
        $('#paid').keyup(function() {
            let paid = $('#paid').val(); 
            let payment = $('#payment').val();
            console.log(paid); 

            $.ajax({
                url: '{{route("getdue")}}',
                method:'post',
                data: {
                
                    pdvalue: paid,
                    pmvalue: payment,
                    _token: '{{ csrf_token() }}'
                },
                success: function(due) {
                    console.log(due);
                    $('#due').val(due);
                      
                }

            });

        })
    })
</script>






@include('adminltelayouts.footer');
