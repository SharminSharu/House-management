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
                    <h2 class="m-0">Update Flat_Assign Information</h2>
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
                    <form class="row g-3" action="{{route('fagn.update',$flat_assign->id)}}" method="post" >
                        @csrf
                        @method('PUT')
                        <div class="col-md-3">
                            <label for="" class="form-label">Tenants Name:</label> <br>
                            <select name="tenant_id" id=""  class="form-control" value=" " >

                                @foreach($tenants as $f)
                                <option value="{{ $f->id }}" 
                                {{ $f->id == $flat_assign->tenant_id ? 'selected' : '' }}>{{ $f->name }}</option>
                            @endforeach
                            </select>
                          </div>

                          <div class="col-md-3">
                            <label for="" class="form-label">Flats Name:</label> <br>
                            <select name="flat_id" id=""  class="form-control" 
                            value=" " >
                            @foreach($flats as $f)
                            <option value="{{ $f->id }}" 
                            {{ $f->id == $flat_assign->flat_id ? 'selected' : '' }}>{{ $f->flat_name }}</option>
                        @endforeach
                    </select>
                          </div>
             
             
              <div class="col-md-4">
                <label for="" class="form-label">Assign_Date</label>
                <input type="date" class="form-control" id="inputPassword4" name="assign_date"  value="{{$flat_assign->assign_date}}">
              </div>
            
              <div class="col-md-4">
                <label for="" class="form-label">Rent_Cost</label>
                <input type="text" class="form-control" name="rent_cost" 
                value="{{$flat_assign->rent_cost}}">
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