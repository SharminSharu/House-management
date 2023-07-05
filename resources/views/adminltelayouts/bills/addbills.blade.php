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
                            <li class="breadcrumb-item active"><a href="{{ route('flat.create') }}">Add Bills</a></li>
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
                        <h2 class="card-title">Adding Bill Info</h2>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('bill.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Bill Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Bill Name" required>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" class="form-control" name="amount" placeholder="Enter Bill Amount" required>
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
