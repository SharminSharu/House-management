@extends('frontend.layouts.main')
@section('main-content')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="margin-left:30%"></h1>
                </div><!-- /.col -->
                {{-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('tenant.create') }}">Add Tenants</a></li>
                    </ol>
                </div> --}}
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">

                    <h2 class="m-0">Overview of Unit Flat (B)</h2>
             
                </div>
                <div class="card-body">
            
                   <h6 class="card-title"></h6>
{{-- 
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>  --}}
<br>

    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="margin-left:5%">
        <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="width:1100px; height:700px" >
            <div class="carousel-item active">
                <img src="{{ asset('image/space/13.jpg') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/space/14.jpg') }}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/space/10.jpg') }}" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>


        </div>
        <br><br><br>
      
        </div>

        <!--/. container-fluid -->
    </section>
    <section>
    <div class="card-body" style="margin-left:5%">
        <h3 class="footer-heading mb-4">  <u>Flats Summary</u></h3>
       <div class="row">
  
        <div class="col-md-4">
            <ul>
                <li> <strong>HouseName :</strong>   <span> Root & Hawari</span></li>
                <li> <strong>FlatSize:</strong>   <span> 1200(sq.ft)</span></li>
                <li> <strong>Location :</strong>   <span>7/A Dhanmondi, Road-3,Dhaka-1209</span></li>
                <li> <strong>Total Floor :</strong>   <span>24</span></li>
                <li> <strong>Total B Unit:</strong>   <span>06 (1B,2B,3B,4B,5B,6B)</span></li>
                <li> <strong>Flat For :</strong>   <span>Rent</span></li>
                <li> <strong>Bedrooms :</strong>   <span> 02</span></li>
                <li> <strong>Washroom :</strong>   <span> 02</span></li>
              
            </ul>
        
        </div>
        <div class="col-md-4">
            <ul>
              
                <li> <strong>balcony:</strong>   <span> 01</span></li>
                <li> <strong>Floor Avaiable On:</strong>   <span> 3rd Floor, 6th Floor</span></li>
                <li> <strong>Garages:</strong>   <span>Parking-01</span></li>
                <li> <strong>House For :</strong>   <span> Rent</span></li>
                <li> <strong>Furnishing:</strong>   <span> Furnished</span></li>
                <li> <strong>Rent Cost</strong>   <span> 10000 tk</span></li>
             
            </ul>
        </div>

       </div>
    </section>
    <section>
    <div class="card-body" style="margin-left:5%">
        <h3 class="footer-heading mb-4">  <u>Flats Features</u></h3>
       <div class="row">
  
        <div class="col-md-4">
            <ul>
                <li> <strong>  Security</strong>  </li>
                <li> <strong> Electricity </strong>  </li>
                <li> <strong> Generator </strong>   </li>
                <li> <strong>WASA connection </strong>  </li>
        
              
            </ul>
        
        </div>
        <div class="col-md-4">
            <ul>
               
                <li> <strong>Electricity Generator </strong> </li>
                <li> <strong>Guest Parking</strong>   </li>
                <li> <strong>Servent Toilet</strong></li>  
                <li> <strong>Guards</strong>  </li>
             
             
            </ul>
        </div>
        <div class="col-md-4">
            <ul>
              
                <li> <strong>Telephone line </strong>  </li>
                <li> <strong>CCTV: 24 hours</strong> </li>
                <li> <strong> Lift: (Time: 8.00 AM-3.00 PM & 4.00PM -10.30PM) </strong>   </li>
             
             
            </ul>
        </div>

       </div>
    </section>

  
        <div class="card-body" style="margin-left:5%">
            <div class="row">
                <div class="col-md-8">
                    <h3><u>Flat DESCRIPTION</u></h3> <br>
                    <h6>House Name:&nbsp;  Root & Hawari <br>
                     Address:&nbsp;  7/A Dhanmondi-Dhaka 1209 Storied Building (G+9) 4 Unit. <br>
                      Flat Type:&nbsp;  A,B,C & D <br>
                      Size: &nbsp; 800sft,1200sft,1380sft,1400sft <br>
                      Flat (B): &nbsp;2 Bed, 2 Bath, 1 varanda, Drawing, Dining and kitchen etc. <br>Lift, Generator ,Intercom Car Parking: Ground Floor Community Space</h6>
                </div>
            </div>
        </div>
        <div class="card-body" >
         
            <a href="{{url('/contact')}}" class="card-link btn btn-info" style="margin-left:5%">Contact Us</a>
         
          </div>
    <!-- /.content -->
</div>

@endsection