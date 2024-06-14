@extends('layouts.app')

@section('title', 'Learn Guide')

@section('content')
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area"
         style="background: rgba(0, 0, 0, 0) url('{{ asset('assets/images/bg/learn.png') }}') no-repeat scroll center center / cover ;"
         data--black__overlay="6">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Learn Guide</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
                                <span class="brd-separetor"><i class="fa fa-angle-right"></i></span>
                                <span class="breadcrumb-item active">Learn Guide</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    {{-- <!-- Start PortFolio Area -->
    <section class="htc__portfolio__container portfolio--2 pt--130 pb--130 bg__gray">
        <div class="portfolio__area portfolio__activation--2">
            <div class="container">
                <div class="section__title text-center">
                    <h2 class="title__line">Our <span class="text--theme">Learn Guide</span></h2>
                </div>

                <div class="row portfolio__wrap portfolio__active--2 mt--70 mt-sm--60">
                    @foreach(\App\Models\Guide::all() as $Guide)
                        <!-- Start Single Images -->
                        <div class="col-lg-4 col-md-6 col-12 pro__item cat--1 cat--3"
                             style="height: 450px; overflow: hidden">
                            <a href="{{ asset('storage/' . $Guide->image) }}" class="portfolio-4"
                               data-lightbox="photos" data-title="{{ $Guide->title }}">
                                <img src="{{ asset('storage/' . $Guide->image) }}" alt="portfolio images">
                                <div class="portfolio-hover">
                                    <h2 class="title">{{ $Guide->title }}</h2>
                                </div>
                            </a>
                        </div>
                        <!-- End Single Images -->
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End PortFolio Area --> --}}


    <!-- Start PortFolio Area -->
    <section class="htc__portfolio__container portfolio--2 pt--130 pb--130 bg__gray">
        <div class="portfolio__area portfolio__activation--2">
            <div class="container">
                <div class="section__title text-center">
                    <h2 class="title__line">{{ __('Learn') }} <span class="text--theme">{{ __('Guide') }}</span></h2>
                </div>


                <div class="row portfolio__wrap portfolio__active--2 mt--70 mt-sm--60">
                    @foreach (\App\Models\Guide::all() as $guide)
                        <div class="col-lg-4 col-md-6 col-12 pro__item cat--1 cat--3"
                             style="height: 450px; overflow: hidden">
                            <a href="{{ asset('storage/' . $guide->image) }}" class="portfolio-4"
                               data-lightbox="photos"
                               data-title="Name">
                                <img src="{{ asset('storage/' . $guide->image) }}" alt="portfolio images">
                                <div class="portfolio-hover">
                                    <h2 class="title">{{ $guide->name }}</h2>
                                </div>
                            </a>
                        </div>
                    @endforeach


            </div>
        </div>
    </section>
    <!-- End PortFolio Area -->




<!-- Start Our Blog Area -->
<section class="htc__blog__area htc__blog--2 pt--130 pb--130 bg__white">
    <div class="container">
        <div class="section__title text-center">
            <h2 class="title__line">Our <span class="text--theme">Learn Guide</span></h2>
        </div>
        <div class="row htc__blog__wrap mt--40 mt-sm--30">
            @foreach(\App\Models\guide::all() as $guide)
                <!-- Start Single Blog -->
                <div class="col-md-6 col-12 mt--30">
                    <div class="blog">
                        <div class="blog__inner">
                            <div class="blog__thumb" style="height: 250px; overflow: hidden">
                                <a href="{{ route('blog.show', ['slug' => $guide->name]) }}">
                                    <img src="{{ asset('storage/' . $guide->image) }}" alt="blog images">
                                </a>
                                <div class="blog__hover__inner">
                                    <div class="blog__hover__action">
                                        <a href="{{ route('blog.show', ['slug' => $guide->name]) }}"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog__details">
                                <div class="blog__date">
                                    <i class="fa fa-clock-o"></i>{{ $guide->published_at->format('d M, Y') }}
                                </div>
                                <h2><a href="{{ route('blog.show', ['slug' => $guide->name]) }}">{{ $guide->title }}</a></h2>
                                <p>{{ Str::limit($blog->content, 200)  }}</p>
                                <div class="blog__btn--2">
                                    <a class="read__more__btn" href="{{ route('blog.show', ['slug' => $guide->name]) }}">read more......</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up"></i>0</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            @endforeach
        </div>
    </div>
</section>
<!-- End Our Blog Area -->









@endsection
