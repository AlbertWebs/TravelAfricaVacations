@extends('front.master')

@section('content')
<div class="inner-banner-section">
    <img src="{{asset('theme/assets/images/bg/inner-banner-vctr.png')}}" class="inner-banner-vector" alt="image">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xl-8 col-md-10 col-sm-12">
             <div class="breadcrumb-area">
                <span>Get in Touch</span>
                <h2>Let’s have a talk</h2>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="info-section pt-120 pb-120">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-lg-7 col-md-10 col-sm-12">
             <div class="info-title-area">
                <h3>Travel Africa Vacations</h3>
                <p>With budget-friendly and tailor-made packages we can arrange your tour to your specifications to ensure comfort, satisfaction and a thrilling adventure.</p>
             </div>
          </div>
       </div>
       <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-10">
             <div class="info-single">
                <div class="info-icon">
                   <i class="bi bi-geo-alt"></i>
                </div>
                <div class="info-text">
                   <h3>Address</h3>
                   <p>
                    Chalbi Condomononiums, Ring Road, Kilimani</p>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-10">
             <div class="info-single">
                <div class="info-icon">
                   <i class="bx bx-phone-call"></i>
                </div>
                <div class="info-text">
                   <h3>Call Us!</h3>
                   <a href="tel:+254 733 263 685">+254 733 263 685</a>
                   <a href="tel:+254 733 263 685">+254 733 263 685</a>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-10">
             <div class="info-single">
                <div class="info-icon">
                   <i class="bx bx-envelope"></i>
                </div>
                <div class="info-text">
                   <h3>Email Info</h3>
                   <a href="mailto:info@travelafricavacations.com"><span class="__cf_email__" >info@travelafricavacations.com</span></a>
                   <a href="https://travelafricavacations.com"><span class="__cf_email__">travelafricavacations.com</span></a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="contact-section" style=" line-height: 0; ">
     {{--  --}}
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.215498768983!2d36.8219462!3d-1.2920659!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11e84e4c04cd%3A0xc3ebaf3af05591a0!2sTravel%20Africa%20Vacations!5e0!3m2!1sen!2ske!4v1699695666915!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     {{--  --}}
 </div>

@endsection
