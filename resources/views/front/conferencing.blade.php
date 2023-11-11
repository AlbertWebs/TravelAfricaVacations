@extends('front.master')

@section('content')
<div class="inner-banner-section" style="background-image: url('{{asset('uploads/banners/conferencing.jpg')}}'); background-size: cover; background-repeat: no-repeat; min-height: 350px;">
    <img src="{{asset('theme/assets/images/bg/inner-banner-vctr.png')}}" class="inner-banner-vector" alt="image">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xl-8 col-md-10 col-sm-12">
             <div class="breadcrumb-area">
                <span>Conferencing</span>
                <h2>Who said conferences can’t be fun?</h2>
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
                <p style="font-size: 2rem;">Let your conference, brainstorming session, your product launch, or your board meeting be staged in the bush and your dynamism of your idea generated will be as wild as the game, when it comes to diversity of location ,warmth of welcome and professional performance- Travel Africa vacations is the name.</p>
             </div>
             <ul class="feature3-list sibling-2">
                <li>We meet and greet the conference delegates at the airport,</li>
                <li>Transfer from the airport.</li>
                <li>Book accommodation</li>
                <li>Book conference venue and organize all requirements and</li>
                <li>Offer ushering services.</li>
                <li>We offer innovative, adaptive and inspirational conferences spaces seamlessly- We help you meet with the world.</li>
             </ul>
             <a href="{{url('/')}}/contact-us" class="eg-btn btn--primary-outline sibling-2 btn--lg">Book Conference</a>
          </div>
       </div>
    </div>
 </div>
@endsection
