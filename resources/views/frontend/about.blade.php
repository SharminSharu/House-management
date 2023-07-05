@include('frontend.layouts.header')
<div class="site-section">
    <div class="container">
        <h2> <u>About Us</u> </h2>
     
      <div class="row">
        <div class="col-lg-6">
          <img src="{{asset('frontend/images/img_1.jpg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-6">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
          <h2 class="mb-5">Our House</h2>
          <p>Depending on the specific company, some information about goals, attitude or other aspects of culture that aren't strictly tied to business practices are included as well. The about us page is often a reflection of the purpose and personality of the business and its owners or top employees.</p>
        </div>
        </div>
      </div>
    </div>
  </div>


  {{-- //review --}}

  <div class="site-section block-13 bg-light">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
          <h2 class="mb-5">Love By Our Tenants</h2>
          <p>Marks Out Of Tenancy is the home of landlord reviews. Join the thousands of renters rating and reviewing their landlord and rental properties.</p>
        </div>
      </div>
      <div class="nonloop-block-13 owl-carousel">
        
        <div class="text-center p-3 p-md-5 bg-white">
          <div class="mb-4">            
            <img src="{{asset('image/1.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
          </div>
          <div class="text-black">
            <h3 class="font-weight-light h5">Atip Aslam</h3>
            <p class="font-italic">&ldquo;The landlord provides a minimally adequate house and good spaces for short-term accommodation for people from abroad, but unfortunately rental stability is questionable with inconsistent rent tracking and lack of written agreements. Privacy is limited to your room, and the landlord's desire for a close relationship can make some more reserved tenants uncomfortable in sharing personal information. &rdquo;</p>
          </div>
        </div>

        <div class="text-center p-3 p-md-5 bg-white">
          <div class="mb-4">            
            <img src="{{asset('image/7.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
          </div>
          <div class="text-black">
            <h3 class="font-weight-light h5">Masuka Nowrin</h3>
            <p class="font-italic">&ldquo;The landlord provides a minimally adequate house and good spaces for short-term accommodation for people from abroad, but unfortunately rental stability is questionable with inconsistent rent tracking and lack of written agreements. Privacy is limited to your room, and the landlord's desire for a close relationship can make some more reserved tenants uncomfortable in sharing personal information. &rdquo;</p>
          </div>
        </div>

        <div class="text-center p-3 p-md-5 bg-white">
          <div class="mb-4">            
            <img src="{{asset('image/4.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
          </div>
          <div class="text-black">
            <h3 class="font-weight-light h5">Selina Ahmmed</h3>
            <p class="font-italic">&ldquo;The landlord provides a minimally adequate house and good spaces for short-term accommodation for people from abroad, but unfortunately rental stability is questionable with inconsistent rent tracking and lack of written agreements. Privacy is limited to your room, and the landlord's desire for a close relationship can make some more reserved tenants uncomfortable in sharing personal information. &rdquo;</p>
          </div>
        </div>

        <div class="text-center p-3 p-md-5 bg-white">
          <div class="mb-4">            
            <img src="{{asset('image/3.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
          </div>
          <div class="text-black">
            <h3 class="font-weight-light h5">Maria Gomez</h3>
            <p class="font-italic">&ldquo;The landlord provides a minimally adequate house and good spaces for short-term accommodation for people from abroad, but unfortunately rental stability is questionable with inconsistent rent tracking and lack of written agreements. Privacy is limited to your room, and the landlord's desire for a close relationship can make some more reserved tenants uncomfortable in sharing personal information. &rdquo;</p>
          </div>
        </div>

        <div class="text-center p-3 p-md-5 bg-white">
          <div class="mb-4">            
            <img src="{{asset('image/6.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
          </div>
          <div class="text-black">
            <h3 class="font-weight-light h5">Alif Haider</h3>
            <p class="font-italic">&ldquo;The landlord provides a minimally adequate house and good spaces for short-term accommodation for people from abroad, but unfortunately rental stability is questionable with inconsistent rent tracking and lack of written agreements. Privacy is limited to your room, and the landlord's desire for a close relationship can make some more reserved tenants uncomfortable in sharing personal information. &rdquo;</p>
          </div>
        </div>

        <div class="text-center p-3 p-md-5 bg-white">
          <div class="mb-4">            
            <img src="{{asset('image/8.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
          </div>
          <div class="text-black">
            <h3 class="font-weight-light h5">Minari Huq</h3>
            <p class="font-italic">&ldquo;The landlord provides a minimally adequate house and good spaces for short-term accommodation for people from abroad, but unfortunately rental stability is questionable with inconsistent rent tracking and lack of written agreements. Privacy is limited to your room, and the landlord's desire for a close relationship can make some more reserved tenants uncomfortable in sharing personal information. &rdquo;</p>
          </div>
        </div>

      </div>
    </div>
  </div>  
@include('frontend.layouts.footer')