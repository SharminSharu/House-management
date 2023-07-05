@extends('adminltelayouts.main');
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Maintenance Report</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Maintenance Report</li>
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
                        {{-- <h2 class="m-0">Maintenance Report</h2> --}}
                    </div>
                    <div class="card-body">
               
             <div class="col-md-12">
       
        
              <form class="row g-3" action="{{ route('main.filter') }}" method="get">
                @csrf   
      
            <div class="col-md-3">
                <label for="" class="form-label">Flats Name:</label> <br>
                <select name="flat_id" id=""  class="form-control" > 
            <option value="">Select Flats</option>
            @foreach ( $flat as $f)
                <option value="{{$f->id}}">{{$f->flat_name}}</option>
            @endforeach
    
                </select>
                
            </div>
    
    <div class="col-md-3" style="margin-top: 50px">   
         <button type="submit" class="btn btn-primary">Generate Report</button>
        </div>
     
      
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Flat Name</th>
                                    <th>Description</th>
                                    <th>Cost</th>
                                    <th>Reported Date</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $main as $u=>$l )
                                <tr>
                                  <td>{{$u+1}}</td>
                                  <td>{{$l->flat->flat_name}}</td>
                                  <td>{{$l->description}}</td>
                                  <td>{{$l->cost}}</td>
                                  <td>{{$l->reported_date}}</td>
                                 
                            
                               
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
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
@endsection
