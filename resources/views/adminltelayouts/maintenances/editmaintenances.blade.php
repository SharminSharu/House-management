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
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('maintenance.update',$maintenance->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Flat Name</label>
                                        <select class="form-control" name="flat_id">
                                     
                             @foreach($flats as $f)
                            <option value="{{ $f->id }}" 
                            {{ $f->id == $maintenance->flat_id ? 'selected' : '' }}>{{ $f->flat_name }}</option>
                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        {{-- <textarea class="form-control" rows="4" name="description"
                                        value="{{$maintenance->description}}" ></textarea> --}}
                                        <input type="text" class="form-control" name="description" 
                                        placeholder="Enter Problems"
                                        value="{{$maintenance->description}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cost</label>
                                        <input type="text" class="form-control" name="cost"  
                                        value="{{$maintenance->cost}}" 
                                            placeholder="Enter Cost">
                                    </div>

                                    <div class="form-group">
                                        <label>Reported Date</label>
                                        <input type="date" class="form-control" name="reported_date"
                                    value="{{$maintenance->reported_date}}"placeholder="">
                                    
                                    </div>
                                    <div className="form-group">
                                        <label>Status</label><br />
                                        <div class="form-control">
                                            <input type="radio" value="complete" name="status"
                                                {{$maintenance->status === 'complete' ? 'checked' : '' }} /> Complete
                                            <input type="radio" value="incomplete" name="status"
                                                {{ $maintenance->status === 'incomplete' ? 'checked' : '' }} />Incomplete
                                        </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Update</button>
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
