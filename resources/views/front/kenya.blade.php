@extends('front.master')

@section('content')

<div class="inner-banner-section">
    <img src="{{asset('theme/assets/images/bg/inner-banner-vctr.png')}}" class="inner-banner-vector" alt="image">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xl-8 col-md-10 col-sm-12">
             <div class="breadcrumb-area">
                <span>Jambo!</span>
                <h2>Karibu Kenya</h2>

             </div>
          </div>
       </div>
    </div>
 </div>
 {{--  --}}
 <div class="banner5-content" style="width:90% !important">
    <p style="color:#000000">
        Kenya, nestled in the eastern part of Africa, is a captivating destination that seamlessly blends breathtaking natural wonders with vibrant cultural experiences. Renowned for its diverse landscapes, from the iconic savannahs of the Maasai Mara to the snow-capped peaks of Mount Kenya, the country offers a unique safari adventure where visitors can witness the awe-inspiring annual migration of wildebeest. <br><br> Kenya's abundant wildlife, including elephants, lions, and rhinos, can be encountered in its numerous national parks and reserves. Beyond the wild beauty, Kenya boasts a rich cultural tapestry with indigenous tribes like the Maasai and Samburu, offering authentic interactions and colorful traditions. Nairobi, the bustling capital, provides a dynamic urban experience with its markets, museums, and vibrant nightlife. Whether exploring the Great Rift Valley, lounging on the pristine beaches of the Indian Ocean, or immersing oneself in the warmth of Kenyan hospitality, this enchanting country promises an unforgettable journey for any traveler.
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
                  <h2>Kenya <span>Safaris</span></h2>
                  {{-- <p>The Wildlife conservation is long term commitment and journey that requires the cooperation of everyone in the community.</p> --}}
               </div>
            </div>
         </div>
       <div class="row g-4">
          @foreach ($Experiences as $Ex)
          <div class="col-lg-4 col-md-6 col-sm-12" >
            <div class="best-plan-single1" style="border:3px solid #666666">
               <div class="image">
                  <img style="min-height:230px" src="{{url('/')}}/uploads/destinations/{{$Ex->image_one}}" class="img-fluid" alt="{{$Ex->title}}">
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
