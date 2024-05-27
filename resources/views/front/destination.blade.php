@extends('front.master')

@section('content')
@foreach ($Experiences as $Ex)
{{--  --}}
<div class="inner-banner-section sibling-2" style="background-image: url('{{url('/')}}/uploads/experiences/{{$Ex->image_one}}'); background-size: cover; background-repeat: no-repeat; min-height: 350px;">
    <img src="{{asset('theme/assets/images/bg/inner-banner-vctr.png')}}" class="inner-banner-vector" alt="image">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xl-8 col-md-10 col-sm-12">
             <div class="breadcrumb-area">
                <span>{{$Ex->duration}}</span>
                <h2>{{$Ex->title}}</h2>
                <div class="review-area">
                   {{-- <ul class="star-list">
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-half"></i></li>
                   </ul>
                   <span>(10 Review)</span> --}}
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="destination-details-section pt-120 pb-120">
    <div class="container">
       <div class="row gy-5 justify-content-center">
          <div class="col-lg-8">
             <div class="nav flex-row justify-content-start nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active nav-btn-style  mb-20" id="v-pills-information-tab" data-bs-toggle="pill" data-bs-target="#v-pills-information" type="button" role="tab" aria-controls="v-pills-information" aria-selected="true">
                   <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2.73398 0.0593748C1.75273 0.30625 1.05273 1.05 0.855859 2.05625C0.790234 2.4 0.790234 13.6 0.855859 13.9437C1.02773 14.8188 1.57461 15.4937 2.37461 15.8219C2.78398 15.9906 2.87773 16 4.29023 16C5.51211 16 5.60273 15.9969 5.71211 15.9406C5.85898 15.8656 5.95273 15.7656 6.01523 15.6188C6.14023 15.3125 6.01211 14.9625 5.71211 14.8094C5.60586 14.7531 5.51523 14.75 4.50898 14.75C3.91211 14.7469 3.32773 14.7344 3.21211 14.7219C2.66523 14.65 2.22461 14.2469 2.12461 13.7219C2.08086 13.4906 2.08086 2.50937 2.12461 2.27812C2.22461 1.75313 2.66523 1.35 3.21211 1.27812C3.48711 1.24375 10.8559 1.24375 11.1309 1.27812C11.6777 1.35 12.1184 1.75313 12.2184 2.27812C12.2371 2.38125 12.2496 3.23125 12.2496 4.46562V6.4875L12.3215 6.625C12.359 6.7 12.4434 6.80312 12.509 6.85625C12.609 6.9375 12.6621 6.95312 12.8402 6.9625C13.1527 6.98125 13.3715 6.85312 13.484 6.5875C13.5527 6.41875 13.5559 2.4125 13.4871 2.05625C13.284 1.02812 12.5652 0.278125 11.5684 0.0500002C11.3715 0.00624943 10.8996 0 7.14961 0.00312519C3.25586 0.00312519 2.93711 0.00937462 2.73398 0.0593748Z" />
                      <path d="M3.67173 3.7999C3.24048 4.02178 3.19048 4.58428 3.57173 4.8874L3.69361 4.98428L7.12798 4.99365C10.4592 4.9999 10.5655 4.9999 10.6811 4.94053C11.1499 4.6999 11.1499 4.0499 10.6811 3.80928C10.5686 3.75303 10.4467 3.7499 7.16548 3.7499C4.14673 3.7499 3.75611 3.75615 3.67173 3.7999Z" />
                      <path d="M3.67173 6.2999C3.24048 6.52178 3.19048 7.08428 3.57173 7.3874L3.69361 7.48428L7.12798 7.49365C10.4592 7.4999 10.5655 7.4999 10.6811 7.44053C11.1499 7.1999 11.1499 6.5499 10.6811 6.30928C10.5686 6.25303 10.4467 6.2499 7.16548 6.2499C4.14673 6.2499 3.75611 6.25615 3.67173 6.2999Z" />
                      <path d="M12.8149 8.54689C12.5649 8.61877 12.3899 8.70314 12.1743 8.85627C12.0711 8.93127 11.1805 9.80002 10.1961 10.7875L8.41175 12.5781L8.29925 12.9375C7.63675 15.0969 7.61488 15.1719 7.61175 15.3813C7.60863 15.5656 7.62113 15.6031 7.70238 15.725C7.7555 15.7969 7.8555 15.8906 7.92113 15.9281C8.143 16.0531 8.268 16.0344 9.67738 15.6438C10.3836 15.4469 11.0086 15.2625 11.068 15.2344C11.1243 15.2063 11.9961 14.3563 13.0024 13.35C14.8243 11.5281 14.8368 11.5125 14.9649 11.25C15.2524 10.6594 15.2555 10.0906 14.9711 9.51564C14.7649 9.09689 14.3711 8.75002 13.9274 8.59377C13.6711 8.50314 13.068 8.47814 12.8149 8.54689ZM13.5211 9.81564C13.7211 9.89064 13.9055 10.1563 13.9055 10.375C13.9055 10.5156 13.8118 10.7125 13.6961 10.8188L13.6055 10.9063L13.1868 10.4844L12.768 10.0656L12.8586 9.96564C12.9118 9.91252 12.9961 9.85002 13.0461 9.82502C13.1586 9.77502 13.3993 9.76877 13.5211 9.81564ZM11.5524 12.9594L10.4055 14.1094L9.8055 14.275C9.47738 14.3656 9.2055 14.4344 9.20238 14.4313C9.19613 14.425 9.27425 14.1594 9.37113 13.8344L9.54613 13.25L10.6961 12.1031L11.8461 10.9563L12.2743 11.3844L12.7024 11.8125L11.5524 12.9594Z" />
                      <path d="M3.67173 8.8C3.24048 9.025 3.19048 9.58438 3.57173 9.8875L3.69361 9.98438H5.90611H8.11861L8.24048 9.8875C8.58111 9.61563 8.58111 9.13438 8.24048 8.8625L8.11861 8.76563L5.94361 8.75625C4.01236 8.75 3.75611 8.75625 3.67173 8.8Z" />
                   </svg>
                   Information
                </button>
                <button class="nav-link nav-btn-style mb-20" id="v-pills-plan-tab" data-bs-toggle="pill" data-bs-target="#v-pills-plan" type="button" role="tab" aria-controls="v-pills-plan" aria-selected="true">
                   <i class="lar la-user"></i>
                   <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_1652_1254)">
                         <path d="M6.16875 0.0468197C5.73438 0.14057 5.24688 0.412445 4.9375 0.731194L4.8 0.874945H3.79375C2.87188 0.874945 2.775 0.881195 2.60938 0.937445C2.22813 1.0687 1.95312 1.31557 1.77188 1.68432L1.67188 1.89057V8.43745V14.9843L1.77188 15.1906C1.95312 15.5624 2.23438 15.8093 2.6125 15.9374C2.79375 15.9999 2.87813 15.9999 8.0625 15.9937L13.3281 15.9843L13.5469 15.8781C13.8344 15.7374 14.0813 15.4906 14.2219 15.2031L14.3281 14.9843V8.43745V1.89057L14.2281 1.68432C14.0469 1.31557 13.7719 1.0687 13.3906 0.937445C13.225 0.881195 13.1281 0.874945 12.2063 0.874945H11.2L11.0625 0.731194C10.7469 0.406195 10.2625 0.14057 9.81563 0.0436945C9.525 -0.0156803 6.45312 -0.0156803 6.16875 0.0468197ZM9.725 1.03119C10.1188 1.15307 10.4719 1.44994 10.6594 1.8187C10.7094 1.91869 10.75 2.01244 10.75 2.03119C10.75 2.05307 9.8625 2.06244 8 2.06244C6.1375 2.06244 5.25 2.05307 5.25 2.03119C5.25 1.95307 5.44375 1.62494 5.575 1.47807C5.75313 1.28119 5.98438 1.1312 6.25 1.04057C6.45 0.97182 6.48438 0.97182 7.9875 0.968695C9.43438 0.968695 9.5375 0.97182 9.725 1.03119ZM4.26875 1.89682C4.22187 2.05932 4.18125 2.39995 4.19375 2.54994C4.20938 2.73119 4.27188 2.84057 4.41875 2.94994C4.50312 3.01557 4.51875 3.01557 8 3.01557C11.4812 3.01557 11.4969 3.01557 11.5813 2.94994C11.7281 2.84057 11.7906 2.73119 11.8063 2.54994C11.8188 2.39995 11.7781 2.05932 11.7312 1.89682C11.7156 1.84682 11.7625 1.84369 12.3906 1.84369C13.15 1.84369 13.1938 1.85307 13.3219 2.06244L13.3906 2.17182V8.43745V14.7031L13.3219 14.8124C13.2844 14.8718 13.2125 14.9468 13.1625 14.9749C13.075 15.0281 12.7719 15.0312 8 15.0312C3.22812 15.0312 2.925 15.0281 2.8375 14.9781C2.7875 14.9468 2.71563 14.8718 2.67813 14.8124L2.60938 14.7031V8.43745V2.17182L2.675 2.0687C2.8125 1.85307 2.84375 1.84369 3.60312 1.84369C4.2375 1.84369 4.28437 1.84682 4.26875 1.89682Z" />
                         <path d="M9.38078 4.53114C9.2339 4.62177 9.15578 4.76864 9.15578 4.95302C9.15578 5.19989 9.26828 5.34364 9.52453 5.42177L9.62765 5.45302L9.09328 5.98427L8.56203 6.51552L7.81828 5.77489C7.41203 5.36864 7.0464 5.02177 7.0089 5.00302C6.91515 4.95614 6.69953 4.95927 6.59953 5.01239C6.4964 5.06864 4.74015 6.83114 4.69015 6.92802C4.64015 7.02489 4.6464 7.26864 4.70265 7.37489C4.79953 7.56239 5.00578 7.65302 5.24328 7.60927C5.34328 7.59052 5.46515 7.48427 6.08703 6.86552L6.81203 6.14364L7.5714 6.89677C8.63078 7.95302 8.49328 7.95302 9.5714 6.88114C10.287 6.16552 10.3433 6.11864 10.3433 6.20614C10.3433 6.33427 10.4589 6.50302 10.5933 6.57177C10.8058 6.68114 11.1245 6.58739 11.2308 6.38114C11.262 6.32177 11.2777 6.11864 11.287 5.67802C11.3027 4.94677 11.2839 4.74364 11.1808 4.63427C11.0339 4.47489 10.9902 4.46864 10.212 4.46864C9.54015 4.46864 9.47453 4.47489 9.38078 4.53114Z" />
                         <path d="M5.79688 9.2375C5.74688 9.2625 5.54375 9.44062 5.35312 9.63437L5 9.98125L4.91563 9.9C4.75938 9.75625 4.6625 9.7125 4.50313 9.7125C4.20938 9.7125 4.03125 9.89375 4.03125 10.1937C4.03125 10.3938 4.05625 10.4344 4.35625 10.7469C4.69688 11.0969 4.7875 11.1562 4.99687 11.1562C5.10938 11.1562 5.20312 11.1375 5.25 11.1062C5.40313 11.0031 6.38125 10.0125 6.44062 9.9C6.60938 9.57187 6.39062 9.1875 6.03437 9.1875C5.95625 9.1875 5.85 9.20938 5.79688 9.2375Z" />
                         <path d="M7.46895 9.74687C7.14083 9.91875 7.12833 10.4 7.44395 10.5938C7.54395 10.6531 7.60645 10.6562 9.57833 10.6562C11.5502 10.6562 11.6127 10.6531 11.7127 10.5938C12.0283 10.4 12.0127 9.90625 11.6877 9.74375C11.5877 9.69063 11.419 9.6875 9.57833 9.6875C7.69083 9.6875 7.57208 9.69063 7.46895 9.74687Z" />
                         <path d="M5.78125 11.9374C5.72188 11.9749 5.52188 12.153 5.3375 12.3343L5.00625 12.6655L4.85625 12.5436C4.71562 12.428 4.69688 12.4218 4.49375 12.4218C4.27813 12.4218 4.275 12.4218 4.15313 12.553C4.04063 12.6749 4.03125 12.6999 4.03125 12.8593C4.03125 12.9561 4.05 13.0718 4.075 13.1186C4.1 13.1655 4.25938 13.3374 4.42812 13.503C4.77812 13.8468 4.89688 13.9061 5.13437 13.8405C5.24375 13.8124 5.35625 13.7155 5.83438 13.2405C6.15 12.9311 6.425 12.6311 6.45312 12.5749C6.55313 12.3655 6.4875 12.0936 6.3125 11.9686C6.16563 11.8624 5.925 11.8499 5.78125 11.9374Z" />
                         <path d="M7.47813 12.4374C7.28438 12.5249 7.21251 12.6562 7.22501 12.8968C7.23751 13.1062 7.30313 13.2093 7.47501 13.2999C7.60001 13.3655 11.5563 13.3655 11.6813 13.2999C11.8531 13.2093 11.9188 13.1062 11.9313 12.8968C11.9438 12.6562 11.8719 12.5249 11.6781 12.4374C11.5531 12.378 11.4531 12.3749 9.57813 12.3749C7.70313 12.3749 7.60313 12.378 7.47813 12.4374Z" />
                      </g>
                      <defs>
                         <clipPath id="clip0_1652_1254">
                            <rect width="16" height="16" />
                         </clipPath>
                      </defs>
                   </svg>
                   Tour Plan
                </button>

                <button class="nav-link nav-btn-style" id="v-pills-gallery-tab" data-bs-toggle="pill" data-bs-target="#v-pills-gallery" type="button" role="tab" aria-controls="v-pills-gallery" aria-selected="true">
                   <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.00592 1.04681C2.2153 1.21868 1.50592 1.81868 1.18717 2.58118C0.987171 3.05931 0.996546 2.77181 1.00592 8.10306L1.0153 12.9531L1.1028 13.1968C1.35592 13.9187 1.81217 14.4406 2.44967 14.7499C2.97467 15.0031 2.51217 14.9843 7.98405 14.9843H12.859L13.1028 14.9124C14.034 14.6437 14.7215 13.9343 14.9372 13.0156C14.9997 12.7593 14.9997 12.6531 14.9934 7.89993L14.984 3.04681L14.8965 2.79681C14.5997 1.95931 14.009 1.37181 13.1715 1.09056L12.9528 1.01556L8.0778 1.00931C4.04655 1.00618 3.16842 1.01243 3.00592 1.04681ZM12.8434 2.07493C13.3622 2.24681 13.7559 2.64056 13.9247 3.15618C13.9778 3.31868 13.984 3.54368 13.9934 6.84368L14.0028 10.3593L12.8528 9.21556C12.2215 8.58431 11.6715 8.05306 11.634 8.03431C11.5372 7.98431 11.2622 7.99056 11.1622 8.04368C11.1153 8.06868 10.5997 8.56868 10.0153 9.15306L8.9528 10.2187L6.74967 8.01868C5.53717 6.80931 4.5153 5.80306 4.4778 5.78431C4.3903 5.74056 4.10905 5.74056 4.02155 5.78431C3.98405 5.80306 3.51217 6.25618 2.97467 6.79368L1.99655 7.76556L2.00905 5.54681C2.01842 3.51243 2.02155 3.31243 2.07467 3.15618C2.19967 2.76868 2.48405 2.41243 2.8153 2.22806C3.02467 2.10931 3.18092 2.05931 3.42155 2.03118C3.52467 2.01868 5.64967 2.00931 8.1403 2.01243C12.4403 2.01556 12.6809 2.01868 12.8434 2.07493ZM7.7653 10.4999L11.2653 13.9999L7.29655 13.9937C3.5528 13.9843 3.31842 13.9812 3.15592 13.9249C2.63717 13.7531 2.2403 13.3562 2.07467 12.8437C2.02467 12.6906 2.01842 12.4937 2.00592 10.9562L1.99342 9.24056L3.1153 8.11868C3.73092 7.50306 4.2403 6.99993 4.24967 6.99993C4.25905 6.99993 5.8403 8.57493 7.7653 10.4999ZM12.7153 10.5437L14.009 11.8374L13.9903 12.2624C13.959 12.8812 13.8278 13.2124 13.4809 13.5437C13.3153 13.7031 12.9778 13.8906 12.7997 13.9218L12.6809 13.9468L11.184 12.4499L9.68717 10.9531L10.5372 10.1031C11.0059 9.63431 11.3965 9.24993 11.4059 9.24993C11.4153 9.24993 12.0028 9.83118 12.7153 10.5437Z" />
                      <path d="M10.6937 3.08129C10.15 3.26566 9.775 3.63441 9.5875 4.16879C9.5125 4.38441 9.5 4.47191 9.5 4.75004C9.5 5.26254 9.65625 5.64691 10.0031 5.99691C10.575 6.57191 11.5219 6.67191 12.2031 6.23441C12.5469 6.01566 12.7875 5.70316 12.9219 5.30316C13.0344 4.96879 13.0344 4.53129 12.9219 4.19691C12.7344 3.64066 12.3219 3.23441 11.7687 3.06566C11.4531 2.96879 11 2.97504 10.6937 3.08129ZM11.525 4.08129C12.0031 4.27816 12.1219 4.91566 11.7469 5.27191C11.2875 5.70629 10.5312 5.38441 10.5312 4.75004C10.5312 4.46566 10.6781 4.22816 10.9375 4.09066C11.075 4.01879 11.3656 4.01254 11.525 4.08129Z" />
                   </svg>
                   Gallery
                </button>

             </div>
             <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-information" role="tabpanel" aria-labelledby="v-pills-information-tab">
                   <div class="tour-information">

                      <ul class="tour-info-metalist">
                         <li>
                            <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                               <path d="M14 7C14 8.85652 13.2625 10.637 11.9497 11.9497C10.637 13.2625 8.85652 14 7 14C5.14348 14 3.36301 13.2625 2.05025 11.9497C0.737498 10.637 0 8.85652 0 7C0 5.14348 0.737498 3.36301 2.05025 2.05025C3.36301 0.737498 5.14348 0 7 0C8.85652 0 10.637 0.737498 11.9497 2.05025C13.2625 3.36301 14 5.14348 14 7ZM7 3.0625C7 2.94647 6.95391 2.83519 6.87186 2.75314C6.78981 2.67109 6.67853 2.625 6.5625 2.625C6.44647 2.625 6.33519 2.67109 6.25314 2.75314C6.17109 2.83519 6.125 2.94647 6.125 3.0625V7.875C6.12502 7.95212 6.14543 8.02785 6.18415 8.09454C6.22288 8.16123 6.27854 8.2165 6.3455 8.25475L9.408 10.0048C9.5085 10.0591 9.62626 10.0719 9.73611 10.0406C9.84596 10.0092 9.93919 9.93611 9.99587 9.83692C10.0525 9.73774 10.0682 9.62031 10.0394 9.50975C10.0107 9.39919 9.93982 9.30426 9.842 9.24525L7 7.62125V3.0625Z" />
                            </svg>
                            {{$Ex->duration}}
                         </li>
                         <li>
                            <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                               <path d="M7 7C7.92826 7 8.8185 6.63125 9.47487 5.97487C10.1313 5.3185 10.5 4.42826 10.5 3.5C10.5 2.57174 10.1313 1.6815 9.47487 1.02513C8.8185 0.368749 7.92826 0 7 0C6.07174 0 5.1815 0.368749 4.52513 1.02513C3.86875 1.6815 3.5 2.57174 3.5 3.5C3.5 4.42826 3.86875 5.3185 4.52513 5.97487C5.1815 6.63125 6.07174 7 7 7ZM14 12.8333C14 14 12.8333 14 12.8333 14H1.16667C1.16667 14 0 14 0 12.8333C0 11.6667 1.16667 8.16667 7 8.16667C12.8333 8.16667 14 11.6667 14 12.8333Z" />
                            </svg>
                            Max People : flexible
                         </li>
                         <li>
                            <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M14 0.43748C14 0.372778 13.9856 0.308889 13.9579 0.250418C13.9302 0.191947 13.8898 0.140348 13.8398 0.0993396C13.7897 0.0583312 13.7312 0.0289339 13.6684 0.0132656C13.6057 -0.00240264 13.5402 -0.00395173 13.4768 0.00872996L9.1875 0.86623L4.89825 0.00872996C4.84164 -0.00258444 4.78336 -0.00258444 4.72675 0.00872996L0.35175 0.88373C0.252608 0.903546 0.163389 0.957088 0.099263 1.03525C0.0351366 1.11342 6.10593e-05 1.21138 0 1.31248L0 13.5625C3.90711e-05 13.6272 0.0144289 13.6911 0.0421328 13.7495C0.0698367 13.808 0.110165 13.8596 0.160212 13.9006C0.210259 13.9416 0.268779 13.971 0.331556 13.9867C0.394332 14.0024 0.459803 14.0039 0.52325 13.9912L4.8125 13.1337L9.10175 13.9912C9.15836 14.0025 9.21664 14.0025 9.27325 13.9912L13.6482 13.1162C13.7474 13.0964 13.8366 13.0429 13.9007 12.9647C13.9649 12.8865 13.9999 12.7886 14 12.6875V0.43748ZM4.375 12.3287V0.97123L4.8125 0.88373L5.25 0.97123V12.3287L4.89825 12.2587C4.84165 12.2474 4.78335 12.2474 4.72675 12.2587L4.375 12.3287ZM8.75 13.0287V1.67123L9.10175 1.74123C9.15836 1.75254 9.21664 1.75254 9.27325 1.74123L9.625 1.67123V13.0287L9.1875 13.1162L8.75 13.0287Z" />
                            </svg>
                            {{$Ex->location}}
                         </li>
                      </ul>
                      <p>
                        {!!html_entity_decode($Ex->content)!!}

                        <br><br>

                            <p>
                                Each of our meticulously curated tour packages ensures a personalized experience with a diverse range of accommodation options. Whether you prefer the opulence of a <span style="font-weight: bold; color: #FFD700;">luxurious</span> stay, the cozy embrace of <span style="font-weight: bold; color: #32CD32;">comfort</span>, or the practicality of an <span style="font-weight: bold; color: #4682B4;">economical</span> choice, we cater to your distinct preferences. Our commitment to providing a spectrum of lodging alternatives allows you to tailor your journey according to your individual taste and budget, ensuring that every aspect of your trip aligns perfectly with your expectations and desires.

                            </p>
                      </p>
                   </div>
                </div>
                <div class="tab-pane fade" id="v-pills-plan" role="tabpanel" aria-labelledby="v-pills-plan-tab">
                   <div class="tour-plan">
                      <h3 class="tour-details-subtitle">Itinery</h3>
                      <?php
                            $Itinery = DB::table('itineries')->where('product_id',$Ex->id)->get();
                            $num = 1;
                      ?>
                      @foreach ($Itinery as $it)
                      <div class="tour-plan-single">
                        <div class="plan-serial">
                           <span>0{{$num}}</span>
                        </div>
                        <div class="plan-content">
                           <h4 class="plan-title">{{$it->day}}</h4>
                           <p>
                            {!!html_entity_decode($it->content)!!}
                           </p>
                        </div>
                     </div>
                     <?php $num = $num+1; ?>
                      @endforeach
                   </div>
                </div>

                <div class="tab-pane fade" id="v-pills-gallery" role="tabpanel" aria-labelledby="v-pills-gallery-tab">
                   <div class="tour-gallery-wrap">
                      <h3 class="tour-details-subtitle">{{$Ex->title}} Gallery</h3>
                      <div class="row g-4 justify-content-center">
                         <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4 col-6">
                            @if($Ex->image_one == "0" OR $Ex->image_one == null)

                            @else
                                <div class="tour-gallery">
                                    <a href="{{url('/')}}/uploads/experiences/{{$Ex->image_one}}" class="image-open">
                                      <img src="{{url('/')}}/uploads/experiences/{{$Ex->image_one}}" class="img-fluid" alt="image">
                                    </a>
                                </div>
                            @endif




                            @if($Ex->image_four == "0" OR $Ex->image_four == null)

                            @else
                                <div class="tour-gallery">
                                    <a href="{{url('/')}}/uploads/experiences/{{$Ex->image_four}}" class="image-open">
                                      <img src="{{url('/')}}/uploads/experiences/{{$Ex->image_four}}" class="img-fluid" alt="image">
                                    </a>
                                </div>
                            @endif

                         </div>
                         <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4 col-6">
                            @if($Ex->image_two == "0" OR $Ex->image_two == null)

                            @else
                                <div class="tour-gallery">
                                    <a href="{{url('/')}}/uploads/experiences/{{$Ex->image_two}}" class="image-open">
                                      <img src="{{url('/')}}/uploads/experiences/{{$Ex->image_two}}" class="img-fluid" alt="image">
                                    </a>
                                </div>
                            @endif

                            @if($Ex->image_five == "0" OR $Ex->image_five == null)

                            @else
                                <div class="tour-gallery">
                                    <a href="{{url('/')}}/uploads/experiences/{{$Ex->image_two}}" class="image-open">
                                      <img src="{{url('/')}}/uploads/experiences/{{$Ex->image_two}}" class="img-fluid" alt="image">
                                    </a>
                                </div>
                            @endif

                         </div>
                         <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-4 col-6">
                            @if($Ex->image_three == "0" OR $Ex->image_three == null)

                            @else
                                <div class="tour-gallery">
                                    <a href="{{url('/')}}/uploads/experiences/{{$Ex->image_three}}" class="image-open">
                                      <img src="{{url('/')}}/uploads/experiences/{{$Ex->image_three}}" class="img-fluid" alt="image">
                                    </a>
                                </div>
                            @endif

                            @if($Ex->image_six == "0" OR $Ex->image_six == null)

                            @else
                                <div class="tour-gallery">
                                    <a href="{{url('/')}}/uploads/experiences/{{$Ex->image_six}}" class="image-open">
                                      <img src="{{url('/')}}/uploads/experiences/{{$Ex->image_six}}" class="img-fluid" alt="image">
                                    </a>
                                </div>
                            @endif

                         </div>
                      </div>
                   </div>
                </div>
                <div class="tab-pane fade" id="v-pills-review" role="tabpanel" aria-labelledby="v-pills-review-tab">
                   <div class="tour-review-area">
                      <h3 class="tour-details-subtitle">Astrip Client Review</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <div class="review-progress-box">
                         <div class="row g-4 align-items-center">
                            <div class="col-md-5">
                               <div class="tour-review-number">
                                  <span>08.00</span>
                                  <h2>Excellent</h2>
                               </div>
                            </div>
                            <div class="col-md-7">
                               <div class="progress-singl">
                                  <span>Overall</span>
                                  <i class="progress-bar" style="--progress: 95%">95%</i>
                               </div>
                               <div class="progress-singl">
                                  <span>Accommodation</span>
                                  <i class="progress-bar" style="--progress: 99%">99%</i>
                               </div>
                               <div class="progress-singl">
                                  <span>Transport</span>
                                  <i class="progress-bar" style="--progress: 80%">80%</i>
                               </div>
                               <div class="progress-singl">
                                  <span>Food</span>
                                  <i class="progress-bar" style="--progress: 95%">95%</i>
                               </div>
                               <div class="progress-singl">
                                  <span>Destination</span>
                                  <i class="progress-bar" style="--progress: 75%">75%</i>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="review-commetn-area">
                         <ul class="review-comment-list">
                            <li>
                               <div class="comment-item">
                                  <div class="image">
                                     <img src="{{asset('theme/assets/images/blog/blog-comment1.png')}}" alt="image">
                                  </div>
                                  <div class="content">
                                     <div class="comment-meta">
                                        <h5>Loretta Shelton -</h5>
                                        <span>25 January, 2022</span>
                                     </div>
                                     <p>Lorem Ipsn gravida nibh vel velit auctor aliquet.Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus a sit amet mauris.Praesent explicari id eum.</p>
                                     <ul class="review-item-list">
                                        <li>
                                           <span>Overall</span>
                                           <ul class="star-list">
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-half"></i></li>
                                           </ul>
                                        </li>
                                        <li>
                                           <span>Transport</span>
                                           <ul class="star-list">
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-half"></i></li>
                                           </ul>
                                        </li>
                                        <li>
                                           <span>Food</span>
                                           <ul class="star-list">
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-half"></i></li>
                                           </ul>
                                        </li>
                                        <li>
                                           <span>Destination</span>
                                           <ul class="star-list">
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-half"></i></li>
                                           </ul>
                                        </li>
                                        <li>
                                           <span>Hospitality</span>
                                           <ul class="star-list">
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-half"></i></li>
                                           </ul>
                                        </li>
                                     </ul>
                                  </div>
                               </div>
                            </li>
                            <li>
                               <div class="comment-item">
                                  <div class="image">
                                     <img src="{{asset('theme/assets/images/blog/blog-comment3.png')}}" alt="image">
                                  </div>
                                  <div class="content">
                                     <div class="comment-meta">
                                        <h5>Darrell Steward -</h5>
                                        <span>25 August, 2022</span>
                                     </div>
                                     <p>Lorem Ipsn gravida nibh vel velit auctor aliquet.Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus a sit amet mauris.Praesent explicari id eum.</p>
                                     <ul class="review-item-list">
                                        <li>
                                           <span>Overall</span>
                                           <ul class="star-list">
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-half"></i></li>
                                           </ul>
                                        </li>
                                        <li>
                                           <span>Transport</span>
                                           <ul class="star-list">
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-half"></i></li>
                                           </ul>
                                        </li>
                                        <li>
                                           <span>Food</span>
                                           <ul class="star-list">
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-half"></i></li>
                                           </ul>
                                        </li>
                                        <li>
                                           <span>Destination</span>
                                           <ul class="star-list">
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-half"></i></li>
                                           </ul>
                                        </li>
                                        <li>
                                           <span>Hospitality</span>
                                           <ul class="star-list">
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-fill"></i></li>
                                              <li><i class="bi bi-star-half"></i></li>
                                           </ul>
                                        </li>
                                     </ul>
                                  </div>
                               </div>
                            </li>
                         </ul>
                      </div>
                      <div class="review-form-area">
                         <h3 class="tour-details-subtitle">Write a review:</h3>
                         <div class="contact-from-wrapper">
                            <form>
                               <div class="row">
                                  <div class="col-lg-6">
                                     <div class="form-inner">
                                        <input type="text" placeholder="Your Name:">
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="form-inner">
                                        <input type="text" placeholder="Your Phone Number:">
                                     </div>
                                  </div>
                                  <div class="col-lg-12">
                                     <div class="form-inner">
                                        <input type="text" placeholder="Type Your Subject:">
                                     </div>
                                  </div>
                                  <div class="col-lg-12">
                                     <div class="form-inner">
                                        <textarea name="message" rows="5" placeholder="Write Your Question"></textarea>
                                     </div>
                                  </div>
                                  <div class="col-lg-12">
                                     <div class="star-rating-wrapper">
                                        <ul class="star-rating-list">
                                           <li>
                                              <div class="rating-container" data-rating="0">
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                              </div>
                                              <span>Overall</span>
                                           </li>
                                           <li>
                                              <div class="rating-container" data-rating="0">
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                              </div>
                                              <span>Transport</span>
                                           </li>
                                           <li>
                                              <div class="rating-container" data-rating="0">
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                              </div>
                                              <span>Food</span>
                                           </li>
                                           <li>
                                              <div class="rating-container" data-rating="0">
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                              </div>
                                              <span>Destination</span>
                                           </li>
                                           <li>
                                              <div class="rating-container" data-rating="0">
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                                 <i class="bi bi-star-fill star-icon"></i>
                                              </div>
                                              <span>Hospitality</span>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="col-lg-12">
                                     <button type="submit" class="eg-btn btn--primary btn--lg submit-btn">Submit Now</button>
                                  </div>
                               </div>
                            </form>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="booking-form-box">
                <h3>Book the Tour</h3>
                <p>Arrange your trip in advance - book this tour now!</p>
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
                   <div class="search-box-single">
                    <div class="searchbox-icon">
                       <i class="bi bi-map-marker"></i>
                    </div>
                    <div class="searchbox-input">
                       <input type="text" placeholder="Country *">
                    </div>
                 </div>
                   <div class="search-box-single">
                      <div class="searchbox-icon">
                         <i class="bi bi-chat-left-text-fill"></i>
                      </div>
                      <div class="searchbox-input">
                         <textarea name="message3" rows="6" placeholder="Your Enquiry*"></textarea>
                      </div>
                   </div>
                   <button class="eg-btn btn--primary btn--lg w-100 mt-3">BOOK NOW</button>
                </form>
             </div>

          </div>
       </div>
    </div>
 </div>
{{--  --}}
@endforeach
@endsection
