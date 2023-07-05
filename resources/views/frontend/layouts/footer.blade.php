<div class="bg-primary" data-aos="fade" style="margin:20px">
    <div class="container" >
      <div class="row">
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
      </div>
    </div>
  </div>

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
            <h3 class="footer-heading mb-4">About Root & Hawari</h3>
            <p>Depending on the specific company, some information about goals, attitude or other aspects of culture that aren't strictly tied to business practices are included as well. The about us page is often a reflection of the purpose and personality of the business and its owners or top employees</p>
          </div>
          <div class="mb-5">
            <h3 class="footer-heading mb-4">Subscribe</h3>
            
            <form action="{{ route('sub.store') }}" method="POST"class="site-block-subscribe">
              @csrf
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary bg-transparent" placeholder="Enter your email" name="email">
           
                  <button class="btn btn-primary rounded-top-right-0" type="button" id="button-addon2">Subscribe</button>
             
                @if ($message = Session::get('msg'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/flatc')}}">Flats</a></li>
                <li><a href="{{url('/review')}}">Reviews</a></li>
              
              </ul>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="{{url('/about')}}">About Us</a></li>
                <li><a href="{{url('/')}}">Privacy Policy</a></li>
                <li><a href="{{url('/conatct')}}">Contact Us</a></li>
                
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Follow Us</h3>

              <div>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="mb-5">
            <h3 class="footer-heading mb-4">Watch Live Streaming</h3>

            <div class="block-16">
              <figure>
                <img src="{{asset('frontend/images/img_1.jpg')}}" alt="Image placeholder" class="img-fluid rounded">
                <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span class="icon-play"></span></a>
              </figure>
            </div>

          </div>

          

        </div>
        
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script data-cfasync="false" src=""></script><script>document.write(new Date().getFullYear());</script> All rights reserved | Root & Hawari <i class=" text-danger" aria-hidden="true"></i> by <a href="" target="_blank" >House Rental Managment</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
        
      </div>
    </div>
  </footer>

</div>

<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/mediaelement-and-player.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('frontend/js/aos.js')}}"></script>
<script src="{{asset('frontend/js/circleaudioplayer.js')}}"></script>

<script src="{{asset('frontend/js/main.js')}}"></script>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  
</body>
</html>