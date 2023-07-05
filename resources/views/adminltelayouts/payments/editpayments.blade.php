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
                  
                    <form class="row g-3" action="{{ route('payment.update', $payment->id) }}" method="post">
                        @csrf
                        @method('PUT') <!-- Add the method field for the update request -->
                        <div class="col-md-4">
                            <label for="tenantID" class="form-label">Tenants Name:</label> <br>
                            <select name="flatassign_id" id="tenantID" class="form-control">
                                <option value="">Select Tenants</option>
                                @foreach ($flatassign as $f)
                                    <option value="{{ $f->id }}" {{ $f->id == $payment->flatassign_id ? 'selected' : '' }}>
                                        {{ $f->tenant->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="tenantID" class="form-label">Tenants Name:</label> <br>
                            <select name="flatassign_id" id="tenantID" class="form-control">
                                <option value="">Select Flats</option>
                                @foreach ($flatassign as $f)
                                    <option value="{{ $f->id }}" {{ $f->id == $payment->flatassign_id ? 'selected' : '' }}>
                                        {{ $f->flat->flat_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    
                        {{-- <div class="col-md-4">
                            <label for="" class="form-label">Flat Name</label> <br>
                            <div id="fa">
                                <select name="flatassign_id" class="form-control" disabled>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div> --}}
                    
                        <div class="col-md-4" id="rent_pay">
                            <label for="payment" class="form-label">Rent Payment</label>
                            <input type="text" class="form-control" id="flatassign_id" name="rent_cost"
                                   placeholder="Enter Rent Payment"  value="{{ $payment->flat_assign->rent_cost }}">
                        </div>
                    
                        <div class="col-md-4">
                            <label for="" class="form-label">Paid</label>
                            <input type="text" class="form-control" name="paid"
                                   placeholder="Enter Paid" value="{{ $payment->paid }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Due</label>
                            <input type="text" class="form-control" name="due" 
                            placeholder="Enter Due" value="{{ $payment->due }}">
                          </div>
             
                    
                        <div class="col-md-4">
                            <label for="" class="form-label">Payment Purpose</label>
                            <input type="text" class="form-control" name="purpose"
                                   placeholder="Enter Payment Purpose" value="{{ $payment->purpose }}" required>
                        </div>
                    
                        <div class="col-md-4">
                            <label for="" class="form-label">Payment Date</label>
                            <input type="date" class="form-control" name="payment_date" value="{{ $payment->payment_date }}" required>
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
                    
                   
               
                



@include('adminltelayouts.footer');