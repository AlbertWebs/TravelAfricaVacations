@extends('front.master')

@section('content')
<div class="banner-section5">
    <div class="banner-social-area">
       <div class="text-white">1</div>
       <div class="swiper-pagination-number d-flex flex-column align-items-center gap-5"></div>
       <ul class="banner-social gap-4">
          <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
          <li><a href="https://www.twitter.com/"><i class="bx bxl-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
          <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
       </ul>
    </div>
    <div class="swiper banner5-slider">
       <div class="swiper-wrapper">
          <div class="swiper-slide">
             <img src="{{asset('theme/assets/images/slider/home05/image01.jpg')}}" class="banner-bg11" alt="image">
             <div class="banner5-content">
                <span>Experience Wild Life</span>
                <h2>Meet Our Awesome Safari</h2>
                <p>Treat yourself with an unforgettable sailing experience. Grab a last minute bargain with one of our late cruise deals. </p>
                <a href="{{url('/')}}/destination" class="eg-btn btn--primary3 btn--lg">Explore Safari</a>
             </div>
          </div>
          <div class="swiper-slide">
             <img src="{{asset('theme/assets/images/slider/home05/image02.jpg')}}" class="banner-bg11" alt="image">
             <div class="banner5-content">
                <span>Experience Wild Life</span>
                <h2>Meet Our Awesome Safari</h2>
                <p>Treat yourself with an unforgettable sailing experience. Grab a last minute bargain with one of our late cruise deals. </p>
                <a href="{{url('/')}}/destination" class="eg-btn btn--primary3 btn--lg">Explore Safari</a>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="wild-package-section pt-120 pb-120" id="safari-section">
    <div class="container">
       <div class="row mb-60">
          <div class="col-md-8">
             <div class="about5-title">
                <span>SAFARI TOUR</span>
                <h2 class="mb-0">Best Wildlife Tour <span>Packages.</span></h2>
             </div>
          </div>
          <div class="col-md-4">
             <div class="slider-arrows arrows-style-4 sibling-2 text-center d-lg-flex d-none flex-row justify-content-center align-items-center gap-4">
                <div class="wild-package-prev swiper-prev-arrow" tabindex="0" role="button" aria-label="Previous slide">
                   <img src="{{asset('theme/assets/images/icons/arrow-left5.svg')}}" alt="image">
                </div>
                <div class="wild-package-next swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide">
                   <img src="{{asset('theme/assets/images/icons/arrow-right5.svg')}}" alt="image">
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="slider-wrap">
       <div class="container">
          <div class="swiper wild-package-slider">
             <div class="swiper-wrapper">
                <div class="swiper-slide">
                   <div class="wild-package-single">
                      <img src="{{asset('theme/assets/images/bg/wild-p1.png')}}" class="wild-package-img" alt="image">
                      <div class="text">
                         <span>The Wolf</span>
                         <h4><a href="tour-package-details.html">Kabini WIldlife</a></h4>
                      </div>
                      <div class="content-wrapper">
                         <div class="content">
                            <h4>Kabini WIldlife Safari</h4>

                            <a href="contact.html" class="details-btn">Explore More</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="wild-package-single">
                      <img src="{{asset('theme/assets/images/bg/wild-p2.png')}}" class="wild-package-img" alt="image">
                      <div class="text">
                         <span>Tiger</span>
                         <h4><a href="tour-package-details.html">Sariska Tiger</a></h4>
                      </div>
                      <div class="content-wrapper">
                         <div class="content">
                            <h4>Sariska Tiger</h4>

                            <a href="contact.html" class="details-btn">Explore More</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="wild-package-single">
                      <img src="{{asset('theme/assets/images/bg/wild-p3.png')}}" class="wild-package-img" alt="image">
                      <div class="text">
                         <span>Lion</span>
                         <h4><a href="tour-package-details.html">Bera Leopard</a></h4>
                      </div>
                      <div class="content-wrapper">
                         <div class="content">
                            <h4>Bera Leopard Safari</h4>

                            <a href="contact.html" class="details-btn">Explore More</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="wild-package-single">
                      <img src="{{asset('theme/assets/images/bg/wild-p4.png')}}" class="wild-package-img" alt="image">
                      <div class="text">
                         <span>Elephant</span>
                         <h4><a href="tour-package-details.html">National Park</a></h4>
                      </div>
                      <div class="content-wrapper">
                         <div class="content">
                            <h4>National Park</h4>

                            <a href="contact.html" class="details-btn">Explore More</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="wild-package-single">
                      <img src="{{asset('theme/assets/images/bg/wild-p5.png')}}" class="wild-package-img" alt="image">
                      <div class="text">
                         <span>Monkey</span>
                         <h4><a href="tour-package-details.html">Panna Monkey</a></h4>
                      </div>
                      <div class="content-wrapper">
                         <div class="content">
                            <h4>Panna Monkey</h4>

                            <a href="contact.html" class="details-btn">Explore More</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="about-section pb-120">
    <div class="container">
       <div class="row align-items-center mb-40">
          <div class="col-lg-6 mb-5">
             <div class="about5-title">
                <span>Welcome to Travel Africa Vacations</span>
                <h2>We make your Safaris <span>Memorable!</span></h2>
                <p>Book the Best Safari Tours Destinations in 2021 right here. Find Kenya’s top 20 amazing tour packages at cheaper rates. Get most popular tours and budget friendly packages. We got the best negotiated tour packages and unique collections of tours in East Africa.</p>
                <a href="tel:+ +254 733 263 685">Direct Call + +254 733 263 685</a>
             </div>
          </div>
          <div class="col-lg-6 text-lg-start text-center">
             <img src="{{asset('uploads/banners/masai-mara.jpg')}}" class="img-fluid" alt="image">
          </div>
       </div>
       <div class="row justify-content-center align-items-center g-4">
          <div class="col-lg-5 d-lg-flex d-none">
             <img src="{{asset('uploads/banners/pexels-antony-trivet-6056019.jpg')}}" class="img-fluid" alt="image">
          </div>
          <div class="col-lg-7">
             <div class="about5-content">
                <p>
                    Travel Africa Vacations is a Tours, Safari, Holiday, Conferences and Events Organizing Company registered and based in Kenya. We provide our guests with a complete and effortless Kenya Safari and Holiday by combining our expertise with the magic found in nature. We do all of the planning work and design turn-key vacations that exceed our guests’ desires for fun and adventure. Leaving us to plan your holiday, Safari, conference or event means committing it to reliability!
                </p>
                <p>
                    Travel Africa Vacations makes the process of planning a safari simple and easy! We offer tailor made safari itineraries or just let you plan your safari, holiday and we execute it. It is that simple. On conferences and events, we make the correct choice for your kind of event, giving you the different available options, guiding you to make the correct choice that best befits your requirement. We welcome you to try our services; you will be among those who have never regretted leaving it all to us.
                </p>
                {{-- <p>
                    Have you dreamed of visiting paradise? Come away with us to the land of many opportunities the perfect location that offers uninterrupted relaxation on white-sand beaches, the sun, unbeatable scenery, and a rich inviting culture. Kenya is a haven for the unexpected. A place for those who seek to follow their own path- the cradle for mankind. Here, every true adventure feeds the soul.
                </p> --}}
                <p>Karibu Sana!!</p>
                </p>

             </div>
          </div>
       </div>
    </div>
 </div>
 {{--  --}}
 <div class="blog-grid-section pt-120 pb-120" style="background-color: #EAEAEA">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-12">
               <div class="section-title5 text-center">
                  <img src="{{asset('theme/assets/images/icons/sec-title-vector3.svg')}}" alt="image">
                  {{-- <span>Testimonial</span> --}}
                  <h2>Featured <span>Tours</span></h2>
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
 <div class="testimonial-section pt-120 pb-120">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-10 col-md-12">
             <div class="section-title5 text-center">
                <img src="{{asset('theme/assets/images/icons/sec-title-vector3.svg')}}" alt="image">
                <span>Testimonial</span>
                <h2>What Our <span>Visitors Say!</span></h2>
                {{-- <p>The Wildlife conservation is long term commitment and journey that requires the cooperation of everyone in the community.</p> --}}
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-12 d-flex justify-content-center">
             <div class="swiper testimonial5-slider pb-1">
                <div class="swiper-wrapper">
                   <div class="swiper-slide">
                      <div class="testimonial-single1 sibling-3">
                         <p style="height:180px">“This is the 3rd time I’ve used Travel Africa Vacations website and telling you the truth their services are always reliable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings.”!</p>
                         <div class="testi-author">
                            <div class="image">
                               <div class="testi-quote">
                                  <img src="{{asset('theme/assets/images/icons/quote3.svg')}}" alt="image">
                               </div>
                               <img width="60" src="{{asset('uploads/testimonials/agent-image.jpg')}}" alt="image">
                            </div>
                            <div class="author-text">
                               <h5>Jessica Brown</h5>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="swiper-slide">
                      <div class="testimonial-single1 sibling-3">
                         <p style="height:180px">“Fantastic experience, great value, unforgettable memories of Masai Mara wild adventures. It was a great trip of 5 days in the jungle and a taste of high end hotels in the middle of Mara plains.”!</p>
                         <div class="testi-author">
                            <div class="image">
                               <div class="testi-quote">
                                  <img src="{{asset('theme/assets/images/icons/quote3.svg')}}" alt="image">
                               </div>
                               <img width="60" src="{{asset('uploads/testimonials/agent-image.jpg')}}" alt="image">
                            </div>
                            <div class="author-text">
                               <h5>Rashid Kazungu</h5>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="swiper-pagination sibling-3 d-flex align-items-center justify-content-center mt-60"></div>
       </div>
    </div>
 </div>
 <div class="partner-section pt-120 pb-120" style="background-color: #EAEAEA">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-10 col-md-12">
             <div class="section-title5 text-center">
                <img src="{{asset('theme/assets/images/icons/sec-title-vector3.svg')}}" alt="image">
                <span>Partners</span>
                <h2>People <span>Trust Us !</span></h2>
                {{-- <p>The Wildlife conservation is long term commitment and journey that requires the cooperation of everyone in the community.</p> --}}
             </div>
          </div>
       </div>
       <div class="row justify-content-center">
          <div class="swiper partner-slider">
             <div class="swiper-wrapper">
                <div class="swiper-slide">
                   <div class="partner-single">
                      <img width="200" src="{{asset('uploads/partners/Tripadvisor-Logo.png')}}" alt="image">
                   </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner-single">
                       <img width="200" src="{{asset('uploads/partners/BookingCom-logo.png')}}" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner-single">
                       <img width="200" src="{{asset('uploads/partners/1e13d106762e51bec247bf610ce2f404-7d39e7c97295ba5fb4143ea60ed0223c.png')}}" alt="image">
                    </div>
                </div>

             </div>
          </div>
       </div>
    </div>
 </div>

 <div class="destination-section5 overflow-hidden pt-120 pb-120">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-10 col-md-12">
             <div class="section-title5 text-center">
                <img src="{{asset('theme/assets/images/icons/sec-title-vector3.svg')}}" alt="image">
                <span>Destination</span>
                <h2>Find Your Desire <span>Destination</span></h2>
                <p>The Wildlife conservation is long term commitment and journey that requires the cooperation of everyone in the community.</p>
             </div>
          </div>
       </div>
       <div class="row position-relative">
          <div class="col-12 d-flex justify-content-center">
             <div class="swiper destination5-slider">
                <div class="swiper-wrapper">
                   <div class="swiper-slide">
                      <div class="destination-single3">
                         <img src="{{asset('theme/assets/images/bg/destination51.png')}}" class="destination-img img-fluid" alt="image">
                         <div class="content">
                            <div class="text-wrap">
                               <h4><a href="destination-details.html">Wiesbaden Sea</a></h4>
                               <p>40 Tours Place</p>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="swiper-slide">
                      <div class="destination-single3">
                         <img src="{{asset('theme/assets/images/bg/destination52.png')}}" class="destination-img img-fluid" alt="image">
                         <div class="content">
                            <div class="text-wrap">
                               <h4><a href="destination-details.html">National Park</a></h4>
                               <p>40 Tours Place</p>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="swiper-slide">
                      <div class="destination-single3">
                         <img src="{{asset('theme/assets/images/bg/destination53.png')}}" class="destination-img img-fluid" alt="image">
                         <div class="content">
                            <div class="text-wrap">
                               <h4><a href="destination-details.html">Wild Park</a></h4>
                               <p>40 Tours Place</p>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="swiper-slide">
                      <div class="destination-single3">
                         <img src="{{asset('theme/assets/images/bg/destination54.png')}}" class="destination-img img-fluid" alt="image">
                         <div class="content">
                            <div class="text-wrap">
                               <h4><a href="destination-details.html">Africa Adventure</a></h4>
                               <p>40 Tours Place</p>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="swiper-slide">
                      <div class="destination-single3">
                         <img src="{{asset('theme/assets/images/bg/destination51.png')}}" class="destination-img img-fluid" alt="image">
                         <div class="content">
                            <div class="text-wrap">
                               <h4><a href="destination-details.html">Safari Park</a></h4>
                               <p>40 Tours Place</p>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="swiper-slide">
                      <div class="destination-single3">
                         <img src="{{asset('theme/assets/images/bg/destination53.png')}}" class="destination-img img-fluid" alt="image">
                         <div class="content">
                            <div class="text-wrap">
                               <h4><a href="destination-details.html">Adventure Park</a></h4>
                               <p>40 Tours Place</p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="slider-arrows arrows-style-1 sibling-1 text-center d-lg-flex d-none flex-row justify-content-between align-items-center w-100">
             <div class="destination5-prev swiper-prev-arrow" tabindex="0" role="button" aria-label="Previous slide">
                <svg width="20" height="12" viewBox="0 0 20 12" xmlns="http://www.w3.org/2000/svg">
                   <path d="M7.00001 10.573V6L7.00001 1.42701C7.00001 1.25744 6.80224 1.16481 6.67197 1.27336L1 6L6.67197 10.7266C6.80224 10.8352 7.00001 10.7426 7.00001 10.573Z" />
                   <path d="M19 6.5C19.2761 6.5 19.5 6.27614 19.5 6C19.5 5.72386 19.2761 5.5 19 5.5V6.5ZM6.67197 10.7266L6.99206 10.3425V10.3425L6.67197 10.7266ZM1 6L0.679909 5.61589L0.218975 6L0.679909 6.38411L1 6ZM6.67197 1.27336L6.35188 0.889252L6.35188 0.889253L6.67197 1.27336ZM19 5.5L7.00001 5.5V6.5L19 6.5V5.5ZM6.50001 6V10.573H7.50001V6H6.50001ZM6.99206 10.3425L1.32009 5.61589L0.679909 6.38411L6.35188 11.1107L6.99206 10.3425ZM1.32009 6.38411L6.99206 1.65747L6.35188 0.889253L0.679909 5.61589L1.32009 6.38411ZM6.50001 1.42701L6.50001 6H7.50001L7.50001 1.42701H6.50001ZM6.99206 1.65747C6.79667 1.82031 6.50001 1.68136 6.50001 1.42701H7.50001C7.50001 0.833523 6.80781 0.509313 6.35188 0.889252L6.99206 1.65747ZM6.50001 10.573C6.50001 10.3186 6.79667 10.1797 6.99206 10.3425L6.35188 11.1107C6.80781 11.4907 7.50001 11.1665 7.50001 10.573H6.50001Z" />
                </svg>
             </div>
             <div class="destination5-next swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide">
                <svg width="20" height="12" viewBox="0 0 20 12" xmlns="http://www.w3.org/2000/svg">
                   <path d="M13 1.42701V6V10.573C13 10.7426 13.1978 10.8352 13.328 10.7266L19 6L13.328 1.27336C13.1978 1.16481 13 1.25744 13 1.42701Z" />
                   <path d="M1 5.5C0.723858 5.5 0.5 5.72386 0.5 6C0.5 6.27614 0.723858 6.5 1 6.5V5.5ZM13.328 1.27336L13.0079 1.65747V1.65747L13.328 1.27336ZM19 6L19.3201 6.38411L19.781 6L19.3201 5.61589L19 6ZM13.328 10.7266L13.6481 11.1107L13.6481 11.1107L13.328 10.7266ZM1 6.5H13V5.5H1V6.5ZM13.5 6V1.42701H12.5V6H13.5ZM13.0079 1.65747L18.6799 6.38411L19.3201 5.61589L13.6481 0.889253L13.0079 1.65747ZM18.6799 5.61589L13.0079 10.3425L13.6481 11.1107L19.3201 6.38411L18.6799 5.61589ZM13.5 10.573V6H12.5V10.573H13.5ZM13.0079 10.3425C13.2033 10.1797 13.5 10.3186 13.5 10.573H12.5C12.5 11.1665 13.1922 11.4907 13.6481 11.1107L13.0079 10.3425ZM13.5 1.42701C13.5 1.68136 13.2033 1.82031 13.0079 1.65747L13.6481 0.889253C13.1922 0.509312 12.5 0.833522 12.5 1.42701H13.5Z" />
                </svg>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="blog-section pt-120 pb-120 overflow-hidden">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-8 col-md-12">
             <div class="section-title5 text-center">
                <img src="{{asset('theme/assets/images/icons/sec-title-vector3.svg')}}" alt="image">
                <span>Blog</span>
                <h2>Our Latest News <span>& Articles!</span></h2>
                <p>Exclusive Deals, Central Locations! Search & Book Cheap Hotels Online. Nexte Right Property for You.</p>
             </div>
          </div>
       </div>
       <div class="row gy-5 justify-content-center">
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
             <div class="blog-single2 sibling-2">
                <div class="image">
                   <img src="{{asset('theme/assets/images/blog/blog52.png')}}" class="img-fluid" alt="image">
                </div>
                <div class="content">
                   <div class="blog-date">
                      <i class="bi bi-calendar-check"></i><span>Augest 18, 2022</span>
                   </div>
                   <h5><a href="blog-details.html">Scottish ‘Great Wood’ from a real world legendary.</a></h5>
                   <a href="blog-details.html"><i class="bi bi-arrow-right"></i></a>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
             <div class="blog-single2 sibling-2">
                <div class="image">
                   <img src="{{asset('theme/assets/images/blog/blog51.png')}}" class="img-fluid" alt="image">
                </div>
                <div class="content">
                   <div class="blog-date">
                      <i class="bi bi-calendar-check"></i><span>January 8, 2022</span>
                   </div>
                   <h5><a href="blog-details.html">Amazing underwater photographers everyone</a></h5>
                   <a href="blog-details.html"><i class="bi bi-arrow-right"></i></a>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
             <div class="blog-single2 sibling-2">
                <div class="image">
                   <img src="{{asset('theme/assets/images/blog/blog53.png')}}" class="img-fluid" alt="image">
                </div>
                <div class="content">
                   <div class="blog-date">
                      <i class="bi bi-calendar-check"></i><span>Augest 28, 2022</span>
                   </div>
                   <h5><a href="blog-details.html">Scottish ‘Great Wood’ from a real world legendary.</a></h5>
                   <a href="blog-details.html"><i class="bi bi-arrow-right"></i></a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="instagram-feed-section">
    <div class="container">
       <div class="row justify-content-lg-start justify-content-center">
          <div class="col-lg-4">
             <div class="section-title-small text-lg-start text-center">
                <i class="bi bi-instagram"></i><span>Instagram Feed</span>
             </div>
          </div>
       </div>
    </div>
    <div class="container-fluid px-0">
       <div class="swiper insta-feed-slider">
          <div class="swiper-wrapper">
             <div class="swiper-slide">
                <div class="insta-feed-single">
                   <img src="{{asset('theme/assets/images/bg/insta51.png')}}" alt="image">
                </div>
             </div>
             <div class="swiper-slide">
                <div class="insta-feed-single">
                   <img src="{{asset('theme/assets/images/bg/insta52.png')}}" alt="image">
                </div>
             </div>
             <div class="swiper-slide">
                <div class="insta-feed-single">
                   <img src="{{asset('theme/assets/images/bg/insta53.png')}}" alt="image">
                </div>
             </div>
             <div class="swiper-slide">
                <div class="insta-feed-single">
                   <img src="{{asset('theme/assets/images/bg/insta54.png')}}" alt="image">
                </div>
             </div>
             <div class="swiper-slide">
                <div class="insta-feed-single">
                   <img src="{{asset('theme/assets/images/bg/insta55.png')}}" alt="image">
                </div>
             </div>
             <div class="swiper-slide">
                <div class="insta-feed-single">
                   <img src="{{asset('theme/assets/images/bg/insta56.png')}}" alt="image">
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
