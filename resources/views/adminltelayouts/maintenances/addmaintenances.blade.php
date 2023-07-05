@extends('adminltelayouts.main');
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Adding Maintenance Info</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('flat.create') }}">Add Maintenances</a>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Insert Form</h3>
                        <h4 class="pull-right" style="margin-left: 90%"> <a href="{{route('main.filter')}}">
                            <button class="btn btn-warning"> <i class="fa fa-plus-circle">&nbsp; Report</i></button></a></h4>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('maintenance.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Flat Name</label>
                                        <select class="form-control" name="flat_id">
                                            <option>Select Flat</option>
                                            @forelse ($flat as $k => $v)
                                                <option value="{{ $v->id }}">{{ $v->flat_name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        {{-- <textarea class="form-control" rows="4" name="description" placeholder="Enter ..."></textarea> --}}
                                        <input type="text" class="form-control" name="description" 
                                        placeholder="Enter Problems" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cost</label>
                                        <input type="text" class="form-control" name="cost"
                                            placeholder="Enter Cost" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Reported Date</label>
                                        <input type="date" class="form-control" name="reported_date" required>
                                    </div>
                                    <div className="form-group">
                                        <label>Status</label><br />
                                        <div className="form-control">
                                            <input type="radio" value="Complete" name="status" /> Complete
                                            <input type="radio" value="Incomplete" name="status" checked /> Incomplete
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </div><br>
                        </div>
                        <!-- /.card-body -->
                    </form>
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
