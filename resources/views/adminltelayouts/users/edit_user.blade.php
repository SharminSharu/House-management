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
                        <li class="breadcrumb-item active">Users</li>
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
                    <h2 class="m-0">Update Users Information</h2>
                    @if ($message = Session::get('msg'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                </div>
                <div class="card-body">
                    {{-- <h6 class="card-title"></h6>

                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    <form class="row g-3" action="{{route('user.update',$user->id)}}" method="post" >
                        @csrf
                        @method('PUT')
              <div class="col-md-4">
                <label for="" class="form-label">Name:</label>
                <input type="text" class="form-control" id="" name="name"  
                value="{{$user->name}}">
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputPassword4" name="email"
                value="{{$user->email}}">
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="inputPassword4" name="phn_num"
                value="{{$user->phn_num}}">
              </div>
            
              <div class="col-md-4">
                <label for="" class="form-label">Password</label>
                <input type="text" class="form-control" name="password"
                value="{{$user->password}}">
              </div>
           
            
      
          
            
              <div class="col-md-4">
                <label for="" class="form-label">Role:</label> <br>
                <select name="role" id=""  class="form-control" value="{{$user->role}}" >
                  <option value="admin">Admin</option>
                  <option value="manager">Manager</option>
                </select>
              </div>
            
            
     
            
              <div class="col-12 text-right">
                <button type="submit" class="btn btn-primary">Update</button>
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