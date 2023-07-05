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
                        <li class="breadcrumb-item active">FlatAssign-Report</li>
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
                    <h2 class="m-0">FlatAssign Report</h2>
                </div>
                <div class="card-body">
           
         <div class="col-md-12">
   
    
          <form class="row g-3" action="{{ route('frep.filter') }}" method="get">
            @csrf

 
  <div class="col-md-3">
    <label for="" class="form-label">Date From</label>
    <input type="date" class="form-control" id="inputPassword4" name="start_date">
  </div>
  <div class="col-md-3">
    <label for="" class="form-label">Date To</label>
    <input type="date" class="form-control" id="inputPassword4" name="end_date">
  </div>
  
        <div class="col-md-3">
            <label for="" class="form-label">Flats Name:</label> <br>
            <select name="flat_id" id=""  class="form-control" > 
        <option value="">Select Flats</option>
        @foreach ( $flats as $f)
            <option value="{{$f->id}}">{{$f->flat_name}}</option>
        @endforeach

            </select>
            
        </div>

<div class="col-md-3" style="margin-top: 50px">   
     <button type="submit" class="btn btn-primary">Report Generate</button>
    </div>
 
  

</div>
<br><br><br>
                <div class="col-md-12">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>SL</th>
                        <th>Tenant_Name</th>
                        <th>Flat_Name</th>
                        <th>Assign_Date</th>
                        <th>Rent_Cost</th>
                       
                      </tr>
                    </thead>

                    <tbody>
                      @foreach ($flatrep as $u=>$l )
                      <tr>
                        <td>{{$u+1}}</td>
                        <td>{{$l->tenant->name}}</td>
                        <td>{{$l->flat->flat_name}}</td>
                        <td>{{$l->assign_date}}</td>
                        <td>{{$l->rent_cost}}</td>
                     
                      </tr>
                      @endforeach
                    
                    
                    </tbody>
                  </table>
                
                
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