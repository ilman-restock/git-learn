@extends('layouts.frontend.main')

@section('content')
    <div class="pb-0 pb-sm-2">
        <h1 class="title title--h1 first-title title__separate">About Me</h1>
        <p>I'm Creative Director and UI/UX Designer from Sydney, Australia, working in web development and print media. I enjoy turning complex problems into simple, beautiful and intuitive designs.</p>
        <p>My job is to build your website so that it is functional and user-friendly but at the same time attractive. Moreover, I add personal touch to your product and make sure that is eye-catching and easy to use. My aim is to bring across your message and identity in the most creative way. I created web design for many famous brand companies.</p>
    </div>

    <!-- What -->
    <div class="box-inner pb-0">
        <h2 class="title title--h3">What I'm Doing</h2>
        <div class="row">
            <!-- Case Item -->
            <div class="col-12 col-lg-6">
                <div class="case-item box box__second">
                <img class="case-item__icon" src="{{ asset('assets/icons/icon-design.svg') }}" />
                    <div>
                        <h3 class="title title--h5">Web Design</h3>
                        <p class="case-item__caption">The most modern and high-quality design made at a professional level.</p>
                    </div>	
                </div>
            </div>
            
            <!-- Case Item -->
            <div class="col-12 col-lg-6">
                <div class="case-item box box__second">
                <img class="case-item__icon" src="{{ asset('assets/icons/icon-dev.svg') }}" />
                    <div>
                        <h3 class="title title--h5">Web Development</h3>
                        <p class="case-item__caption">High-quality development of sites at the professional level.</p>
                    </div>
                </div>
            </div>
            
            <!-- Case Item -->
            <div class="col-12 col-lg-6">
                <div class="case-item box box__second">
                <img class="case-item__icon" src="{{ asset('assets/icons/icon-app.svg') }}" />
                    <div>
                        <h3 class="title title--h5">Mobile Apps</h3>
                        <p class="case-item__caption">Professional development of applications for iOS and Android.</p>
                    </div>
            </div>
            </div>
            
            <!-- Case Item -->
            <div class="col-12 col-lg-6">
                <div class="case-item box box__second">
                <img class="case-item__icon" src="{{ asset('assets/icons/icon-photo.svg') }}" />
                    <div>
                        <h3 class="title title--h5">Photography</h3>
                        <p class="case-item__caption">I make high-quality photos of any category at a professional level.</p>
                    </div>
                </div>
            </div>
        </div>	
    </div>

    <!-- Testimonials -->
    <div class="box-inner box-inner--white">
        <h2 class="title title--h3">Testimonials</h2>

        <div class="swiper-container js-carousel-review">
            <div class="swiper-wrapper">
                <!-- Item review -->
                <div class="swiper-slide review-item">
                    <svg class="avatar avatar--80" viewBox="0 0 84 84">
                        <g class="avatar__hexagon">
                            <image xlink:href="{{ asset('assets/img/Avatar-2.svg') }}" height="100%" width="100%" />
                        </g>
                    </svg>
                    <h4 class="title title--h5">Daniel Lewis</h4>
                    <p class="review-item__caption">Felecia was hired to create a corporate identity. We were very pleased with the work done.</p>
                </div>
                
                <!-- Item review -->
                <div class="swiper-slide review-item">
                    <svg class="avatar avatar--80" viewBox="0 0 84 84">
                        <g class="avatar__hexagon">
                            <image xlink:href="{{ asset('assets/img/Avatar-3.svg') }}" height="100%" width="100%" />
                        </g>
                    </svg>
                    <h4 class="title title--h5">Jessica Miller</h4>
                    <p class="review-item__caption">thanks to the skill of Felecia, we have a design that we can be proud of.</p>
                </div>
                
                <!-- Item review -->
                <div class="swiper-slide review-item">
                    <svg class="avatar avatar--80" viewBox="0 0 84 84">
                        <g class="avatar__hexagon">
                            <image xlink:href="{{ asset('assets/img/Avatar-4.svg') }}" height="100%" width="100%" />
                        </g>
                    </svg>
                    <h4 class="title title--h5">Tanya Ruiz</h4>
                    <p class="review-item__caption">Felecia was hired to create a corporate identity. We were very pleased with the work done.</p>
                </div>
                
                <!-- Item review -->
                <div class="swiper-slide review-item">
                    <svg class="avatar avatar--80" viewBox="0 0 84 84">
                        <g class="avatar__hexagon">
                            <image xlink:href="{{ asset('assets/img/Avatar-5.svg') }}" height="100%" width="100%" />
                        </g>
                    </svg>
                    <h4 class="title title--h5">Thomas Castro</h4>
                    <p class="review-item__caption">thanks to the skill of Felecia, we have a design that we can be proud of.</p>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Clients -->
    <div class="box-inner box-inner--rounded">
        <h2 class="title title--h3">Clients</h2>
        
        <div class="swiper-container js-carousel-clients">
            <div class="swiper-wrapper">
                <!-- Item client -->
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('assets/img/logo-partner.svg') }}" alt="Logo" /></a>
                </div>
                
                <!-- Item client -->
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('assets/img/logo-partner.svg') }}" alt="Logo" /></a>
                </div>

                <!-- Item client -->
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('assets/img/logo-partner.svg') }}" alt="Logo" /></a>
                </div>

                <!-- Item client -->
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('assets/img/logo-partner.svg') }}" alt="Logo" /></a>
                </div>
                
                <!-- Item client -->
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('assets/img/logo-partner.svg') }}" alt="Logo" /></a>
                </div>
                
                <!-- Item client -->
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('assets/img/logo-partner.svg') }}" alt="Logo" /></a>
                </div>
            </div>
            
            <div class="swiper-pagination"></div>
        </div>
    </div>
@endsection