@include('adminltelayouts.header');
@include('adminltelayouts.menu');
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Payments Info</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Payments Info</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Responsive Hover Table</h3> &nbsp; &nbsp;
                        <a href="{{ route('payment.create') }}"><button type="submit"
                                class="btn btn-sm btn-outline-primary">Add New</button></a> &nbsp;
                        <a href="{{route('pay.filter')}}"><button type="submit" class="btn btn-sm btn-outline-primary">Check
                                Report</button></a>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>TenantName</th>
                                    <th>FlatName</th>
                                    <th>Payment Purpose</th>
                                    <th>Rent Payment</th>
                                    <th>Total Payment</th>
                                    <th>Net paid</th>
                                    <th>Due</th>
                                    <th>Payment Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                 @forelse ($list as $k => $v)
                                    <tr>
                                        <td>{{ $k + 1 }}</td>
                                        <td>{{ $v->flat_assign->tenant->name }}</td>
                                        <td>{{ $v->flat_assign->flat->flat_name }}</td>
                                        <td>{{ $v->purpose }}</td>
                                        <td>{{ $v->flat_assign->rent_cost }}</td>
                                        <td>{{ $v->flat_assign->rent_cost * $monthsInt }}</td>
                                        <td>{{ $v->paid }}</td>
                                        {{-- <td>{{ $v->flat_assign->rent_cost - $v->paid }}</td> --}}
                                        <td>{{ $v->due }}</td>
                                        <td>{{ $v->payment_date }}</td>

                                        <td>
                                            <form action="{{ route('payment.destroy',$v->id) }}" method="POST">
                 
                  
                                                <a class="btn btn-primary" href="{{ route('payment.edit',$v->id) }}"><i class="fa fa-edit"></i></a>
                                 
                                                @csrf
                                                @method('DELETE')
                                    
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                           
                                        </td>
                                   
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">No items found</td>
                                    </tr>
                                @endforelse
                                     
                                    
                             
                            </tbody>
                        </table>
                     
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!--/. container-fluid -->
        </section><br><br>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    @include('adminltelayouts.footer');