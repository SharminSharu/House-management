@include('adminltelayouts.header');

@include('adminltelayouts.menu');

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
                        <li class="breadcrumb-item active">Expense-Report</li>
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
                    <h2 class="m-0">Expense Report</h2>
                </div>
                <div class="card-body">
           
         <div class="col-md-12">
   
    
          <form class="row g-3" action="{{ route('expense.filter') }}" method="get">
            @csrf

 
  <div class="col-md-3">
    <label for="" class="form-label">Date From</label>
    <input type="date" class="form-control" id="inputPassword4" name="start_date">
  </div>
  <div class="col-md-3">
    <label for="" class="form-label">Date To</label>
    <input type="date" class="form-control" id="inputPassword4" name="end_date">
  </div>
  
   

<div class="col-md-3" style="margin-top: 50px">   
     <button type="submit" class="btn btn-primary">Report Generate</button>
    </div>
 
  

</div>
<br><br><br>
                <div class="col-md-12">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>SL</th>             
                        <th>Expense Name</th>             
                        <th>Expense Amount</th>             
                        <th>Expense_Date</th>
                  
                       
                      </tr>
                    </thead>

                    <tbody>
                      @foreach ($exrep as $u=>$l )
                      <tr>
                        <td>{{$u+1}}</td>
                        <td>{{$l->name}}</td>
                        <td>{{$l->cost}}</td>
                        <td>{{$l->date}}</td>
                    
                     
                      </tr>
                      @endforeach
                    
                    
                    </tbody>
                  </table>
                
                
                </div>
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

@include('adminltelayouts.footer');