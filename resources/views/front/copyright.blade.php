@extends('front.master')

@section('content')
<div class="inner-banner-section" >
    <img src="{{asset('theme/assets/images/bg/inner-banner-vctr.png')}}" class="inner-banner-vector" alt="image">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xl-8 col-md-10 col-sm-12">
             <div class="breadcrumb-area">
                <span></span>
                <h2>
                    Copyright Statement
                    {{--  --}}
                </h2>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="feature-section2 pt-120 pb-120">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-lg-12 ps-lg-5">
             <div class="about3-title text-start">
                <p style="font-size: 2rem;">
                    Copyright © {{date('Y')}} Travel Africa Vacations. All rights reserved.<br><br>

                    The content, design, and intellectual property on the Travel Africa Vacations website, including but not limited to text, graphics, logos, images, audio clips, video clips, digital downloads, and software, are the exclusive property of Travel Africa Vacations or its content suppliers and protected by international copyright laws.<br><br>

                    Any unauthorized reproduction, distribution, or modification of the content for commercial or non-commercial purposes is strictly prohibited without the prior written consent of Travel Africa Vacations. This includes, but is not limited to, copying, reproducing, republishing, uploading, posting, transmitting, or distributing any material or information on the website.<br><br>

                    Travel Africa Vacations reserves the right to take legal action against individuals or entities that engage in unauthorized use or reproduction of its copyrighted material. For inquiries regarding the use of copyrighted material or to seek permission for reproduction, please contact Travel Africa Vacations at info@travelafricavacations.com.
                </p>
             </div>

          </div>
       </div>
    </div>
 </div>
@endsection
