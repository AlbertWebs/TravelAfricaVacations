@extends('front.master')

@section('content')

<div class="inner-banner-section">
    <img src="{{asset('theme/assets/images/bg/inner-banner-vctr.png')}}" class="inner-banner-vector" alt="image">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xl-8 col-md-10 col-sm-12">
             <div class="breadcrumb-area">
                <span>Hello!</span>
                <h2>Welcome to Tanzania</h2>

             </div>
          </div>
       </div>
    </div>
 </div>
 {{--  --}}
 <div class="banner5-content" style="width:90% !important">
    <p style="color:#000000">
        Tanzania, nestled on the eastern coast of Africa, is a captivating destination that beckons travelers with its diverse landscapes and rich cultural tapestry. Home to the iconic Mount Kilimanjaro, the highest peak in Africa, and the stunning Serengeti National Park, where the great wildebeest migration unfolds, Tanzania offers unparalleled opportunities for adventure and wildlife enthusiasts.
        <br>
        The Zanzibar Archipelago, with its spice-scented markets and pristine beaches, provides a delightful contrast to the rugged mainland. The warm hospitality of the Tanzanian people, their vibrant traditions, and the bustling markets of cities like Dar es Salaam add a cultural dimension to the journey. Whether exploring the Ngorongoro Crater, discovering the historical Stone Town in Zanzibar, or embarking on a safari to witness the Big Five, Tanzania promises an unforgettable experience, blending natural wonders with cultural treasures.
    </p>
</div>
 {{--  --}}
 {{--  --}}
 <div class="blog-grid-section pt-120 pb-120" style="background-color: #EAEAEA">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-12">
               <div class="section-title5 text-center">
                  {{-- <img src="{{asset('theme/assets/images/icons/sec-title-vector3.svg')}}" alt="image"> --}}
                  {{-- <span>Testimonial</span> --}}
                  <h2>Tanzania <span>Safaris</span></h2>
                  {{-- <p>The Wildlife conservation is long term commitment and journey that requires the cooperation of everyone in the community.</p> --}}
               </div>
            </div>
         </div>
       <div class="row g-4">
          @foreach ($Experiences as $Ex)
          <div class="col-lg-4 col-md-6 col-sm-12" >
            <div class="best-plan-single1" style="border:3px solid #666666">
               <div class="image">
                  <img style="min-height:230px" src="{{url('/')}}/uploads/experiences/{{$Ex->image_one}}" class="img-fluid" alt="{{$Ex->title}}">
               </div>
               <div class="content">
                  <h4 style="height:70px !important;"><a href="{{url('/')}}/destinations/{{$Ex->slung}}">{{$Ex->title}}</a></h4>
                  <div class="best-plan-meta">
                     <span class="duration"><i class="bi bi-clock"></i>{{$Ex->duration}}</span>
                     <span class="rating"><i class="bi bi-geo-alt"></i>{{$Ex->location}}</span>
                  </div>
                  <a href="{{url('/')}}/destinations/{{$Ex->slung}}" class="eg-btn btn--primary-outline btn--md">Explore Itinery</a>
               </div>
            </div>
         </div>
          @endforeach
       </div>
    </div>
 </div>
 {{--  --}}

@endsection
