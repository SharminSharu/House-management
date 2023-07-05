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
                            <li class="breadcrumb-item active">Flats Info</li>
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
                        <h2 class="m-0">Flats-list</h2>
                        {{-- <strong> {{ session()->get('msg') }}</strong> --}}
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
    
                        <h4 class="pull-right" style="margin-left: 90%"> <a href="{{route('flat.create')}}">
                          <button class="btn btn-warning"> <i class="fa fa-plus-circle">&nbsp; Create</i></button></a></h4>
                    <div class="col-md-12">
                      <table class="table table-bordered table-hover text-nowrap">

                        
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Flat Name</th>
                                    <th>Floor</th>
                                    <th>Flat Size</th>
                                    <th>Bedroom</th>
                                    <th>Balcony</th>
                                    <th>Washroom</th>
                                    <th>Rent Cost</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($flat as $k => $v)
                                    <tr>
                                        <td>{{ $k + 1 }}</td>
                                        <td>{{ $v->flat_name }}</td>
                                        <td>{{ $v->floor }}</td>
                                        <td>{{ $v->flat_size }}</td>
                                        <td>{{ $v->bed_room }}</td>
                                        <td>{{ $v->balcony }}</td>
                                        <td>{{ $v->wash_room }}</td>
                                        <td>{{ $v->rent_cost }}</td>
                                        <td>{{ $v->status }}</td>
                                      
                                        <td>
                                            <form action="{{ route('flat.destroy',$v->id) }}" method="POST">
                                  
                                                <a class="btn btn-primary" href="{{ route('flat.edit',$v->id) }}"><i class="fa fa-edit"></i></a>
                                 
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
                        {!! $flat->links('pagination::bootstrap-4') !!}
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
@endsection
