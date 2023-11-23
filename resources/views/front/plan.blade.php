@extends('front.master')

@section('content')

{{--  --}}
<div class="inner-banner-section" >
    <img src="{{asset('theme/assets/images/bg/inner-banner-vctr.png')}}" class="inner-banner-vector" alt="image">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xl-8 col-md-10 col-sm-12">
             <div class="breadcrumb-area">
                <span></span>
                <h2>
                    Plan My Safari
                    {{--  --}}
                </h2>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="destination-details-section pt-120 pb-120">
    <div class="container">
       <div class="row gy-5 justify-content-center">

          <div class="col-lg-10">
             <div class="booking-form-box">
                <h3>Lets Plan Your Safari Today</h3>
                <p>Arrange your trip in advance - Share your prefered destination and experiences with us</p>
                <form class="banner-form">
                   <div class="search-box-single destination-box">
                      <div class="searchbox-icon">
                         <i class="bi bi-pencil-fill"></i>
                      </div>
                      <div class="searchbox-input">
                         <input type="text" placeholder="Full Name*">
                      </div>
                   </div>
                   <div class="search-box-single destination-box">
                      <div class="searchbox-icon">
                         <i class="bi bi-envelope-fill"></i>
                      </div>
                      <div class="searchbox-input">
                         <input type="text" placeholder="E-mail*">
                      </div>
                   </div>
                   <div class="search-box-single destination-box">
                      <div class="searchbox-icon">
                         <i class="bi bi-telephone"></i>
                      </div>
                      <div class="searchbox-input">
                         <input type="text" placeholder="Phone Number*">
                      </div>
                   </div>
                   <div class="search-box-single destination-box postition-relative">
                      <div class="searchbox-icon">
                         <i class="bi bi-calendar-minus"></i>
                      </div>
                      <div class="searchbox-input">
                         <input placeholder="Select your date" type="text" name="checkIn" id="datepicker" autocomplete="off" class="calendar">
                      </div>
                   </div>
                   <div class="search-box-single">
                      <div class="searchbox-icon">
                         <i class="bi bi-person-fill"></i>
                      </div>
                      <div class="searchbox-input">
                         <input type="number" placeholder="People *">
                      </div>
                   </div>
                   {{-- <div class="search-box-single">
                      <div class="searchbox-icon">
                         <i class="bi bi-tags-fill"></i>
                      </div>
                      <div class="searchbox-input">
                         <input type="number" placeholder="Number of tickets *">
                      </div>
                   </div> --}}
                   <div class="search-box-single">
                      <div class="searchbox-icon">
                         <i class="bi bi-chat-left-text-fill"></i>
                      </div>
                      <div class="searchbox-input">
                         <textarea name="message3" rows="6" placeholder="Tell us your Plan*"></textarea>
                      </div>
                   </div>
                   <button class="eg-btn btn--primary btn--lg w-100 mt-3">Plan Now</button>
                </form>
             </div>

          </div>
       </div>
    </div>
 </div>
{{--  --}}

@endsection
