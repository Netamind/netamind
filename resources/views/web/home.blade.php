<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->

    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title> Netamind Technology : Prominent IT Services Provider </title>


    <link rel="shortcut icon" href="frontend-assets/images/icons/favicon.svg" type="image/x-icon" >

        
    <!-- Bootstrap Cdn -->
    <link cache-files="cached" rel="stylesheet"  href="frontend-assets/libraries/css/bootstrap.css" media="all">
    <link cache-files="cached" rel="stylesheet"  href="frontend-assets/libraries/css/swiperBundle.css" media="all">
    <!-- Page Css -->


    
    <link rel="stylesheet"  href="frontend-assets/libraries/css/flatepicker.css" media="all">
    <link rel="stylesheet"  href="frontend-assets/css/feedbackSelector.css" media="all">
    <link rel="stylesheet"  href="frontend-assets/css/globalStyle.css" media="all">
    <link rel="stylesheet"  href="frontend-assets/css/homeResponsive.css" media="all">
      

    

        <style id="custom-style">
        .meet-column {
            padding-right: 2px !important;
        }
        .backgrpound-video{
            opacity: 0;
        }
        .form-area {
            background-color: #fff;
            box-shadow: 0px 5px 10px rgba(90, 116, 148, 0.3);
            padding: 40px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-area .form-inner {
            width: 100%;
        }

        .hero-section .main-heading,
        .hero-section .custom-software {
            position: relative;
            z-index: 4;
        }

        .form-control:focus {
            color: #475F7B;
            background-color: #FFF;
            border-color: #5A8DEE;
            outline: 0;
            box-shadow: 0 3px 8px 0 rgb(0 0 0 / 10%);
        }

        .cursor-pointer:hover {
            cursor: pointer;
        }

        .custom-position {

            position: absolute;
            top: 50%;
            left: 45%;
        }

        .wave-btn {
            cursor: pointer;
            position: relative;
            z-index: 3;
        }

        .wave-btn.clicked {
            animation: shadowFadeOut 200ms ease-out forwards infinite,
                shadowFadeIn 200ms 300ms ease-in forwards infinite;
        }

        .wave {
            z-index: 1;
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 70%;
            box-shadow: 1px 1px 5px rgba(255, 255, 255, 0.1), -1px -1px 5px rgba(255, 255, 255, 0.1);
            opacity: 0;
            animation: fadeIn 400ms ease-out forwards, outside_grow 5s ease-out,
                fadeOut 3s 2s forwards;
            background-color: transparent;
            bottom: 65px;
            left: 100px;
            transform: rotate(-10deg);
            clip-path: polygon(30% 0%, 39% 0, 100% 0, 100% 70%, 70% 100%, 52% 100%, 53% 47%, 0% 30%);
        }

        .wave::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 0px;
            height: 0px;
            border-radius: 70%;
            box-shadow: inset 5px 5px 30px rgba(255, 255, 255, 0.2), inset -5px -5px 30px rgba(255, 255, 255, 0.2);
            animation: inside_grow 5s ease-out;
            /* bottom: 100%; */
        }

        #waveContainer {
            transform: rotate(30deg);
            position: absolute;
            top: 100%;
            z-index: 1;
        }

        .wave::before {
            content: "";
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 2;
        }

        @keyframes outside_grow {
            from {
                width: 20px;
                height: 20px;
            }

            to {
                width: 600px;
                height: 600px;
            }
        }

        /** This one is ugly too */
        @keyframes inside_grow {
            from {
                width: 0px;
                height: 0px;
            }

            to {
                width: 580px;
                height: 580px;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        .swal2-title {
            font-size: 2rem;
            line-height: 3rem;
            font-weight: 400;
            color: #000;
        }

        .swal2-popup {
            max-width: 440px !important;
            width: 100% !important;
            padding-top: 2rem !important;
            padding-bottom: 4rem !important;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .swal2-confirm.swal2-styled {
            padding: 1rem 2.5rem;
            background-color: #005BAA;
            border: 1px solid #005BAA;
            box-shadow: none !important;
            outline: none;
            font-size: 1.8rem;
            line-height: 2.4rem;
            font-weight: 400;
            color: #FFF;
            transition: all .5s ease;
            transition-property: background-color, color;
        }

        .swal2-confirm.swal2-styled:hover {
            background-color: #ffffff !important;
            color: #005BAA;
            background-image: none !important;
        }

        .backgrpound-video {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0;
            transition: all 0.3s ease;
            transition-property: opacity;
        }

        .backgrpound-video::before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(0deg, rgba(10, 37, 64, 0.90) -26%, rgba(10, 37, 64, 0.27) 144.93%);
        }

        .backgrpound-video video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .meet-column .btn.sw-btn-prev.go-to-prev {
            width: 41.5px;
            height: 41.5px;
            border-radius: 50%;
            border: 1px solid var(--blueshade);
            background-color: transparent;
            margin: 0;
            padding: 0;
            outline: 0
        }

        .calender-container .meet-header .btn.sw-btn-prev.go-to-prev:active,
        .calender-container .meet-header .btn.sw-btn-prev.go-to-prev:focus,
        .meet-column .btn.sw-btn-prev.go-to-prev:active,
        .meet-column .btn.sw-btn-prev.go-to-prev:focus {
            box-shadow: 0 !important;
            outline: 0
        }

        .sw>.tab-content {
            /* min-height: 564px !important; */
            min-height: 634px !important;
        }

        .tab-content .tab-pane {
            position: absolute;
            width: 100%;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            transition: all 0s ease;
            transition-property: left;
            background: #f2f7fb !important;
        }

        .select2-container--default .select2-results>.select2-results__options {
            scrollbar-width: none;
        }

        .select2-container--default .select2-results>.select2-results__options::-webkit-scrollbar {
            width: 0;
            height: 0;
        }


        .smart-wizard .swiper-slide {
            height: fit-content !important;
        }

        .mobile-responsive-wizard {
            display: none;
        }

        .excellence-cards {
            display: grid;
            grid-template-columns: repeat(6, auto);
            row-gap: 5.1rem;
            column-gap: 3.8rem;
        }

        .excellence-cards .excellence img {
            max-width: 100% !important;
            height: auto !important;
            object-fit: contain;
        }

        .clientsSwiper {
            transform: translate3d(0, 0, 0);
            backface-visibility: hidden;
        }

        .clientsSwiper .swiper-wrapper {
            -webkit-transition-timing-function: linear !important;
            -o-transition-timing-function: linear !important;
            transition-timing-function: linear !important;
        }

        .clientsSwiper .swiper-wrapper .swiper-slide {
            width: fit-content !important;
        }

        .clientsSwiper.excellence-carosoul {
            display: none;
        }

        @media screen and (max-width: 991px) {

            .mobile-responsive-wizard {
                display: block;
            }

            .smart-wizard .detail-form {
                border: none;
            }

            .sw>.tab-content {
                min-height: unset !important;
            }

            .attribute-to-team {
                padding: 1.2rem 2.5rem;
                font-size: 2rem;
            }

            .smart-wizard .swiper-wrapper {
                height: 556px;
            }

            .shedul-call-sec {
                padding-bottom: 4.3rem;
            }

            .smart-wizard .swiper-slide:nth-child(2) {
                min-height: 465px !important;
            }

            .smart-wizard .swiper-slide:first-child {
                min-height: 554px !important;
            }

            .smart-wizard .swiper-slide:nth-child(3) {
                min-height: 822px !important;
            }

            .excellence-cards {
                grid-template-columns: repeat(5, auto);
            }


        }

        @media screen and (max-width: 768px) {
            .excellence-cards {
                grid-template-columns: repeat(3, auto);
            }
        }

        @media screen and (max-width: 550px) {

            /* .tab-content .tab-pane:last-child{
                                min-height: 750px;
                            } */

        }

        @media screen and (max-width: 520px) {

            .wave {
                transform: translateX(-50%) rotate(-50deg);
                left: 110px;
            }

            .detail-form .enter-details {
                margin-top: 3rem !important;
            }

            /* .tab-content .tab-pane:last-child{
                                min-height: 750px;
                            } */
            /* .tab-content .tab-pane:last-child{
                                min-height: 750px;
                            } */
            .select2-container {
                z-index: 700 !important;
            }

            .smart-wizard .swiper-wrapper {
                height: 425px;
            }

            .smart-wizard .swiper-slide:first-child {
                min-height: 425px !important;
            }

            .smart-wizard .swiper-slide:nth-child(2) {
                min-height: 425px !important;
            }

            .smart-wizard .swiper-slide:nth-child(3) {
                min-height: 730px !important;
            }

            .clientsSwiper.excellence-carosoul {
                display: block;
            }

            .excellence-cards {
                display: none;
            }

        }

        @media screen and (max-width: 425px) {
            .select2-container--open .select2-dropdown {
                width: 270px !important;
                left: -58px !important;
            }
        }

        @media screen and (max-width: 375px) {
            .smart-wizard .swiper-slide:nth-child(2) {
                min-height: 432px !important;
            }

            .smart-wizard .swiper-slide:nth-child(3) {
                min-height: 742px !important;
            }

        }

        .iti-mobile .intl-tel-input.iti-container {
            z-index: 1 !important;
        }

        .mobile-responsive-wizard .tab-pane {
            background: #F2F7FB !important;
        }
    </style>
    <!-- Page Css End-->

    <!-- Custom Css -->
    

    <!-- Custom Css Ends-->


  <style>


.main-testi{
        background-image: url(frontend-assets/images/testimonial-bg.webp);
        /* padding: 50px; */
        background-repeat: no-repeat;
        background-size: 100% 100%;
        /* margin-bottom: 80px; */
    }
    .testi-content{
      padding: 93px 0 93px 0;
      gap: 30px;
      justify-content: space-between;
    }
    .teti-text{
      width: 100%;
      max-width: 660px;
    }
    .teti-text .zapta-team-p{
      font-size: 20px;
      font-weight: 500;
      color: white;
      line-height: 32px;

    }
    .testi-img{
      width: 100%;
      max-width: 412px;

    }
    .testi-img img{
      width: 100%;
    }
    .teti-text .redha-client{
      padding-top: 30px;
      font-size: 26px;
      font-weight: 500;
      line-height: 32px;
      color: white;

    }
    .teti-text .legal-p{
      font-size: 18px;
      font-weight: 400;
      color: white;
      line-height: 28px;
    }
    @media screen and (max-width: 991px) {

      .main-testi{
        background-size: cover;
    }
      .testi-content{
      padding: 113px 0 93px 0;
      flex-wrap: wrap-reverse;
      justify-content: center;
    }
}
.customError{
  font-size: 1.2rem !important;
}
.services-wraper .text-checkbox {
  padding-left: 1rem;
    padding-right: 1rem;
    border: 1px solid #636363;
    border-radius: 2rem;
    font-size: 1.4rem;
    line-height: 3rem;
    font-weight: 600;
    color: #636363;
    cursor: default;
}
.services-wraper .text-checkbox:has(input[type=checkbox]:checked){
  color: var(--white) !important;
    background-color: var(--primaryblue4);
    border: 1px solid var(--primaryblue4);

}
.services-wraper .text-checkbox:has(input[type=checkbox]:checked) span{
  color: var(--white) !important;

}

.services-wraper .text-checkbox input{
  display: none;
}
  .zapta-loader {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000;
}
.loader-loading {
  height: 170px;
  width: 170px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 6px solid #ccc;
  border-right-color: #005BAA;
  border-radius: 50%;
  -webkit-animation: rotate 1s infinite linear;
}

@-webkit-keyframes rotate {
  100% {
    -webkit-transform: rotate(360deg);
  }
}

.absolute-logo{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.upload-document label.error {
            bottom: unset !important;
        }
   </style>
    
  </head>
  <body>

<div class="zapta-loader">
      <div class="position-relative" style="height: 170px; width:170px;transform:scale(0.7);">
       <div class="loader-loading"></div>

       <img src="images/Netaicon.png" alt="" class="absolute-logo" style="width:80px">
       




      </div>
    </div>


<!-- Navigation / Header  -->

<header class="nav-bar  " style="background-color:white">
    <div class="container" style="position: relative;">
      <div class="zapta-navbar">
      
        <a href="/" aria-label="navigation">
        <img src="images/NetaLogo.png" alt="" style="width:150px"> 
        </a>

        <div class="nav-items">
          <a href="index.html" class="nav-link active text-primary" >Home</a>
          <a href="about-us.html" class="nav-link " style="color:black">About Us</a>
          <a href="services.html" class="nav-link " style="color:black">Services</a>
          <a href="projects.html" class="nav-link " style="color:black">Projects</a>
          <a href="blogs.html" class="nav-link " style="color:black">Blogs</a>
          <a href="https://career.zaptatech.com/job-openings" class="nav-link" style="color:black">Careers</a>
          <a href="contact-us.html" class="nav-link nav-btn component-btn">Contact Us</a>
        </div>
        
        <svg id="nav-toggler" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"  data-bs-toggle="offcanvas" data-bs-target="#navTogglerCanvas" aria-controls="navTogglerCanvas">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M3.00012 8.67188V6.67188H21.0001V8.67188H3.00012ZM3.00012 13.6719H21.0001V11.6719H3.00012V13.6719ZM3.00012 18.6719H21.0001V16.6719H3.00012V18.6719Z" fill="#005BAA"/>
        </svg>
      </div>
    </div>
  </header>


  <!-- Mobile menu -->


<div class="offcanvas offcanvas-end" id="navTogglerCanvas" aria-labelledby="navTogglerCanvasLabel" style="width: fit-content;">
  <div class="mobile-menu">
      <button type="button" class="btnClose border-0 bg-transparent"data-bs-dismiss="offcanvas" aria-label="Close">

        <span style="font-size:15px">X</span>
      
      </button>
      <a href="index.html" aria-label="navigation" class="mb-3">
   
      <img src="images/NetaLogo.png"    class="zapta-logo" alt="" style="width:150px">
       
      </a>
      <a href="index.html" class="nav-link active">Home</a>
      <a href="about-us.html" class="nav-link ">About Us</a>
      <a href="services.html" class="nav-link ">Services</a>
      <a href="projects.html" class="nav-link ">Projects</a>
      <a href="blogs.html" class="nav-link ">Blogs</a>
      <a href="https://career.zaptatech.com/job-openings" class="nav-link">Careers</a>
      <a href="contact-us.html" class="nav-link nav-btn">Contact Us</a>
  </div>
</div>



<!-- Content Wrapper -->

    <!-- ********** Hero Section Start ********** -->
<section class="hero-section position-relative overflow-hidden" style=" background-image: url('images/home2.jpg')">
        <div class="container" >
            <div class="content">
                <div class="main-heading">
                    <p class="zone">We provide</p>
                    <p class="plate-form">Prominent IT Services </p>
                    <p class="tech">And Tech Applications</p>
                </div>
                <p class="custom-software">
                    Custom Software Design & Development
                
            </p>
                <div class="position-relative">
                    <a class="consultaion-btn hover-effect wave-btn clicked" id="consultToZapta">
                        Read our story 
                    </a>
                </div>

            </div>
        </div>
        
    </section>






    <section class="do-cards-sec">
        <div class="container">
            <h1 class="we-doHeading mx-auto  mb-0" style="max-width:800px;text-align:center">Explore <span>Our Services</span></h1>
           
           <p class="one-line-text text-center pbottom-60">
               
            </p>



            <div class="do-card-wraper">
                
              <!-- Card 1 -->
              <a href="services/ui-ux-design.html" class="do-card">
                    <img width="60" height="60" src="frontend-assets/images/icons/ui-icon.svg"
                        alt="UI icon" loading="lazy" defer>
                    <h2 class="cardTitle">UI UX Design</h2>
                    <p class="card-text">Crafting a data-driven and user centered UI UX design to provide the greatest user
                        experience and satisfaction.</p>
                </a>



        
              
                <!-- Card 2 -->
                <a href="services/web-development.html" class="do-card">
                    <img width="60" height="60" src="frontend-assets/images/icons/web-icon.svg"
                        alt="UI icon" loading="lazy" defer>
                    <h2 class="cardTitle">Web Development</h2>
                    <p class="card-text">Achieve business objectives and build a strong online presence by our web
                        development solutions for customers.</p>
                </a>

                <!-- Card 3 -->
                <a href="services/mobile-development.html" class="do-card">
                    <img width="60" height="60" src="frontend-assets/images/icons/mobile-icon.svg"
                        alt="UI icon" loading="lazy" defer>
                    <h2 class="cardTitle">Mobile Development</h2>
                    <p class="card-text">Well-engineered, AI-driven native and hybrid applications for all your business
                        needs with a seamless experience.</p>
                </a>

                <!-- Card 4 -->
                <a href="services/quality-assurance.html" class="do-card">
                    <img width="60" height="60" src="frontend-assets/images/icons/Quality.svg"
                        alt="UI icon" loading="lazy" defer>
                    <h2 class="cardTitle">Quality Assurance</h2>
                    <p class="card-text">Providing well-tested and bug-free web and mobile apps, ensuring high-quality and
                        the best user experience.</p>
                </a>

                <!-- Card 5 -->
                <a href="services/mvp-builder.html" class="do-card">
                    <img width="60" height="60" src="frontend-assets/images/icons/mvp-builder.svg"
                        alt="UI icon" loading="lazy" defer>
                    <h2 class="cardTitle">MVP Builder</h2>
                    <p class="card-text">Streamlined MVPs of development expedites the product journey and validates market
                        potential while insuring well engineering.</p>
                </a>

                <!-- Card 6 -->
                <a href="services/dedicated-teams.html" class="do-card">
                    <img width="60" height="60" src="frontend-assets/images/icons/teams.svg"
                        alt="UI icon" loading="lazy" defer>
                    <h2 class="cardTitle">Dedicated Teams</h2>
                    <p class="card-text">Onboard our dedicated designers, developers and skilled engineers on a full-time
                        basis to achieve your business objectives.</p>
                </a>

               
            </div>
        </div>
    </section>

  
    
    <div class="swiper testiSwiper">
    <div class="swiper-wrapper">
      
      <div class="swiper-slide">
        <div class="main-testi">
            <div class="container">
                <div class="testi-content d-flex align-items-center ">
                    <div class="teti-text">
                      <p class="zapta-team-p" style="text-align: justify">
                        “ZAPTA's meticulous attention to detail and unwavering commitment to deadlines fueled a fantastic project collaboration. Each deliverable exceeded expectations, highlighting their impressive technical skills and creative problem-solving. Their consistent quality output showcases their reliability and deep understanding of the project, making them a true partner, not just a vendor. Bravo, ZAPTA!”
                      </p>
                      <p class="redha-client">Terry Peterson</p>
                      <p class="legal-p">Founder & CEO of DrBroker.com</p>
                    </div>
                   <div class="testi-img video-pop position-relative" data-type="youtube" data-id="aLf9aaMdAiE" data-autoplay='true'>
                        <img src="images/NetaLogo.png"  alt="">
                       
                    </div>
                </div>
            </div>
        </div>
      </div>
      
     
    </div>
    <div class="swiper-pagination"></div>
  </div>




    <section class="studies-section position-relative pt-6 " >
        <div class="container">
            <h2 class="we-doHeading mb-0">Our <span>Previous work</span></h2>
            <p class="one-line-text pbottom-60">Preferred by Entrepreneurs and Business Innovators.</p>
            <div class="excellence-cards">
                <a href="https://clutch.co/profile/zapta-technologies#highlights" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="117" height="158"
                        src="frontend-assets/images/awards/top-clutch-1.webp" alt="Top cluth award">
                </a>

                <a href="https://clutch.co/profile/zapta-technologies#highlights" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="146" height="158"
                        src="frontend-assets/images/awards/top-clutch-2.webp" alt="Top cluth award">
                </a>

                <a href="https://clutch.co/profile/zapta-technologies#highlights" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="146" height="158"
                        src="frontend-assets/images/awards/top-clutch-3.webp" alt="Top cluth award">
                </a>

                <a href="https://clutch.co/profile/zapta-technologies#highlights" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="146" height="158"
                        src="frontend-assets/images/awards/top-clutch-4.webp" alt="Top cluth award">
                </a>

                <a href="https://clutch.co/profile/zapta-technologies#highlights" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="146" height="158"
                        src="frontend-assets/images/awards/top-clutch-5.webp" alt="Top cluth award">
                </a>

                <a href="https://clutch.co/profile/zapta-technologies#highlights" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="146" height="158"
                        src="frontend-assets/images/awards/top-clutch-6.webp" alt="Top cluth award">
                </a>

                <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="179" height="148"
                        src="frontend-assets/images/awards/banner-award-1.webp" alt="Banner award">
                </a>

                <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="179" height="147"
                        src="frontend-assets/images/awards/banner-award-2.webp" alt="Banner award">
                </a>

                <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="175" height="144"
                        src="frontend-assets/images/awards/banner-award-3.webp" alt="Banner award">
                </a>

                <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="182" height="126"
                        src="frontend-assets/images/awards/banner-award-4.webp" alt="Banner award">
                </a>

                <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="182" height="126"
                        src="frontend-assets/images/awards/banner-award-5.webp" alt="Banner award">
                </a>

                <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="182" height="126"
                        src="frontend-assets/images/awards/banner-award-6.webp" alt="Banner award">
                </a>

                <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="164" height="158"
                        src="frontend-assets/images/awards/banner-award-7.webp" alt="Banner award">
                </a>

                <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="164" height="158"
                        src="frontend-assets/images/awards/banner-award-8.webp" alt="Banner award">
                </a>

                <a href="https://www.appfutura.com/companies/zapta-technologies" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="164" height="148"
                        src="frontend-assets/images/awards/appfutura-badge-1.webp" alt="Appfutura badge">
                </a>

                <a href="https://www.appfutura.com/companies/zapta-technologies" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="164" height="148"
                        src="frontend-assets/images/awards/appfutura-badge-2.webp" alt="Appfutura badge">
                </a>

                <a href="https://www.appfutura.com/companies/zapta-technologies" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="164" height="148"
                        src="frontend-assets/images/awards/appfutura-badge-3.webp" alt="Appfutura badge">
                </a>

                <a href="https://trusteditfirms.com/company/zapta-technologies-2/" target="_blank"
                    class="excellence d-flex justify-content-center align-items-center">
                    <img width="167" height="148"
                        src="frontend-assets/images/awards/trusted-it-firm-1.webp" alt="Trusted-It-Firm">
                </a>

            </div>
            <div class="swiper clientsSwiper excellence-carosoul">
                
                <div class="swiper-wrapper align-items-center">

                    <a href="https://clutch.co/profile/zapta-technologies#highlights" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="117" height="158"
                            src="frontend-assets/images/awards/top-clutch-1.webp" alt="Top cluth award">
                    </a>
                    <a href="https://clutch.co/profile/zapta-technologies#highlights" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="146" height="158"
                            src="frontend-assets/images/awards/top-clutch-2.webp" alt="Top cluth award">
                    </a>

                    <a href="https://clutch.co/profile/zapta-technologies#highlights" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="146" height="158"
                            src="frontend-assets/images/awards/top-clutch-3.webp" alt="Top cluth award">
                    </a>

                    <a href="https://clutch.co/profile/zapta-technologies#highlights" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="146" height="158"
                            src="frontend-assets/images/awards/top-clutch-4.webp" alt="Top cluth award">
                    </a>

                    <a href="https://clutch.co/profile/zapta-technologies#highlights" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="146" height="158"
                            src="frontend-assets/images/awards/top-clutch-5.webp" alt="Top cluth award">
                    </a>

                    <a href="https://clutch.co/profile/zapta-technologies#highlights" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="146" height="158"
                            src="frontend-assets/images/awards/top-clutch-6.webp" alt="Top cluth award">
                    </a>

                    <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="179" height="148"
                            src="frontend-assets/images/awards/banner-award-1.webp" alt="Banner award">
                    </a>

                    <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="179" height="147"
                            src="frontend-assets/images/awards/banner-award-2.webp" alt="Banner award">
                    </a>

                    <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="175" height="144"
                            src="frontend-assets/images/awards/banner-award-3.webp" alt="Banner award">
                    </a>

                    <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="182" height="126"
                            src="frontend-assets/images/awards/banner-award-4.webp" alt="Banner award">
                    </a>

                    <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="182" height="126"
                            src="frontend-assets/images/awards/banner-award-5.webp" alt="Banner award">
                    </a>

                    <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="182" height="126"
                            src="frontend-assets/images/awards/banner-award-6.webp" alt="Banner award">
                    </a>

                    <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="164" height="158"
                            src="frontend-assets/images/awards/banner-award-7.webp" alt="Banner award">
                    </a>

                    <a href="https://techbehemoths.com/company/zapta-technologies" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="164" height="158"
                            src="frontend-assets/images/awards/banner-award-8.webp" alt="Banner award">
                    </a>

                    <a href="https://www.appfutura.com/companies/zapta-technologies" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="164" height="148"
                            src="frontend-assets/images/awards/appfutura-badge-1.webp"
                            alt="Appfutura badge">
                    </a>

                    <a href="https://www.appfutura.com/companies/zapta-technologies" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="164" height="148"
                            src="frontend-assets/images/awards/appfutura-badge-2.webp"
                            alt="Appfutura badge">
                    </a>

                    <a href="https://www.appfutura.com/companies/zapta-technologies" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="164" height="148"
                            src="frontend-assets/images/awards/appfutura-badge-3.webp"
                            alt="Appfutura badge">
                    </a>

                    <a href="https://trusteditfirms.com/company/zapta-technologies-2/" target="_blank"
                        class="swiper-slide text-decoration-none">
                        <img width="167" height="148"
                            src="frontend-assets/images/awards/trusted-it-firm-1.webp"
                            alt="Trusted-It-Firm">
                    </a>


                </div>
            </div>
        </div>
    </section>

<!-- Footer -->
<!-- Get In Touch -->
    <style>
        .services-wraper label span {
            color: #636363 !important;
        }
    </style>
    <section class="getInTouch-sec">
        <div class="container">
            <div class="contect-detail">
                <div class="offices background-image-placeholder">
                    <h2 class="office-h2">Offices</h2>
                    <div>
                        <h3 class="office-county">Pakistan</h3>
                        <a href="https://goo.gl/maps/cN7aP8JwwjECKLhL8" target="_blank" class="office-address">144/2, Block
                            B, Bankers Society Near DHA Phase 4, Lahore, Pakistan</a>
                        
                    </div>

                    <div>
                        <h3 class="office-county">UAE</h3>
                        <a target="_blank" class="office-address" href="https://goo.gl/maps/LMkkiAxv7kUNaHVb8">61-51
                            26B St, Jumeirah - Jumeirah 2 - Dubai - United Arab Emirates</a>
                    </div>

                    <div>
                        <h3 class="office-county">UK</h3>
                        <a target="_blank" class="office-address" href="https://goo.gl/maps/K4hbC5jfN675ZxSj8">West
                            Tower, 371 Deansgate, Manchester M15 4UP, United Kingdom</a>
                    </div>
                    <div>
                        <h3 class="office-county">Saudi Arabia</h3>
                        <a target="_blank" class="office-address" href="https://maps.app.goo.gl/XiTzS9mJ97EzgTsc6">8640 Umat Al Karim, 4006, Al Majd District, Yanbu Al Bahr 46431</a>
                    </div>

                </div>
                <form action="https://zaptatech.com/get-in-touch/store" class="get-in-touch global-ajax-submit"
                    id="contactForm" data-success-fn='getInTouchSuccess' data-recaptcha-id="contact"
                    data-error-fn='getInTouchError' data-check-validate="false">
                    <h2 class="we-doHeading mb-0">We’re just a <span>message away!</span></h2>
                    <div class="fields-wrap mt-20">
                        <label class="contact-label">I am looking to</label>
                        <div class="services-wraper d-flex flex-wrap  position-relative" style="gap: 12px;">
                            <label for="new-project" class="text-checkbox">
                                <span class="">Start a new project</span>
                                <input type="checkbox" id="new-project" name="looking_for[]"
                                    value="Start a new project">
                            </label>
                            <label for="revamp-devp" class="text-checkbox">
                                <span class="">Revamp Existing Development</span>
                                <input type="checkbox" id="revamp-devp" name="looking_for[]"
                                    value="Revamp Existing Development">
                            </label>
                            <label for="consultation" class="text-checkbox">
                                <span class="">Consultation</span>
                                <input type="checkbox" id="consultation" name="looking_for[]" value="Consultation">
                            </label>
                            <label for="dedicated-team" class="text-checkbox">
                                <span class="">Dedicated Team</span>
                                <input type="checkbox" id="dedicated-team" name="looking_for[]" value="Dedicated Team">
                            </label>
                            <label class="error" style="font-size: 1.2rem" id="looking_for_error"></label>
                        </div>

                    </div>
                    <div class="postion-relative " style="margin-block: 36px">
                        <label class="contact-label mt-20 d-block">Service I need</label>
                        <div class="services-wraper d-flex flex-wrap position-relative" style="gap: 12px;">
                            <label for="uiux" class="text-checkbox">
                                <span class="">UI UX Design</span>
                                <input type="checkbox" id="uiux" name="services[]" value="UI UX Design">
                            </label>
                            <label for="web-development" class="text-checkbox">
                                <span class="">Web Development</span>
                                <input type="checkbox" id="web-development" name="services[]" value="Web Development">
                            </label>
                            <label for="mobile-development" class="text-checkbox">
                                <span class="">Mobile Development</span>
                                <input type="checkbox" id="mobile-development" name="services[]"
                                    value="Mobile Development">
                            </label>
                            <label for="qa" class="text-checkbox">
                                <span class="">Quality Assurance</span>
                                <input type="checkbox" id="qa" name="services[]" value="Quality Assurance">
                            </label>
                            <label for="mvp-builder" class="text-checkbox">
                                <span class="">MVP Builder</span>
                                <input type="checkbox" id="mvp-builder" name="services[]" value="MVP Builder">
                            </label>
                            <label for="d-team" class="text-checkbox">
                                <span class="">Dedicated Teams</span>
                                <input type="checkbox" id="d-team" name="services[]" value="Dedicated Teams">
                            </label>
                            <label for="h-app" class="text-checkbox">
                                <span class="">Hybrid Applications Development</span>
                                <input type="checkbox" id="h-app" name="services[]"
                                    value="Hybrid Applications Development">
                            </label>
                            <label for="data-analytics" class="text-checkbox">
                                <span class="">Data Analytics</span>
                                <input type="checkbox" id="data-analytics" name="services[]" value="Data Analytics">
                            </label>
                            <label for="sof-automation" class="text-checkbox">
                                <span class="">Software Automation</span>
                                <input type="checkbox" id="sof-automation" name="services[]"
                                    value="Software Automation">
                            </label>
                            <label for="no-code" class="text-checkbox">
                                <span class="">No-Code & Low-Code Development</span>
                                <input type="checkbox" id="no-code" name="services[]"
                                    value="No-Code & Low-Code Development">
                            </label>
                            <label for="ai-application" class="text-checkbox">
                                <span class="">AI Embedded Applications</span>
                                <input type="checkbox" id="ai-application" name="services[]"
                                    value="AI Embedded Applications">
                            </label>
                        </div>
                        <label class="error" style="font-size: 1.2rem" id="services_error"
                            style="bottom: unset !important"></label>

                    </div>
                    <div class="form-detail pt-0 mt-20 d-block">
                        <div class="contact-information-wraper">
                            <div class="fields-wrap">
                                <label for="c_name" class="contact-label">Full Name<span
                                        class="steric">*</span></label>
                                <input class="contact-field" type="text" id="c_name" placeholder="John Deo"
                                    name="name" minlength="2" maxlength="50" required>
                            </div>
                            <div class="fields-wrap">
                                <label for="c_email" class="contact-label">Email<span
                                        class="steric">*</span></label>
                                <input class="contact-field" type="email" id="c_email"
                                    placeholder="example@xyz.com" name="email" required>
                            </div>

                            <div class="budget-selector-main">
                                <div class="fields-wrap">
                                    <label for="c_email" class="contact-label">Estimated Budget<span
                                            class="steric">*</span></label>
                                    <select name="estimated_budget" class="budget-selector w-100" id="c_email">
                                        <option value="" selected>Please Select</option>
                                        <option value="< 5,000 USD">&lt; 5,000 USD</option>
                                        <option value="5,000 USD - 10,000 USD">5,000 USD - 10,000 USD</option>
                                        <option value="10,000 USD - 20,000 USD">10,000 USD - 20,000 USD</option>
                                        <option value="> 20,000 USD">&gt; 20,000 USD</option>
                                    </select>
                                    <input type="text" class="position-absolute bottom-0 opacity-0"
                                        style="z-index: -4" name="selected_budget" id="selectBudget" required>
                                </div>
                            </div>
                        </div>

                        <div class="fields-wrap mt-20">
                            <label for="c_comments" class="contact-label">Message<span
                                    class="steric">*</span></label>
                            <textarea class="contact-field txtarea" name="message" placeholder="Tell us what you’re looking for" id="c_comments"
                                rows="2"></textarea>
                        </div>

                        <div class="d-flex mt-20 gap-2 align-items-center">
                            <input class="dna-checkbox" type="checkbox" id="DNA" value="1"
                                name="dna">
                            <label for="DNA" class="contact-label">This project requires an NDA</label>
                        </div>
                        
                        <div class="fields-wrap mt-5 mb-2">
                            <label for="document" class="contact-label">Upload Document (Optional)</label>
                            <div class="upload-document">
                                <div class="uploadDocument">
                                    <span class="upload-label" id="file-name">Choose file to upload</span>
                                    <span class="upload-label-browse">Browse File</span>
                                </div>
                                <label for="document_file" class="d-none"></label>
                                <input class="form-control" type="file" id="document_file" name="document"
                                    accept=".doc,.docx,.pdf">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="component-btn submit-button hover-effect loader-btn mt-20">Send us a
                        message!</button>
                </form>
            </div>
        </div>
    </section>

    <section class="job-section">
        <div class="container">
            <h2 class="we-doHeading mb-0 pb-0" style="text-align: center !important">Looking for a <span>job</span>
            </h2>
            <a href="https://career.zaptatech.com/" class="component-btn job-button">Apply here</a>
        </div>
    </section>

<!-- Footer Section -->

<footer class="zapta-footer">
    <div class="container">
        <div class="footer-cards">

            <div class="footer-card">
                <a href="index.html" aria-label="NavigationToHome"><img
                        src="frontend-assets/images/icons/footer-logo.svg" loading="lazy"
                        width="150" height="46" alt="fotter logo"></a>
                <p class="footer-content">ZAPTA Technologies is a leading software design and development company
                    working in HealthCare, FinTech, Education, ERP, eCommerce, Compliance Management, Telecommunication,
                    MarketPlace, Logistics and Supply Chain Management domains. We are specialised in AI embedded
                    software solutions and Enterprise Business Solutions.</p>
            </div>

            <div class="footer-card">
                <h2 class="footer-headings">Services</h2>
                <span data-href-value="services/ui-ux-design.html"
                    class="footer-link span-link">UI UX Design</span>
                <span data-href-value="services/web-development.html"
                    class="footer-link span-link">Web Development</span>
                <span data-href-value="services/mobile-development.html"
                    class="footer-link span-link">Mobile Development</span>
                <span data-href-value="services/quality-assurance.html"
                    class="footer-link span-link">Quality Assurance</span>
                <span data-href-value="services/mvp-builder.html"
                    class="footer-link span-link">MVP Builder</span>
                <span data-href-value="services/dedicated-teams.html"
                    class="footer-link span-link">Dedicated Teams</span>
            </div>

            <div class="footer-card">
                <h2 class="footer-headings">Quick Links</h2>
                <span data-href-value="https://zaptatech.com/about-us" class="footer-link span-link">About Us</span>
                <span data-href-value="services.html"
                    class="footer-link span-link">Services</span>
                <span data-href-value="projects.html"
                    class="footer-link span-link">Projects</span>
                <span data-href-value="https://zaptatech.com/blogs" class="footer-link span-link">Blogs</span>
                <span data-href-value="https://career.zaptatech.com/job-openings"
                    class="footer-link span-link">Careers</span>
                <span data-href-value="https://zaptatech.com/contact-us" class="footer-link span-link">Contact
                    Us</span>
                
            </div>

            <div class="footer-card">
                <h2 class="footer-headings">Contact Us</h2>

                <div class="link-icons">
                    <img width="16" height="16" src="frontend-assets/images/icons/phone.svg"
                        alt="phone icon">
                    <a href="tel:042-37888403" class="footer-link"> 042-37888403</a>
                </div>

                <div class="link-icons">
                    <img width="16" height="16" src="frontend-assets/images/icons/envelop.svg"
                        alt="envelop icon">
                    <a href="mailto:contact@zaptatech.com" class="footer-link">contact@zaptatech.com</a>
                </div>

                <div class="link-icons">
                    <img width="16" height="16"
                        src="frontend-assets/images/icons/location.svg" alt="location icon">
                    <a href="https://goo.gl/maps/v5kwTnd24vVbEnGQ6" target="_blank" class="footer-link">144/2, Block
                        B, Bankers Society Near DHA Phase 4, Lahore, 54792</a>
                </div>

                <div class="social-icons">
                    <a href="https://www.facebook.com/zaptatech" target="_blank" class="social-link"
                        aria-label="navigateToFacebook">
                        <svg width="11" height="21" viewBox="0 0 11 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.82765 3.78265H10.6442V0.6149C10.3308 0.571734 9.25298 0.474609 7.99771 0.474609C5.37856 0.474609 3.58437 2.12406 3.58437 5.15567V7.94571H0.694092V11.487H3.58437V20.3975H7.12798V11.4878H9.90135L10.3416 7.94654H7.12715V5.50681C7.12798 4.48327 7.40324 3.78265 8.82765 3.78265Z"
                                fill="#005BAA" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/zaptatech/mycompany/" target="_blank"
                        class="social-link" aria-label="navigateToLinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" height="19px" width="19px" viewBox="0 0 448 512">
                            <path
                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                                fill="#005BAA" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/zaptatech" target="_blank" class="social-link"
                        aria-label="navigateToTwitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19"
                            fill="none">
                            <path
                                d="M0.78734 0.973206L7.9275 10.5224L0.742188 18.2829H2.35933L8.65032 11.4873L13.7347 18.2833H19.2365L11.6941 8.19874L18.3824 0.973206H16.7652L10.9717 7.23081L6.29025 0.973206H0.78734ZM3.16562 2.16462H5.69378L16.8571 17.0915H14.3297L3.16562 2.16462Z"
                                fill="#005BAA" />
                        </svg>

                    </a>
                    <a href="https://www.instagram.com/zaptatech/" target="_blank" class="social-link"
                        aria-label="navigateToInstagram">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.67097 6.38428C7.86107 6.38428 7.08435 6.70601 6.51166 7.27869C5.93898 7.85137 5.61725 8.6281 5.61725 9.43799C5.61725 10.2479 5.93898 11.0246 6.51166 11.5973C7.08435 12.17 7.86107 12.4917 8.67097 12.4917C9.48086 12.4917 10.2576 12.17 10.8303 11.5973C11.403 11.0246 11.7247 10.2479 11.7247 9.43799C11.7247 8.6281 11.403 7.85137 10.8303 7.27869C10.2576 6.70601 9.48086 6.38428 8.67097 6.38428Z"
                                fill="#005BAA" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.75684 1.05863C7.02293 0.696602 10.319 0.696602 13.5851 1.05863C15.3694 1.25783 16.808 2.66254 17.0175 4.45343C17.4048 7.76521 17.4048 11.1109 17.0175 14.4226C16.808 16.2135 15.3694 17.6182 13.5861 17.8184C10.3197 18.1805 7.02324 18.1805 3.75684 17.8184C1.97253 17.6182 0.533997 16.2135 0.324465 14.4236C-0.0629077 11.1115 -0.0629077 7.76552 0.324465 4.45343C0.533997 2.66254 1.97253 1.25783 3.75684 1.05863ZM13.369 3.8004C13.1198 3.8004 12.8808 3.89939 12.7046 4.0756C12.5284 4.25181 12.4294 4.49081 12.4294 4.74001C12.4294 4.9892 12.5284 5.2282 12.7046 5.40441C12.8808 5.58062 13.1198 5.67961 13.369 5.67961C13.6182 5.67961 13.8572 5.58062 14.0334 5.40441C14.2096 5.2282 14.3086 4.9892 14.3086 4.74001C14.3086 4.49081 14.2096 4.25181 14.0334 4.0756C13.8572 3.89939 13.6182 3.8004 13.369 3.8004ZM4.20785 9.43803C4.20785 8.25434 4.67808 7.11912 5.51507 6.28213C6.35207 5.44513 7.48729 4.97491 8.67098 4.97491C9.85468 4.97491 10.9899 5.44513 11.8269 6.28213C12.6639 7.11912 13.1341 8.25434 13.1341 9.43803C13.1341 10.6217 12.6639 11.7569 11.8269 12.5939C10.9899 13.4309 9.85468 13.9012 8.67098 13.9012C7.48729 13.9012 6.35207 13.4309 5.51507 12.5939C4.67808 11.7569 4.20785 10.6217 4.20785 9.43803Z"
                                fill="#005BAA" />
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/@ZAPTATechnologies" target="_blank" class="social-link"
                        aria-label="navigateToYouTube">
                        <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.12 2.93766C19.0136 2.5426 18.8054 2.1824 18.5161 1.89311C18.2268 1.60382 17.8666 1.39559 17.4716 1.28926C16.0167 0.895508 10.1706 0.895508 10.1706 0.895508C10.1706 0.895508 4.32442 0.895508 2.86955 1.28926C2.4745 1.39559 2.1143 1.60382 1.82501 1.89311C1.53572 2.1824 1.32749 2.5426 1.22115 2.93766C0.949498 4.42139 0.817672 5.92735 0.827406 7.43572C0.817672 8.94409 0.949498 10.45 1.22115 11.9338C1.32749 12.3288 1.53572 12.689 1.82501 12.9783C2.1143 13.2676 2.4745 13.4758 2.86955 13.5822C4.32442 13.9759 10.1706 13.9759 10.1706 13.9759C10.1706 13.9759 16.0167 13.9759 17.4716 13.5822C17.8666 13.4758 18.2268 13.2676 18.5161 12.9783C18.8054 12.689 19.0136 12.3288 19.12 11.9338C19.3916 10.45 19.5235 8.94409 19.5137 7.43572C19.5235 5.92735 19.3916 4.42139 19.12 2.93766ZM8.30193 10.2387V4.63277L13.1537 7.43572L8.30193 10.2387Z"
                                fill="#005BAA" />
                            <path d="M8.31012 4.62988V10.2472L13.1588 7.4386L8.31012 4.62988Z" fill="white" />
                        </svg>
                    </a>

                </div>

            </div>

        </div>
        <p class="copy-rights">© 2023 Copyrights ZAPTA Technologies. All rights are reserved.</p>
    </div>
</footer>


<!--Scripts -->

<!-- Hide Logs -->
<script>
    var isLogTrue = '1';

    var customCurrentRouteName="frontend.home";
    var baseUrl = "index.html";

    // if(isLogTrue != true){
    //   console.log = () => {}
    //   console.error = () => {}
    //   console.debug = () => {}
    // }
</script>
<!-- End Hide Logs -->


<!-- Jquery -->
<script src="frontend-assets/libraries/js/jquery.js"></script>
<!--Jquery Ends -->

<!-- Popper Js -->
<script src="frontend-assets/libraries/js/popper.js" defer></script>
<!-- Popper Js Ends -->

<!-- Bootstrap 5 JS -->
<script src="frontend-assets/libraries/js/bootstrap.js" defer></script>
<!-- Bootstrap 5 JS Ends-->

<!-- Toaster JS -->
<script cache-files="cached" src="../cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Toaster JS Ends-->


<script cache-files="cached" src="frontend-assets/libraries/js/select2.js"></script>


<!-- Include FontFaceObserver from a CDN -->
<script src="../cdnjs.cloudflare.com/ajax/libs/fontfaceobserver/2.0.13/fontfaceobserver.standalone.js"></script>

<script type="text/javascript" defer>
    const proximaNova = new FontFaceObserver('Proxima Nova');

    proximaNova.load().then(() => {
        document.documentElement.classList.add('proxima-nova-loaded');
    }).catch(() => {
        console.log('Proxima Nova failed to load');
    });
</script>


<!-- Swipper JS -->

<script src="../cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.js"></script>
<script src="frontend-assets/js/customSwipper.js" defer></script>
<!-- Swipper JS Ends -->

<!-- Jquery-validation JS -->
<script src="frontend-assets/libraries/js/jqueryValidate.js"></script>
<!-- Jquery-validation cdn Ends-->

<script src="frontend-assets/js/feedackSelector.js" defer></script>




<!-- custom Js -->
<script  src="frontend-assets/js/script.js" data-param1="[]" data-param2="[&quot;&quot;]" defer></script>
<!-- custom Js Ends -->

<script  src="frontend-assets/js/main.js" defer></script>

<!-- custom Base Ajax Script -->
<script  src="frontend-assets/js/baseAjax.js" defer></script>
<!-- custom Base Ajax Script Ends -->


<script type="text/javascript" defer>
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "3000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut",
      "closeHtml" : '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">\
  <path d="M16.066 9.49502C16.1377 9.42587 16.1948 9.34314 16.2342 9.25165C16.2735 9.16017 16.2943 9.06176 16.2952 8.96218C16.2961 8.8626 16.2772 8.76383 16.2395 8.67164C16.2018 8.57945 16.1462 8.49568 16.0758 8.42523C16.0054 8.35478 15.9217 8.29905 15.8295 8.2613C15.7374 8.22354 15.6386 8.20452 15.5391 8.20534C15.4395 8.20616 15.341 8.2268 15.2495 8.26606C15.158 8.30532 15.0752 8.36242 15.006 8.43402L12 11.439L8.995 8.43402C8.92634 8.36033 8.84354 8.30123 8.75154 8.26024C8.65954 8.21925 8.56022 8.19721 8.45952 8.19543C8.35882 8.19365 8.25879 8.21218 8.1654 8.2499C8.07201 8.28762 7.98718 8.34376 7.91596 8.41498C7.84474 8.4862 7.7886 8.57103 7.75087 8.66442C7.71315 8.75781 7.69463 8.85784 7.69641 8.95854C7.69818 9.05925 7.72022 9.15856 7.76122 9.25056C7.80221 9.34256 7.86131 9.42536 7.935 9.49402L10.938 12.5L7.933 15.505C7.80052 15.6472 7.72839 15.8352 7.73182 16.0295C7.73525 16.2238 7.81396 16.4092 7.95138 16.5466C8.08879 16.6841 8.27417 16.7628 8.46847 16.7662C8.66278 16.7696 8.85082 16.6975 8.993 16.565L12 13.56L15.005 16.566C15.1472 16.6985 15.3352 16.7706 15.5295 16.7672C15.7238 16.7638 15.9092 16.6851 16.0466 16.5476C16.184 16.4102 16.2627 16.2248 16.2662 16.0305C16.2696 15.8362 16.1975 15.6482 16.065 15.506L13.062 12.5L16.066 9.49502Z" fill="#636363"/>\
</svg>',
    }

    // Load Toaster Css when page is loaded
    window.addEventListener('load', function() {
                // var smartWizardBundleJS = document.getElementById('smartWizardBundleJS');
                // smartWizardBundleJS.src = "https://zaptatech.com/frontend-assets/libraries/js/swiperBundle.js";


                // // Add an event listener to check when the first script is loaded
                // smartWizardBundleJS.onload = function() {
                //     var smartWizardBundleCustomJS = document.getElementById('smartWizardBundleCustomJS');
                //     smartWizardBundleCustomJS.src = "https://zaptatech.com/frontend-assets/js/customSwipper.js";
                // };

            var select2Css = document.createElement("link");
            select2Css.rel = "stylesheet";
            select2Css.type = "text/css";
            select2Css.href = "frontend-assets/libraries/css/select2.css";


            var select2CustomCss = document.createElement("link");
            select2CustomCss.rel = "stylesheet";
            select2CustomCss.type = "text/css";
            select2CustomCss.href = "frontend-assets/css/customSelect2Style.css";

            document.head.appendChild(select2Css);
            document.head.appendChild(select2CustomCss);
        });
</script>



    <!-- Country Selecter Js -->
    <script src="../cdn.jsdelivr.net/npm/intl-tel-input%4015.1.2/build/js/intlTelInput.min.js" defer></script>
    <!-- Country Selecter Js Ends -->

    <!-- Flatepicker JS -->
    <script src="frontend-assets/libraries/js/flatepicker.js"></script>
    <!-- Flatepicker JS Ends -->

    <script type="text/javascript" defer>
        window.addEventListener('load', function() {
            getHomeProjects();
        });

        function getHomeProjects() {
            $.ajax({
                type: "get",
                url: "https://zaptatech.com",
                cache: false,
                success: function(response) {
                    if (response.status) {
                        $(".project-loader").css("display", "none");
                        $('#home-projects').append(response.home_projects);
                        if (window.innerWidth >= 768) {
                            attachHoverEvents();
                        }
                        // add onclick events
                        var e = $(".span-link");
                        e && e.each(function() {
                            $(this).on("click", function(e) {
                                var a = $(this).attr("data-href-value");
                                e.ctrlKey || e.metaKey ? window.open(a, "_blank") : window
                                    .location.href = a
                            })
                        });
                    }
                }
            });
        }
        // var video = document.getElementById("myVideo");

        // // Add an event listener for the "loadedmetadata" event
        // video.addEventListener("loadedmetadata", function() {
        //     video.play().catch(function(error) {
        //         // Handle the error if video playback fails
        //         console.error('Video playback failed:', error.message);
        //     });
        // });

        // var bgVideos = document.getElementById('myVideo');
        // if (bgVideos) {
        //     setTimeout(() => {
        //         // bgVideos.setAttribute('src', 'https://beeba-dev.s3.us-west-1.amazonaws.com/Hero-section-video.mp4');
        //         bgVideos.setAttribute('src', "https://zaptatech.com/frontend-assets/media/zapta-processes.mp4");
        //         bgVideos.addEventListener('canplaythrough', function() {

        //             $(".backgrpound-video").css("opacity", "1");
        //             $(".attribute-to-team").css("display", "none");
        //         });

        //     }, 3000);
        // }
    </script>


    <script src="frontend-assets/js/schedule-call.js"
        data-param="https://zaptatech.com/get-availabe-slots" data-param2="https://zaptatech.com/get-time-zones"
        data-param3="30" defer></script>

    <script type="text/javascript" defer>
        // For Videos and Lottie Player

        // Function to show video player and hide the other
        function toggleVideoPlayer(playerToShow, playerToHide) {
            playerToShow.style.display = "block";
            playerToHide.style.display = "none";
            playerToShow.currentTime = 0; // Reset the playback progress to the beginning
            playerToShow.play();
        }

        // Attach event listener for hover in and hover out for all project cards
        function attachHoverEvents() {
            var projectCards = document.querySelectorAll('.project-cards2');
            projectCards.forEach(function(projectCard) {
                var projectThumbnails = projectCard.querySelectorAll('.grid-left');
                projectThumbnails.forEach(function(projectThumbnail) {

                    let videoPlayers = projectThumbnail.querySelectorAll('.video-player');

                    projectThumbnail.addEventListener('mouseenter', function() {
                        isHovered = true;
                        let image = projectThumbnail.querySelector('.thumbnail-img');
                        image.style.display = "none";


                        // Check if video player already exists
                        const existingVideoPlayer = projectThumbnail.querySelector('.video-player');
                        if (!existingVideoPlayer) {
                            const hoverInVideoSrc = image.getAttribute('data-hover-in-video');
                            const hoverInVideoType = image.getAttribute('data-hover-in-video-type');

                            const hoverOutVideoSrc = image.getAttribute('data-hover-out-video');
                            const hoverOutVideoType = image.getAttribute(
                                'data-hover-out-video-type');

                            // Create a new video hoverIn player
                            createVideoElement(image, hoverInVideoSrc, hoverInVideoType,
                                projectThumbnail);

                            // Create a new video hoverIn player
                            createVideoElement(image, hoverOutVideoSrc, hoverOutVideoType,
                                projectThumbnail);

                            videoPlayers = projectThumbnail.querySelectorAll('.video-player');
                        }

                        toggleVideoPlayer(videoPlayers[0], videoPlayers[1]);
                    });

                    projectThumbnail.addEventListener('mouseleave', function() {
                        isHovered = false;
                        setTimeout(function() {
                            if (!isHovered) {
                                toggleVideoPlayer(videoPlayers[1], videoPlayers[0]);
                                let image = projectThumbnail.querySelector(
                                    '.thumbnail-img');
                                // image.style.display = "block";
                            }
                        }, 0); // Adjust the time (in milliseconds) before the video stops
                    });
                });
            });
        }

        function createVideoElement(image, videoSrc, videoType, projectThumbnail) {

            const videoPlayer = document.createElement('video');
            videoPlayer.className = 'video-player';
            videoPlayer.poster = image.src;
            videoPlayer.autoplay = true;
            videoPlayer.muted = true;
            videoPlayer.preload = 'none';

            const source = document.createElement('source');
            source.src = videoSrc;
            source.type = videoType;
            videoPlayer.appendChild(source);
            const thumbnailType = image.getAttribute('data-parent-class');
            projectThumbnail.querySelector('.' + thumbnailType).appendChild(
                videoPlayer);
        }

        // Attach event listener for when all resources have been loaded
        // document.addEventListener('DOMContentLoaded', function() {
        //     if (window.innerWidth >= 768) {

        //         attachHoverEvents();
        //     }
        // });

        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) {

                attachHoverEvents();
            }
        });
    </script>


    <script type="text/javascript" defer>
        $(document).ready(function() {
            $('.need-expert').click(function(e) {
                e.preventDefault();
                $(".bookingFormShow").click();
            });
        })

        window.addEventListener('load', function() {

            // Create a new link element
            var intelInputCss = document.createElement("link");
            intelInputCss.rel = "stylesheet";
            intelInputCss.type = "text/css";
            intelInputCss.href = "../cdn.jsdelivr.net/npm/intl-tel-input%4015.1.2/build/css/intlTelInput.css";


            // var select2Css = document.createElement("link");
            // select2Css.rel = "stylesheet";
            // select2Css.type = "text/css";
            // select2Css.href = "https://zaptatech.com/frontend-assets/libraries/css/select2.css";


            // var select2CustomCss = document.createElement("link");
            // select2CustomCss.rel = "stylesheet";
            // select2CustomCss.type = "text/css";
            // select2CustomCss.href = "https://zaptatech.com/frontend-assets/css/customSelect2Style.css";


            // var flatPickerCss = document.createElement("link");
            // flatPickerCss.rel = "stylesheet";
            // flatPickerCss.type = "text/css";
            // flatPickerCss.href = "https://zaptatech.com/frontend-assets/libraries/css/flatepicker.css";

            // Get a reference to the element you want to insert the link before
            var referenceLink = document.querySelector(
                "head > link[href='https://zaptatech.com/frontend-assets/css/style.css']");
            // Insert the link element before the reference element
            if (referenceLink) {
                var parent = referenceLink.parentNode;
                parent.insertBefore(intelInputCss, referenceLink);
                // parent.insertBefore(select2Css, referenceLink);
                // parent.insertBefore(select2CustomCss, referenceLink);
                // parent.insertBefore(flatPickerCss, referenceLink);
            } else {
                // If no reference element is found, just append it to the end of the head
                document.head.appendChild(intelInputCss);
                // document.head.appendChild(select2Css);
                // document.head.appendChild(select2CustomCss);
                // document.head.appendChild(flatPickerCss);
            }

        });
    </script>

    <script type="text/javascript" defer>
        $(document).ready(function() {

            $(".shedule-section-scroller").on("click", function() {

                if ($(".accordion-collapse").hasClass("scroll")) {
                    const targetTabContent = $(".shedul-call-sec");

                    const targetOffset = targetTabContent.offset().top + 260;
                    console.log(targetOffset);
                    $("html, body").animate({
                        scrollTop: targetOffset
                    }, 500);

                    $(".accordion-collapse").removeClass("scroll");
                } else {
                    $(".accordion-collapse").addClass("scroll");
                }
            });

        });

        $(document).ready(function() {
            // $(".hand-tool").addClass("hand-tool-animation");


            // setTimeout(() => {
            $(".hand-tool").addClass("animation-left");
            // },1000);

            setTimeout(() => {
                $(".graph__wrapper").addClass("add-path");
            }, 3000);
        });
    </script>

    <script type="text/javascript" defer>
        const $button = document.querySelector(".wave-btn");
        const waveContainer = document.querySelector("#waveContainer");
        // waveContainer

        let debounce = false;
        // $button.addEventListener("click", () => {
        // if (debounce) return;
        // debounce = true;
        // buttonAnimate();
        // createWave();
        // });



        function runCode() {
            if (debounce) return;
            debounce = true;
            buttonAnimate();
            createWave();
        }

        const interval = setInterval(runCode, 2000);

        // setTimeout(() => {
        //     const interval = setInterval(runCode, 2000);
        //     }, 1500);

        const buttonAnimate = () => {
            // $button.classList.add("clicked");
            setTimeout(() => {
                // $button.classList.remove("clicked");
                debounce = false;
            }, 700);
        };

        const createWave = () => {
            const wave = document.createElement("div");
            wave.classList.add("wave");
            waveContainer.appendChild(wave);
            setTimeout(() => wave.remove(), 7000);
        };

        var desktopElement = document.querySelector(".smart-wizard-desktop");

        if (desktopElement) {
            var desktopSwiper = new Swiper(desktopElement, {
                slidesPerView: 1,
                spaceBetween: 0,
                simulateTouch: false,
                shortSwipes: false,
                allowTouchMove: false,
                slideToClickedSlide: false,
            });

            $(".next-slide").on("click", function() {
                if (desktopSwiper && !desktopSwiper.destroyed) {
                    desktopSwiper.slideNext();
                }
            });

            $(".previous-slide").on("click", function() {
                if (desktopSwiper && !desktopSwiper.destroyed) {
                    desktopSwiper.slidePrev();
                }
            });
        }

        var mobileElement = document.querySelector(".smart-wizard");

        if (mobileElement) {

            if ($(window).width() < 992) {
                var swiper = new Swiper(".smart-wizard", {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    simulateTouch: false,
                    shortSwipes: false,
                    allowTouchMove: false,
                    slideToClickedSlide: false,

                    on: {
                        slideChange: function() {
                            setWrapperHeight();
                        },
                    },
                });

                function setWrapperHeight() {
                    const activeSlide = swiper.slides[swiper.activeIndex];
                    const wrapper = swiper.wrapperEl;
                    if (activeSlide && activeSlide.offsetHeight) {
                        console.log(activeSlide.offsetHeight);
                        wrapper.style.height = activeSlide.offsetHeight + 'px';
                    }
                }
                window.addEventListener('load', setWrapperHeight);
                $(".nextSlide").click(function() {
                    swiper.slideNext();
                });

                $(".prevSlide").click(function() {
                    swiper.slidePrev();
                });
            }

        }

        var e, i = document.querySelector("#scroll-swiper");

        if (typeof Swiper !== "undefined" && i !== null) {
            e = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 0,
                speed: 600,
                autoplay: false,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                },

            });
        }
        window.onload = function() {
            // Your code snippet
            setTimeout(() => {
                if (typeof Swiper !== "undefined" && i !== null && $(window).width() > 991) {

                    e = new Swiper(".mySwiper", {
                        slidesPerView: 1,
                        spaceBetween: 0,
                        speed: 600,
                        autoplay: false,
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        freeMode: true,
                        mousewheel: {
                            sensitivity: 1,
                            releaseOnEdges: true,
                        },
                        passiveListeners: false,
                    });
                }
            }, 1000);

            
        };

        $(document).ready(function() {

            // $(document).on("shown.bs.dropdown", ".dropdown", function() {

            // var field = $('.country-select-mobile');
            // var fieldPos = field.offset();
            // var fieldWidth = field.outerWidth();
            // var fieldHeight = field.outerHeight();

            // // Set the position of the dropdown menu
            // $(".intl-tel-input.iti-container").css({
            //     position: "absolute",
            //     top: fieldPos.top + fieldHeight,
            //     left: fieldPos.left,
            //     width: fieldWidth,
            // });
            // console.log(field);
            // });

        });

        document.addEventListener("DOMContentLoaded", function() {
            var backgroundDiv = document.querySelector(".background-image-placeholder");
            var imageUrl = "frontend-assets/images/offices-bg.webp";
            backgroundDiv.style.backgroundImage = 'url("' + imageUrl + '")';
        });
    </script>
    <script>
        // Wait for the DOM content to load
        document.addEventListener("DOMContentLoaded", function() {
            // Find the iframe element
            var iframe = document.querySelector('#myVideo iframe');
            var windowWidth = $(window).width();
            var iframeHeight = windowWidth / 2 + 200;
            console.log(iframeHeight);
            if($(window).width() > 1439){
                iframe.style.minHeight = iframeHeight + 'px';
                iframe.style.height = 100 + 'vh';
                iframe.style.width = 100 + '%';
            }

         
            if (iframe) {
               
                setTimeout(function() {
                   
                    $(".backgrpound-video").css("opacity","1");
                }, 1000); 
            }
        });

    </script>

<script>

$(document).ready(function() {

    $('#videoModal').modal({
        backdrop: 'static',
        keyboard: false,
    });
    
    document.querySelectorAll(".video-pop").forEach(function(element) {
        element.addEventListener("click", function(event) {
            event.preventDefault();
            $("#videoModal").modal("show");
            var videoId = this.getAttribute("data-id");
            document.getElementById("video-popup-iframe").src = "https://www.youtube.com/embed/" + videoId + "?autoplay=1&controls=0&modestbranding=1&;showinfo=0&;autohide=1&;rel=0;";
        });
    });
    
    document.querySelectorAll("#video-popup-close").forEach(function(element) {
        element.addEventListener("click", function(event) {
            $("#videoModal").modal("hide");
            document.getElementById("video-popup-iframe").src = "";
        });
    });

});

      
    var swiper = new Swiper(".testiSwiper", {
   
    speed: 1200,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    loop: true,
});

</script>


    <script>
        $(document).ready(function() {

            $(".select-options li:not(:first-child)").click(function() {

                $(".select-styled").css("color", "#636363").css("important", "color");
                $("#selectBudget").val($(this).text());
                $("#selectBudget").next("label.error").remove();
                $(this).addClass('custom-selected');
                if ($(this).prev().length > 0) {
                    $(this).prevAll().removeClass('custom-selected');
                }
                if ($(this).next().length > 0) {
                    $(this).nextAll().removeClass('custom-selected');
                }

            });

            $(".services-wraper .service").click(function() {
                $(this).toggleClass("selected");
            });
        });

        function getInTouchError(e) {
            console.log(e);
            $('.error.error-message.customError').remove();
            $.each(e.errors, function(field, messages) {
                if (field == 'services' || field == 'looking_for') {
                    console.log(field)

                    $(`#${field}_error`).css({
                        'display': 'block'
                    });
                    $(`#${field}_error`).text(messages[0]);
                } else {
                    console.log("field",field);
                    if(field == 'document'){
                        $('.upload-document').after('<label class="error error-message customError" for="' + field +
                            '">' + messages[0] + "</label>")
                    }else{
                        $(document).find("input[name=" + field + "]").after('<label class="error error-message customError" for="' + field +
                            '">' + messages[0] + "</label>");
                    }
                }
            });
        }

    </script>


  <script>

    $( window ).on( "load", function() {

      $(".zapta-loader").css("display","none");

    } );


    function showInformation() {
      var informationContainer = document.getElementById('informationContainer');

        if (window.innerWidth > 991) {
          informationContainer.style.display = 'block';
        } else {
          informationContainer.style.display = 'none';
        }
    }

    function hideInformation() {
      document.getElementById('informationContainer').style.display = 'none';
    }
    </script>
    <script>

    window.addEventListener('load', function() {
            var toasterCss = document.createElement("link");
            toasterCss.rel = "stylesheet";
            toasterCss.type = "text/css";
            toasterCss.href = "../cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css";
            var referenceLink = document.querySelector("head > link[href='https://zaptatech.com/frontend-assets/libraries/css/bootstrap.css']");
            if (referenceLink) {
                var parent = referenceLink.parentNode;
                parent.insertBefore(toasterCss, referenceLink.nextSibling);
              } else {
                document.head.appendChild(toasterCss);
            }
        });
  </script>
<script>

  setTimeout(function (){
    const newMetaTag = document.createElement("meta");
    newMetaTag.setAttribute("http-equiv", "refresh");
    newMetaTag.setAttribute("content", "7140");
    const headElement = document.head;
    headElement.appendChild(newMetaTag);
  }, 60000);

</script>
</body>
</html>
