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
                            <li class="breadcrumb-item active"><a href="">Edit Flats</a></li>
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
                        <h2 class="m-0">Update Flats Information</h2>
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
                    <form action="{{ route('flat.update', $flat->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Flat Name</label>
                                        <input type="text" class="form-control" name="flat_name"
                                            value="{{ $flat->flat_name }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Floor</label>
                                        <input type="text" class="form-control" name="floor"
                                            value="{{ $flat->floor }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Flat Size</label>
                                        <input type="text" class="form-control" name="flat_size"
                                            value="{{ $flat->flat_size }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Bedroom</label>
                                        <input type="text" class="form-control" name="bed_room"
                                            value="{{ $flat->bed_room }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Balcony</label>
                                        <input type="text" class="form-control" name="balcony"
                                            value="{{ $flat->balcony }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Washroom</label>
                                        <input type="text" class="form-control" name="wash_room"
                                            value="{{ $flat->wash_room }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Rent Cost</label>
                                        <input type="text" class="form-control" name="rent_cost"
                                            value="{{ $flat->rent_cost }}">
                                    </div>
                                    <div className="form-group">
                                        <label>Status</label><br />
                                        <div class="form-control">
                                            <input type="radio" value="occupied" name="status"
                                                {{ $flat->status === 'occupied' ? 'checked' : '' }} /> Occupied
                                            <input type="radio" value="empty" name="status"
                                                {{ $flat->status === 'empty' ? 'checked' : '' }} /> Empty
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
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
