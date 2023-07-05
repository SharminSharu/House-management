@extends('adminltelayouts.main');
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
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
                            <li class="breadcrumb-item active">Dashboard</li>
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
                        <h2 class="m-0">Contact Messages</h2>
                        {{-- <strong> {{ session()->get('msg') }}</strong> --}}
                        @if ($message = Session::get('msg'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                    
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                     
                                        <th>Email</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($sub as $k => $v)
                                        <tr>
                                            <td>{{ $k + 1 }}</td>
                                        
                                            <td>{{ $v->email }}</td>
                                          
                                            <td>
                                                <form action="{{ route('sub.destroy',$v->id) }}" method="POST">
                                     
                                                
                                      
                                                    {{-- <a class="btn btn-primary" href="{{ route('tenant.edit',$l->id) }}"><i class="fa fa-edit"></i></a> --}}
                                     
                                                    @csrf
                                                    @method('DELETE')
                                        
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                            {!! $sub->links('pagination::bootstrap-4') !!}
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
