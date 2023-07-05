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
                        <li class="breadcrumb-item active"><a href="{{ route('tenant.create') }}">Add Tenants</a></li>
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

                    <h2 class="m-0">Tenants Information</h2>
                    <h4 class="pull-right" style="margin-left: 90%"> <a href="{{route('ten.filter')}}">
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
                    <form class="row g-3" action="{{route('tenant.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
              <div class="col-md-4">
                <label for="" class="form-label">Name:</label>
                <input type="text" class="form-control" id="" name="name" placeholder="Enter Name" required>
              </div>
               <div class="col-md-4">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputPassword4" name="email" placeholder="Enter Email" required>
              </div> 
            
              <div class="col-md-4">
                <label for="" class="form-label">Contact No.</label>
                <input type="text" class="form-control" id="inputPassword4" name="phn_no"
                placeholder="Enter Contact Number" required>
              </div>
            
              <div class="col-md-4">
                <label for="" class="form-label">NID No.</label>
                <input type="text" class="form-control" name="nid" 
                placeholder="Enter NID" required>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Permanent Address:</label> <br>
                {{-- <textarea name="per_address" id="" cols="30" rows="3"></textarea> --}}
            
                <input type="text" class="form-control" name="per_address" placeholder="Permanent Address" required>
              </div>
            
              <div class="col-md-3">
                <label for="inputAddress" class="form-label">Gender</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" id="activeRadio" name="gender" value="Male" checked >
                <label class="form-check-label" for="activeRadio">
                Male
                </label>
              </div>
              
              <div class="form-check">
                <input class="form-check-input" type="radio" id="inactiveRadio" name="gender" value="female" >
                <label class="form-check-label" for="inactiveRadio">
              Female
                </label>
              </div>
              </div>
              <br>
              <br>
            
              <div class="col-md-3">
                <label for="" class="form-label">Family-Mamber</label>
                <input type="text" class="form-control" name="family_member" placeholder="5" required>
              </div>
            
              <div class="col-md-3">
                <label for="" class="form-label">Occupation:</label> <br>
                <select name="occupation" id=""  class="form-control" >
                  <option value="Service-Holder">Service-Holder</option>
                  <option value="Business-Man">Business-Man</option>
                  <option value="Govt.Empolyee">Govt.Empolyee</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            
            
              <div class="col-md-3">
                <label for="" class="form-label">Move_in</label>
                <input type="date" class="form-control" name="move_in">
              </div>
              <div class="col-md-3">
                <label for="" class="form-label">Photo</label>
                <input type="file" class="form-control" name="photo" width="50" height="50" required>
              </div>
            
              
              <div class="col-md-3">
                <label for="" class="form-label">Status</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" id="activeRadio" name="status" value="active" checked>
                <label class="form-check-label"  for="inactiveRadio">
             Active
                </label>
              </div>
              
              <div class="form-check">
                <input class="form-check-input" type="radio" id="inactiveRadio"  name="status" value="inactive">
                <label class="form-check-label"  for="inactiveRadio" >
            Inactive
                </label>
              </div>
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