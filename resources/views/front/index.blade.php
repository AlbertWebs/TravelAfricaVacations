@extends('front.master')

@section('content')
<div class="banner-section5">
    {{-- <div class="banner-social-area">
       <div class="text-white">1</div>
       <div class="swiper-pagination-number d-flex flex-column align-items-center gap-5"></div>
       <ul class="banner-social gap-4">
          <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
          <li><a href="https://www.twitter.com/"><i class="bx bxl-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
          <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
       </ul>
    </div> --}}
    <div class="swiper banner5-slider">
       <div class="swiper-wrapper">
          <div class="swiper-slide">
             <img src="{{asset('theme/assets/images/slider/home05/image01.jpg')}}" class="banner-bg11" alt="image">
             <div class="banner5-content">
                <span>Experience Africa Vacations</span>
                <h2>Leave Nothing But Your Footsteps</h2>
                <p>As a premier travel company, we specialize in crafting unforgettable experiences that seamlessly blend adventure, luxury, and cultural immersion. Our passion for Africa's breathtaking landscapes, vibrant communities, and unique wildlife drives us to curate bespoke itineraries tailored to your preferences. </p>
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
                <span>WILDLIFE SAFARIS</span>
                <h2 class="mb-0">Best Wildlife Safaris <span>Packages.</span></h2>
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
                         <h4><a href="#">Kabini WIldlife</a></h4>
                      </div>
                      <div class="content-wrapper">
                         <div class="content">
                            <h4>Kabini WIldlife Safari</h4>

                            <a href="#" class="details-btn">Explore More</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="wild-package-single">
                      <img src="{{asset('theme/assets/images/bg/wild-p2.png')}}" class="wild-package-img" alt="image">
                      <div class="text">
                         <span>Cheetah</span>
                         <h4><a href="#">Mara Cheetah</a></h4>
                      </div>
                      <div class="content-wrapper">
                         <div class="content">
                            <h4>Mara Cheetah</h4>

                            <a href="#" class="details-btn">Explore More</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="wild-package-single">
                      <img src="{{asset('theme/assets/images/bg/wild-p3.png')}}" class="wild-package-img" alt="image">
                      <div class="text">
                         <span>Lion</span>
                         <h4><a href="#">Mara Lion</a></h4>
                      </div>
                      <div class="content-wrapper">
                         <div class="content">
                            <h4>Mara Lion</h4>

                            <a href="#" class="details-btn">Explore More</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="wild-package-single">
                      <img src="{{asset('theme/assets/images/bg/wild-p4.png')}}" class="wild-package-img" alt="image">
                      <div class="text">
                         <span>Elephant</span>
                         <h4><a href="#">Best of Amboseli</a></h4>
                      </div>
                      <div class="content-wrapper">
                         <div class="content">
                            <h4>Best of Amboseli</h4>

                            <a href="#" class="details-btn">Explore More</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="wild-package-single">
                      <img src="{{asset('theme/assets/images/bg/wild-p5.png')}}" class="wild-package-img" alt="image">
                      <div class="text">
                         <span>Monkey</span>
                         <h4><a href="#">Primate Lodges</a></h4>
                      </div>
                      <div class="content-wrapper">
                         <div class="content">
                            <h4>Primate Lodges</h4>

                            <a href="#" class="details-btn">Explore More</a>
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
