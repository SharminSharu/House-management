@extends('adminltelayouts.main');
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tenant Report</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Tenant Report</li>
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

                        <div class="col-md-12" >


                            <form class="row g-3" action="{{ route('ten.filter') }}" method="get" >
                                @csrf

                                <div class="col-md-3">
                                    <label for="" class="form-label">Tenants Name:</label> <br>
                                    <select name="tenant_id" id="" class="form-control">
                                        <option value="">Select Tenant</option>
                                        @foreach ($tenant as $t)
                                            <option value="{{ $t->id }}">{{ $t->name }}</option>
                                        @endforeach

                                    </select>

                                </div>

                                <div class="col-md-3" style="margin-top: 50px">
                                    <button type="submit" class="btn btn-primary">Tenant Check</button>
                                </div>


                                <div class="card-tools">
                               <div class="card-body ">
                            @forelse ($main as $k => $v)
                                <table class="table table-hover text-nowrap">
                                    <tr class="row">
                                        <td class="col-md-4"></td>
                                        <td class="col-md-4" > <img src="/uploads/{{ $v->photo }}" width="250" height="200" class="rounded-circle">
                                            <br>
                                            <h3 style="margin-left:16%">{{ $v->name }}</h3>
                                           
                                    
                                        </td>
                                        <td class="col-md-4"></td>
                                     
                                    </tr>
                                    <tr></tr>
                                    <tr class="row">
                                        {{-- <td class="col-md-4"><h6>TenantName:</h6>
                                            <strong>{{ $v->name }}</strong></td> --}}
                                        <td class="col-md-4"> <h6>NID No:</h6>  
                                            <strong>{{ $v->nid }}</strong></td>
                                        <td class="col-md-4"> <h6>Email:</h6>  <strong>{{ $v->email }}</strong></td>
                                        <td class="col-md-4"> <h6>Phone Number:</h6>  <strong>{{ $v->phn_no }}</strong></td>
                                        <td class="col-md-4"> <h6>Gender:</h6>  <strong>{{ $v->gender }}</strong></td>
                                        <td class="col-md-4"><h6>Occupation: </h6> <strong>{{ $v->occupation }}</strong></td>
                                        <td class="col-md-4"> <h6>Family Member: </h6>
                                             <strong>{{ $v->family_member }}</strong></td>
                                    </tr>
                                    <tr class="row">
                                       
                                     
                                        <td class="col-md-4"><h6>Permanent Address: </h6> <strong>{{ $v->per_address }}</strong></td>
                                        <td class="col-md-4"> <h6>Move In Date:</h6>
                                            <strong>{{ $v->move_in }}</strong></td>
                                        <td class="col-md-4"> <h6>Status:</h6> 
                                            <strong>{{ $v->status }}</strong></td>
                                    </tr>
                                    {{-- <tr class="row">
                                   
                                    
                                    </tr> --}}
                             
                                </table>
                            @empty
                            @endforelse

                        </div>
                                </div>
                        </div>
                        <!-- /.card-header -->
                    
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
