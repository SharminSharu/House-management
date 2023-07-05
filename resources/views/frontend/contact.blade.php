@extends('frontend.layouts.main')
@section('main-content')
    <div class="site-section border-bottom">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-7 mb-5">

                    <h3> <u>Contact Us</u></h3>
                    <br>
                    <br>
                    <form action="{{ route('ct.store') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="fullname">Full Name</label>
                                <input type="text" name="name" id="fullname" class="form-control"
                                    placeholder="Full Name">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Mobile Number</label>
                                <input type="text" name="phn_num"  class="form-control"
                                    placeholder="Enter Mobile Number">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Subject</label>
                                <input type="text" name="subject" id="subject" class="form-control"
                                    placeholder="Enter Subject">
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                                    placeholder="Say hello to us"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </form>
                    <div>
                        @if ($message = Session::get('msg'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    </div>
                </div>

                <div class="col-lg-4 ml-auto">
                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3">Contact Info</h3>
                        <p class="mb-0 font-weight-bold text-black">Address</p>
                        <p class="mb-4 text-black">7/A Dhanmondi, Road-3,Dhaka-1209</p>

                        <p class="mb-0 font-weight-bold text-black">Phone</p>
                        <p class="mb-4"><a href="#">+8801717111116</a></p>

                        <p class="mb-0 font-weight-bold text-black">Email Address</p>
                        <p class="mb-0"><a href="#">root_hawari@gmail.com</a></p>

                    </div>

                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3 text-black">More Info</h3>
                        <p class="text-black"> House, apartment, or other shelter that is the usual residence of a person,
                            family, or household. the place in which one's domestic affections are centered.</p>
                        <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
