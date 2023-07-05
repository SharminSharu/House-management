
@extends('frontend.layouts.main')
@section('main-content')

  
@yield('scripts')
<br><br>
<div style="margin-left:34%"><h1 > <u>ALL FLATS OF "ROOT & HAWARI"</u></h1></div>
<div class="row" style="margin:30px">
    <div>
        <p>It’s a House build with trust & Quality ROOT & HAWARI since 2022 At Dhanmondi.  Providing tenants a complete product with no loose ends for years to come is our end goal all in prime locations of Dhaka city. It is the commitment to both impeccably high standards and attention to detail that drive us to our success.    Whether it be a Landowner or a Buyer, focusing on tenants service is our 100% priority. We always try to keep our promises. Finally, when tenants experience our house facilites, they refer it to their friends.</p>
    </div>

    <br>

    @foreach($products as $product)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $product->image }}"  alt="Card image cap" width="304" height="236">
        <div class="card-body">
          <h2 class="card-title" style="margin-left:35%">{{ $product->name }}</h2>
          <p class="card-text"><strong>Description: </strong>&nbsp;{{ $product->description }}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Size: </strong> &nbsp;{{ $product->size}}&nbsp;(sq.ft)</li>
          <li class="list-group-item"><span> <strong>Price:</strong>  &nbsp;{{ $product->price }}tk</span></li>
    
        </ul>
    
      </div>
   
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

    @endforeach
    <div class="card-body col-md-3" >
      <a href="{{route('a_det')}}" class="card-link btn btn-info ">Details</a>    
    </div>
    <div class="card-body col-md-3" >
      <a href="{{route('b_det')}}" class="card-link btn btn-info" >Details</a>    
    </div>
    <div class="card-body col-md-3" >
      <a href="{{route('c_det')}}" class="card-link btn btn-info" >Details</a>    
    </div>
    <div class="card-body col-md-2" >
      <a href="{{route('d_det')}}" class="card-link btn btn-info" >Details</a>    
    </div>
</div>
    
@endsection

{{-- <div class="col-xs-18 col-sm-6 col-md-3">
    <div class="thumbnail">
        <img src="{{ $product->image }}" alt="" class="rounded-circle"  width="304" height="236">
        <div class="caption">
            <h4>{{ $product->name }}</h4>
            <p>Size:{{ $product->size}}(sq.ft)</p>
            <p>Description:{{ $product->description }}</p>
            <p><span> Price:{{ $product->price }}tk</span></p>
            <p><strong>Price: </strong></p>
            <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
        </div>
    </div>
</div> --}}