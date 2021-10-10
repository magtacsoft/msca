@extends('layouts.front')
@section('header')
    @include('front.includes.header')
@endsection

@section('content')
    <div class="wprt-spacer" data-desktop="120" data-mobi="60" data-smobi="60" style="height:120px"></div>
    <div id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">{{$data['title']}}</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="{{route('index')}}" title="Construction" rel="home" class="trail-begin">Əsas səhifə</a>
                            <span class="sep">/</span>
                            <span class="trail-end">{{$data['title']}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">
                        <!-- GALLERY -->
                        <section class="wprt-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60" style="height:80px"></div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-6">


                                        <h2 class="line-height-normal margin-bottom-10">{{$data['title']}}</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25" style="height:25px"></div>
                                        <p class="margin-bottom-25">
                                        </p>{!! $data['text'] !!}</p><p><br></p><p>&nbsp;<strong><em>İdarə Heyətinin sədri: Anar E.Musayev</em></strong></p>
                                        <p></p>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="wprt-galleries galleries w-570px" data-width="135" data-margin="10">
                                            <div id="" class="flexslider">
                                                <ul class="slides">
                                                    <li class="flex-active-slide">
                                                        <a class="zoom" href="{{asset('uploads/' . $data['img'])}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('uploads/' . $data['img'])}}" alt="image">
                                                    </li>
                                                </ul>
                                            </div>

                                            <div id="wprt-carousel" class="flexslider">

                                                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="index-logo slides" style="width: 200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                        <li class="indexLogo flex-active-slide" style="width: 135px; margin-right: 10px; float: left; display: block;"><img src="{{asset('uploads/' . $data['img'])}}" alt="image" draggable="false"></li>
                                                    </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1"><i class="fa fa-angle-left"></i></a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1"><i class="fa fa-angle-right"></i></a></li></ul></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60" style="height:80px"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60" style="height:70px"></div>
@endsection



