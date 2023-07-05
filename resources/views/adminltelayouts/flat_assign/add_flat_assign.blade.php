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
                        <li class="breadcrumb-item active">Flat_Assign</li>
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
                    <h2 class="m-0">FlatAssign Information</h2>

                    <h4 class="pull-right" style="margin-left: 90%"> <a href="{{route('frep.filter')}}">
                        <button class="btn btn-warning"> <i class="fa fa-plus-circle">&nbsp; Report</i></button></a></h4>

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
                
                    <form class="row g-3" action="{{route('fagn.store')}}" method="post">
                        @csrf
                        <div class="col-md-3">
                            <label for="" class="form-label">Tenants Name:</label> <br>
                            <select name="tenant_id" id=""  class="form-control" required >

                                
                           <option value="">Select Tenants </option>
                           @foreach ($tenants as $f )
                           <option value="{{$f->id}}">{{$f->name}}</option> 
                           @endforeach

                            </select>
                          </div>

                          <div class="col-md-3">
                            <label for="" class="form-label">Flats Name:</label> <br>
                            <select name="flat_id" id=""  class="form-control" required>

                           
                           <option value="">Select Flats</option>
                           @foreach ($flats as $f )
                           <option value="{{$f->id}}">{{$f->flat_name}}</option> 
                           @endforeach

                            </select>
                          </div>
             
              <div class="col-md-4">
                <label for="" class="form-label">Assign_Date</label>
                <input type="date" class="form-control" id="inputPassword4" name="assign_date" required>
              </div>
            
              <div class="col-md-4">
                <label for="" class="form-label">Rent_Cost</label>
                <input type="text" class="form-control" name="rent_cost" required>
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
<!-- /.control-sidebar -->

@include('adminltelayouts.footer');