@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Start Slider Area -->
    <div class="slider__container">
        <!-- Start Single Slide -->
        <div class="slide slider3__full--screen" data--black__overlay="7">
            <div id="ytplayer" class="player"
                 data-property="{
                 containment:'self',
                 startAt:14,
                 mute:true,
                 autoPlay:true,
                 loop:true,
                 opacity:1,
                 coverImage:'{{ asset('assets/images/bg/home1.png') }}'}">
            </div>
            <div class="container">
                <div class="slider__content__3">
                    <h1>{{ __('Welcome to') }} <br>{{ config('app.name') }}</h1>
                    <p>{{ __('Discover the wonders of sign language with our AI-powered Sign Language Learning experience. Utilizing cutting-edge AI technology, our platform offers interactive lessons and immersive practice sessions, guiding users through the intricacies of sign language communication. Embark on a journey of discovery and connection from the comfort of your own home. Start learning today!') }}</p>
                    <span class="scrolldown mt-5">
                        <img src="{{ asset('assets/images/icons/mouse.png') }}" alt="">
                    </span>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
    </div>
    <!-- Start Slider Area -->

    <!-- Start About Area -->
    <section class="htc__mshistory__area pt--120 pb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <div class="about-content-3 text-center">
                        <h2 class="title">{{ __('About our') }} <span>AI</span> {{ __('Model') }}</h2>
                        <p>{{ __('Our project focuses on an AI model for sign language communication. This advanced technology interprets, generates, and teaches sign language in real-time. Users can learn at their own pace through interactive lessons and practice scenarios. The AI model enhances communication, fosters inclusivity, and builds a global community of sign language users.') }}</p>
                        <canvas></canvas>
                        <a class="htc__btn btn__theme" href="#">{{ __('Explore More') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start PortFolio Area -->
    <section class="htc__portfolio__container portfolio--2 pt--130 pb--130 bg__gray">
        <div class="portfolio__area portfolio__activation--2">
            <div class="container">
                <div class="section__title text-center">
                    <h2 class="title__line">{{ __('Learn') }} <span class="text--theme">{{ __('Guide') }}</span></h2>
                </div>
                <div class="row portfolio__wrap portfolio__active--2 mt--70 mt-sm--60">
                    @foreach (\App\Models\Photo::limit(3)->get() as $photo)
                        <div class="col-lg-4 col-md-6 col-12 pro__item cat--1 cat--3"
                             style="height: 250px; overflow: hidden">
                            <a href="{{ asset('storage/' . $photo->photo_path) }}" class="portfolio-4"
                               data-lightbox="photos"
                               data-title="Name">
                                <img src="{{ asset('storage/' . $photo->photo_path) }}" alt="portfolio images">
                                <div class="portfolio-hover">
                                    <h2 class="title">{{ $photo->name }}</h2>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    <!-- Start Single Images -->
                    {{-- <div class="col-lg-4 col-md-6 col-12 pro__item cat--1 cat--3" style="height: 250px; overflow: hidden">
                        <a href="{{ asset('storage/name.jpg') }}" class="portfolio-4" data-lightbox="photos"
                            data-title="Name">
                            <img src="{{ asset('storage/name.jpg') }}" alt="portfolio images">
                            <div class="portfolio-hover">
                                <h2 class="title">Name</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 pro__item cat--1 cat--3" style="height: 250px; overflow: hidden">
                        <a href="{{ asset('storage/iloveyou.jpg') }}" class="portfolio-4" data-lightbox="photos"
                            data-title="I Love You">
                            <img src="{{ asset('storage/iloveyou.jpg') }}" alt="portfolio images">
                            <div class="portfolio-hover">
                                <h2 class="title">I Love You</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 pro__item cat--1 cat--3" style="height: 250px; overflow: hidden">
                        <a href="{{ asset('storage/family.jpg') }}" class="portfolio-4" data-lightbox="photos"
                            data-title="family">
                            <img src="{{ asset('storage/family.jpg') }}" alt="portfolio images">
                            <div class="portfolio-hover">
                                <h2 class="title">Family</h2>
                            </div>
                        </a>
                    </div> --}}

                    <!-- End Single Images -->
                </div>
                <div class="about-content-3 text-center">
                    <a class="htc__btn btn__theme" href="#">{{ __('Learn More') }}</a>

                </div>

            </div>
        </div>
    </section>
    <!-- End PortFolio Area -->

    <!-- Start Our Blog Area -->
    <section class="htc__blog__area htc__blog--2 pt--130 pb--130 bg__white">
        <div class="container">
            <div class="section__title text-center">
                <h2 class="title__line">{{ __('Our') }} <span class="text--theme">{{ __('Statistics') }}</span></h2>
            </div>
            <div class="row htc__blog__wrap mt--40 mt-sm--30">

            </div>
        </div>
    </section>
    <!-- End Our Blog Area -->

@endsection

@push('js')
@endpush
