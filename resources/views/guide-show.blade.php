@extends('layouts.app')

@section('title', 'Guide')

@section('content')
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area"
         style="background: rgba(0, 0, 0, 0) url('{{ asset('assets/images/bg/6.jpg') }}') no-repeat scroll center center / cover ;"
         data--black__overlay="6">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Guide show</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
                                <span class="brd-separetor"><i class="fa fa-angle-right"></i></span>
                                <span class="breadcrumb-item active">Guide show</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start List View -->
    <section class="htc__blog__details ptb--130 bg__white">
        <div class="container">
            <div class="row blog__details__wrap">
                <!-- Start Event Left SideBar -->
                <div class="col-lg-8 col-12">
                    <div class="htc__blog__dtl__inner">
                        <h2>{{ $guide->name }}</h2>
                        <ul class="event__post__date">
                            <li><i class="fa fa-clock-o"></i>{{ $guide->created_at->format('d M, Y') }}</li>
                        </ul>
                        <div class="blog__btl__thumb">
                            <img src="{{ asset('storage/' . $guide->image) }}" alt="{{ $guide->title }}">
                        </div>
                        <div class="htc__blog__details">
                            {!! nl2br($guide->description) !!}
                        </div>
                        <div class="htc__blog__details mt-3">
                            <h2>Video</h2>
                            <div class="blog__btl__thumb">
                                <iframe width="100%" height="315"
                                        src="{{ $guide->video }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Event Left SideBar -->
                <!-- Start Blog Right Sidebar -->
                <div class="col-lg-4 col-12 smmt--30 xsmt--40">
                    <div class="htc__right__sidebar">
                        <!-- Start Blog POst -->
                        <div class="blog__repost section__separator">
                            <h2 class="title__line-4">Recent Post</h2>
                            <div class="bolg__post__inner">
                                @forelse(\App\Models\Guide::where('id', '!=', $guide->id)->limit('3')->get() as $recent_guide)
                                    <div class="single__post">
                                        <div class="post__thumb">
                                            <a href="{{ route('guide.show', ['id' => $recent_guide->id]) }}">
                                                <img src="{{ asset('storage/' . $recent_guide->image) }}"
                                                     alt="recent post">
                                            </a>
                                        </div>
                                        <div class="post__details">
                                            <h4>
                                                <a href="{{ route('guide.show', ['id' => $recent_guide->id]) }}">
                                                    {{ Str::limit($recent_guide->description, 50) }}
                                                </a>
                                            </h4>
                                            <span class="post__date">
                                                {{ $recent_guide->created_at->format('d M, Y') }}
                                            </span>
                                        </div>
                                    </div>
                                @empty
                                    <p>No recent guides</p>
                                @endforelse
                            </div>
                        </div>
                        <!-- End Blog POst -->
                    </div>
                </div>
                <!-- End Blog Right Sidebar -->
            </div>
        </div>
    </section>
    <!-- End List View -->
@endsection
