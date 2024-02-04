@extends('front.master')

@section('content')

<div class="inner-banner-section">
    <img src="{{asset('theme/assets/images/bg/inner-banner-vctr.png')}}" class="inner-banner-vector" alt="image">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xl-8 col-md-10 col-sm-12">
             <div class="breadcrumb-area">
                <span>We have handpicked all this just for you</span>
                <h2>Sample Safaris</h2>

             </div>
          </div>
       </div>
    </div>
 </div>
 {{--  --}}

 {{--  --}}
 <div class="blog-grid-section pt-120 pb-120" style="background-color: #EAEAEA">
    <div class="container">
       <div class="row g-4">
          @foreach ($Experiences as $Ex)
          <div class="col-lg-4 col-md-6 col-sm-12" >
            <div class="best-plan-single1" style="border:3px solid #666666">
               <div class="image">
                  <img style="min-height:280px" src="{{url('/')}}/uploads/destinations/{{$Ex->image_one}}" class="img-fluid" alt="{{$Ex->title}}">
               </div>
               <div class="content">
                  <h4 style="height:70px !important;"><a href="{{url('/')}}/experiences/{{$Ex->slung}}">{{$Ex->title}}</a></h4>
                  <div class="best-plan-meta">
                     {{-- <span class="duration"><i class="bi bi-clock"></i>{{$Ex->duration}}</span> --}}
                     <span class="rating"><i class="bi bi-geo-alt"></i>{{$Ex->location}}</span>
                  </div>
                  <a href="{{url('/')}}/sample-safaris/{{$Ex->slung}}" class="eg-btn btn--primary-outline btn--md">Explore Itinery</a>
               </div>
            </div>
         </div>
          @endforeach
       </div>
    </div>
 </div>
 {{--  --}}

@endsection
