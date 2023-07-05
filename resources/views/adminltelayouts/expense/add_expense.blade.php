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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Expense</li>
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
                    <h2 class="m-0">Expense Information</h2>
                    @if ($message = Session::get('msg'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                </div>
                <div class="card-body">
                    <!-- {{-- <h6 class="card-title"></h6>

                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a> --}} -->
                    <form class="row g-3" action="{{route('expense.store')}}" method="post">
                        @csrf
                        
                          <div class="col-md-4">
                            <label for="" class="form-label">Expense Category:</label> <br>
                            <select name="name" id=""  class="form-control" >
                              <option value="">Select Expense Category</option>
                              <option value="Monthly Meeting">Monthly Meeting</option>
                              <option value="Guard Salary">Guard Salary</option>
                              <option value="Manager Salary">Manager Salary</option>
                              <option value="Social Donation">Social Donation</option>
                            </select>
                          </div>
              <div class="col-md-4">
                <label for="" class="form-label">Amount</label>
                <input type="text" class="form-control" id="inputPassword4" name="cost" placeholder="cost" required>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Expense Date</label>
                <input type="datetime-local" class="form-control" id="inputPassword4" name="date" required>
              </div>
<br><br><br>
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
<!-- /.control-sidebar -->

@include('adminltelayouts.footer');