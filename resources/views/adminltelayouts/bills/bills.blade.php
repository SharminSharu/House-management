@extends('adminltelayouts.main');
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Bills Info</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Bills Info</li>
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
                        <a href="{{ route('bill.create') }}"><button type="submit"
                                class="btn btn-sm btn-outline-primary">Add New</button></a> &nbsp;
                        <a href=""><button type="submit" class="btn btn-sm btn-outline-primary">Check
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
                                    <th>Bill Name</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($list as $k => $v)
                                    <tr>
                                        <td>{{ $k + 1 }}</td>
                                        <td>{{ $v->name }}</td>
                                        <td>{{ $v->amount }}</td>
                                        <td>
                                            <a href="{{ route('bill.edit', $v->id) }}"><button type="submit"
                                                    class="btn btn-primary btn-sm">Edit</button></a> &nbsp;
                                            <a href="#"
                                                onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button></a>
                                            &nbsp;
                                            <form id="delete-form" action="{{ route('bill.destroy', $v->id) }}"
                                                method="POST" style="display: none;">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </td>
                                        {{-- <td>
                                            <form action="" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        {!! $list->links('pagination::bootstrap-4') !!}
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
