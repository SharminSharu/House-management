@extends('adminltelayouts.main');
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Flat Status Report</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Flat Report</li>
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


                            <form class="row g-3" action="{{ route('flat.filter') }}" method="get">
                                @csrf

                                <div class="col-md-3">
                                    <div className="form-group">
                                        <label>Select Flat Status:</label><br />
                                        <div class="form-control">
                                            <input type="radio" value="occupied" name="status" /> Occupied
                                            <input type="radio" value="empty" name="status" /> Empty
                                        </div>
                                    </div>
                                    {{-- <label for="" class="form-label">Flat Status:</label> <br>
                                    <select name="tenant_id" id="" class="form-control">
                                        <option value="">Select Flat Status</option>
                                        <option value="">Occupied</option>
                                        <option value="">Empty</option>
                                        @foreach ($tenant as $t)
                                            <option value="{{ $t->id }}">{{ $t->name }}</option>
                                        @endforeach

                                    </select> --}}
                                </div>
                                <div class="col-md-3" style="margin-top: 50px">
                                    <button type="submit" class="btn btn-primary">Generate Report</button>
                                </div>
                                <div class="card-tools">
                                </div>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                {{-- <tr class="row">
                                        <td class="col-md-4">Name: <h5>{{ $v->name }}</h5>
                                        </td>
                                        <td class="col-md-4"> <img src="/uploads/{{ $v->photo }}" width="120px">
                                        </td>
                                        <td class="col-md-4">NID: <h5>{{ $v->nid }}</h5>
                                        </td>
                                    </tr>
                                    <tr class="row">
                                        <td class="col-md-4">Email: <h5>{{ $v->email }}</h5>
                                        </td>
                                        <td class="col-md-4">Phone: <h5>{{ $v->phn_no }}</h5>
                                        </td>
                                        <td class="col-md-4">Gender: <h5>{{ $v->gender }}</h5>
                                        </td>
                                    </tr>
                                    <tr class="row">
                                        <td class="col-md-4">Occupation: <h5>{{ $v->occupation }}</h5>
                                        </td>
                                        <td class="col-md-4">Family Member: <h5>{{ $v->family_member }}</h5>
                                        </td>
                                        <td class="col-md-4">P. Address: <h5>{{ $v->per_address }}</h5>
                                        </td>
                                    </tr>
                                    <tr class="row">
                                        <td class="col-md-4">Move In Date: <h5>{{ $v->move_in }}</h5>
                                        </td>
                                        <td class="col-md-4">Status: <h5>{{ $v->status }}</h5>
                                        </td>
                                        <td class="col-md-4"></td>
                                    </tr> --}}
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($main as $k => $v)
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
                                        </tr>
                                    @empty
                                    @endforelse

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
