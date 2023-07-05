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
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">
                                <a href="{{ route('flat.create') }}">Add Flats</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card ">
                    <div class="card-header">
                        <h2 class="m-0">Flats Information</h2>
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
                    <form action="{{ route('flat.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Flat Name</label>
                                        <input type="text" class="form-control" name="flat_name"
                                            placeholder="Enter Flat Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Floor</label>
                                        <input type="text" class="form-control" name="floor" placeholder="Enter Floor">
                                    </div>
                                    <div class="form-group">
                                        <label>Flat Size</label>
                                        <input type="text" class="form-control" name="flat_size"
                                            placeholder="Enter Flat Size">
                                    </div>
                                    <div class="form-group">
                                        <label>Bedroom</label>
                                        <input type="text" class="form-control" name="bed_room"
                                            placeholder="Enter Bedroom">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Balcony</label>
                                        <input type="text" class="form-control" name="balcony"
                                            placeholder="Enter Balcony">
                                    </div>
                                    <div class="form-group">
                                        <label>Washroom</label>
                                        <input type="text" class="form-control" name="wash_room"
                                            placeholder="Enter Washroom">
                                    </div>
                                    <div class="form-group">
                                        <label>Rent Cost</label>
                                        <input type="text" class="form-control" name="rent_cost"
                                            placeholder="Enter Rent Cost">
                                    </div>
                                    <div className="form-group">
                                        <label>Status</label><br />
                                        <div class="form-control">
                                            <input type="radio" value="Occupied" name="status" /> Occupied
                                            <input type="radio" value="Empty" name="status" checked /> Empty
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                              </div>
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
