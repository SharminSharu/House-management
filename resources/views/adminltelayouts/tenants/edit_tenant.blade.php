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
                        <li class="breadcrumb-item active">Tenants</li>
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
                    <h2 class="m-0">Update Tenants Information</h2>
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
                    <form class="row g-3" action="{{route('tenant.update',$tenant->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
              <div class="col-md-4">
                <label for="" class="form-label">Name:</label>
                <input type="text" class="form-control" id="" name="name"  
                value="{{$tenant->name}}">
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputPassword4" name="email" value="{{$tenant->email}}">
              </div> 
              <div class="col-md-4">
                <label for="" class="form-label">Contact No.</label>
                <input type="text" class="form-control" id="inputPassword4" name="phn_no"
                value="{{$tenant->phn_no}}">
              </div>
            
              <div class="col-md-4">
                <label for="" class="form-label">NID No.</label>
                <input type="text" class="form-control" name="nid"
                value="{{$tenant->nid}}">
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Permanent Address:</label> <br>
                {{-- <textarea name="per_address" id="" cols="30" rows="3"></textarea> --}}
            
                <input type="text" class="form-control" name="per_address" placeholder="Permanent Address"  value="{{$tenant->per_address}}">
              </div>
            
              {{-- <div class="col-md-3">
                <label for="inputAddress" class="form-label">Gender</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Male" checked  value="male" {{$tenant->gender === 'Male' ? 'checked' : ''}}>
                <label class="form-check-label" for="exampleRadios1">
                Male
                </label>
              </div>
              
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="female"
                value="female" {{$tenant->gender === 'Female' ? 'checked' : ''}}>
                <label class="form-check-label" >
              Female
                </label>
              </div>
              </div> --}}

              <div class="col-md-3">
                <label for="gender" class="form-label">Gender</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio"  name="gender" id="maleRadio"
                  value="male" {{$tenant->gender === 'male' ? 'checked' : ''}}>
                  <label class="form-check-label" for="maleRadio">
                    Male
                  </label>
                </div>
              
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="femaleRadio" name="gender" value="female" {{$tenant->gender === 'female' ? 'checked' : ''}}>
                  <label class="form-check-label" for="femaleRadio">
                    Female
                  </label>
                </div>
              </div>
              
            
              <br>
              <br>
            
              <div class="col-md-3">
                <label for="" class="form-label">Family-Mamber</label>
                <input type="text" class="form-control" name="family_member" placeholder="5"  value="{{$tenant->family_member}}">
              </div>
            
              <div class="col-md-3">
                <label for="" class="form-label">Occupation:</label> <br>
                <select name="occupation"  class="form-control" id="">
                  <option  value="{{$tenant->occupation}}" >Select Occupation</option>
                  <option value="Service-Holder">Service-Holder</option>
                  <option value="Business-Man">Business-Man</option>
                  <option value="Govt.Empolyee">Govt.Empolyee</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            
            
              <div class="col-md-3">
                <label for="" class="form-label">Move_in</label>
                <input type="date" class="form-control" name="move_in"
                value="{{$tenant->move_in}}">
              </div>
              <div class="col-md-3">
                <label for="" class="form-label">Photo</label>
                <input type="file" class="form-control" name="photo" width="50" height="50"  value="{{$tenant->photo}}">
                 <img src="/uploads/{{$tenant->photo}}" width=120px alt="" srcset="">
              </div>
            
              
              <div class="col-md-2">
                <label for="" class="form-label">Status</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="activeRadio" value="active"  
                {{$tenant->status === 'active' ? 'checked' : ''}}>
                <label class="form-check-label" for="activeRadio">
             Active
                </label>
              </div>
              
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="inactiveRadio"  value="inactive" 
                 {{$tenant->status === 'inactive' ? 'checked' : ''}}>
                <label class="form-check-label" for="inactiveRadio" >
            Inactive
                </label>
              </div>
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

@include('adminltelayouts.footer');