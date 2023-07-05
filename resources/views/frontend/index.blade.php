@extends('frontend.layouts.main')
@section('main-content')
<div class="container">
    <div class="featured-property-half d-flex">
      <div class="image" style="background-image: url('frontend/images/flat/8.jpg')"></div>
      <div class="text">
        <h2>Flat Information</h2>
        <p class="mb-5">An apartment, flat, or unit, is a self-contained housing unit that occupies part of a building, generally on a single storey.</p>
        <ul class="property-list-details mb-5">
          <li class="text-black">House Name: <strong class="text-black">Hawari Mansion</strong></li>
          <li>Total Flat: <strong>24</strong></li>
          <li>Total Area: <strong>12380 Square Feets</strong></li>
          <li>Category: <strong>Morden Flat</strong></li>
        </ul>
        <p><a href="{{url('/flatc')}}" class="btn btn-primary px-4 py-3">Get Details</a></p>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
          <h2 class="mb-5">Check Flats</h2>
          <p>An apartment, flat, or unit, is a self-contained housing unit that occupies part of a building, generally on a single storey.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="unit-9">
            <div class="image" style="background-image: url('frontend/images/flat/3.jpg');"></div>
            <div class="unit-9-content">
              <h2>A</h2>
              <span>Price: 9000tk</span>
              <!-- <span>with Wendy Matos</span> -->
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="unit-9">
            <div class="image" style="background-image: url('frontend/images/img_2.jpg');"></div>
            <div class="unit-9-content">
              <h2>B</h2>
              <span>Price: 1200tk</span>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="unit-9">
            <div class="image" style="background-image: url('frontend/images/img_3.jpg');"></div>
            <div class="unit-9-content">
              <h2>C</h2>
              <span>Price: 15000tk</span>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <a href="#" class="unit-9">
            <div class="image" style="background-image: url('frontend/images/img_4.jpg');"></div>
            <div class="unit-9-content">
              <h2>D</h2>
              <span>Price:18000tk</span>
            </div>
          </a>
        </div>

        <div class="col-md-12 text-center mt-5" data-aos="fade-up">
          <a href="{{url('/flatc')}}" class="btn btn-primary">Browse All Flats</a>
        </div>
      </div>
    </div>
  </div>
@endsection